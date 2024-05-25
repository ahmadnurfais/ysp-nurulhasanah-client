jQuery(document).ready(function($) {
    "use strict";

    function handleVariationImage() {
        var $quickView = $('.quick_view');
        var $variationForm = $quickView.find('.variations_form');

        // Initialize variation form
        $variationForm.wc_variation_form();

        // Trigger variation form events
        $variationForm.trigger('check_variations');
        $variationForm.trigger('reset_image');

        $variationForm.on('found_variation', function(event, variation) {
            var $mainImage = $quickView.find('.woocommerce-product-gallery__image img');
            var variationImageSrc = variation.image.src;
            var variationImageSrcset = variation.image.srcset;
            var variationImageSizes = variation.image.sizes;

            if (variationImageSrc) {
                $mainImage.attr('src', variationImageSrc);
            }

            if (variationImageSrcset) {
                $mainImage.attr('srcset', variationImageSrcset);
            }

            if (variationImageSizes) {
                $mainImage.attr('sizes', variationImageSizes);
            }
        });
    }

    $(".risehand_quick_view_btn").click(function(event) {
        event.preventDefault();
        var $quickViewBtn = $(this);
        var data = {
            action: 'quick_view',
            id: $quickViewBtn.attr('href'),
            nonce: RisehandAjax.nonce  ,
            beforeSend: function() {
                $('.quick_view_loading').addClass('loading');
            }
        };
        $.post(RisehandAjax.ajaxurl, data, function(response) {
            $.magnificPopup.open({
                type: 'inline',
                preloader: true,
                removalDelay: 160,
                zoom: {
                    enabled: true,
                    duration: 50
                },
                mainClass: 'mfp-fade',
                items: {
                    src: response
                },
                callbacks: {
                    open: function() {
                        handleVariationImage();
                    }
                }
            });
            $('.quick_view_loading').removeClass('loading');
            $('body').addClass('quickview_enable');

            // Select the elements with the class "your-class"
            var elements_r = $('.quick_view .woocommerce-product-gallery');

            // Remove the inline style from each selected element
            elements_r.removeAttr('style');
            var element = $('.quick_view .woocommerce-product-gallery .woocommerce-product-gallery__wrapper');
            // Add the class "galler_box" to the selected element
            element.addClass('owl-carousel');
            var owl = $('.quick_view .woocommerce-product-gallery__wrapper');
            owl.owlCarousel({
                autoplay: true,
                autoplayTimeout: 4000,
                loop: false,
                dots: false,
                items: 1,
                center: false,
                nav: true,
            });

            $('.quick_view .mfp-close').on('click', function() {
                $('.quick_view, .mfp-wrap').css('opacity', 0);
            });
 
            $('.product:not(.product-type-external) form.cart').on('submit', function (e) {
                e.preventDefault();
                var form = $(this);
                var formData = new FormData(form[0]);
                formData.append('add-to-cart', form.find('[name=add-to-cart]').val());
                $.ajax({
                    url: wc_add_to_cart_params.wc_ajax_url.toString().replace('%%endpoint%%', 'ace_add_to_cart'),
                    data: formData,
                    type: 'POST',
                    processData: !1,
                    contentType: !1,
                    complete: function (response) {
                        response = response.responseJSON;
                        if (!response) {
                            return
                        }
                        if (response.error && response.product_url) {
                            window.location = response.product_url;
                            return
                        }
                        if (wc_add_to_cart_params.cart_redirect_after_add === 'yes') {
                            window.location = wc_add_to_cart_params.cart_url;
                            return
                        }
                        var $thisbutton = form.find('.single_add_to_cart_button');
                        $(document.body).trigger('added_to_cart', [response.fragments, response.cart_hash, $thisbutton]);
                        $('.woocommerce-error, .woocommerce-message, .woocommerce-info').remove();
                        $(response.fragments.notices_html).appendTo('.cart_notice').delay(3000).fadeOut(300)
                    }
                });
            });
            
        });
    });
});
