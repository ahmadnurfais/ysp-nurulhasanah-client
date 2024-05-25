(function ($) {
    function nioland_deals() {
        $("[data-countdown]").each(function () {
            var $this = $(this),
            finalDate = $(this).data("countdown");
            $this.countdown(finalDate, function (event) {
                $(this).html(event.strftime("" + '<span class="countdown-section"><span class="countdown-amount hover-up">%D</span><span class="countdown-period days">  </span></span>' + '<span class="countdown-section"><span class="countdown-amount hover-up">%H</span><span class="countdown-period hours">  </span></span>' + '<span class="countdown-section"><span class="countdown-amount hover-up">%M</span><span class="countdown-period mins">  </span></span>' + '<span class="countdown-section"><span class="countdown-amount hover-up">%S</span><span class="countdown-period sec">  </span></span>'));
            });
        });
    }
    $(window).on('elementor/frontend/init', function() {
        elementorFrontend.hooks.addAction('frontend/element_ready/nioland-deals-v1.default', nioland_deals);
    });
    jQuery(document).on('ready', function () {
        nioland_deals() 
    });
})(jQuery);

