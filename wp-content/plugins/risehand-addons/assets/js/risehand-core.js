(function ($) {
    "use strict";
    /*---====================---preloader---======================---*/
    if($('.loader-wrap').length){
        $('.loader-wrap').delay(1000).fadeOut(500);
        $(".preloader-close").on("click", function(){
            $('.loader-wrap').delay(200).fadeOut(500);
        })  
    } 
    /*---====================---Risehand Swiper Active---======================---*/ 
    function risehand_theme_swiper_carousel() { 
        var swiperElements = document.querySelectorAll('.swiper_container');
        swiperElements.forEach(function(swiperElement) {
            var swiperOptions = JSON.parse(swiperElement.getAttribute('data-swiper'));
            new Swiper(swiperElement, swiperOptions);
        });
    } 
        /*---====================---Risehand Swiper Active---======================--*/
    /*---====================---preloader---======================---*/
    /*---====================---back-to-top---======================---*/
    if($('.prgoress_indicator path').length){
        var progressPath = document.querySelector('.prgoress_indicator path');
        var pathLength = progressPath.getTotalLength();
        progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
        progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
        progressPath.style.strokeDashoffset = pathLength;
        progressPath.getBoundingClientRect();
        progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
        var updateProgress = function () {
          var scroll = $(window).scrollTop();
          var height = $(document).height() - $(window).height();
          var progress = pathLength - (scroll * pathLength / height);
          progressPath.style.strokeDashoffset = progress;
        }
        updateProgress();
        $(window).on('scroll', updateProgress);
        var offset = 250;
        var duration = 550;
        jQuery(window).on('scroll', function () {
          if (jQuery(this).scrollTop() > offset) {
            jQuery('.prgoress_indicator').addClass('active-progress');
          } else {
            jQuery('.prgoress_indicator').removeClass('active-progress');
          }
        });
        jQuery('.prgoress_indicator').on('click', function (event) {
          event.preventDefault();
          jQuery('html, body').animate({ scrollTop: 0 }, duration);
          return false;
        });
    }
    /*---====================---preloader---======================---*/
    /*---====================---Sticky Menu---======================---*/
     

    var header = $('.sticky_header_area');
    var win = $(window);
    
    win.on('scroll', function () {
        var scroll = win.scrollTop();
        if (scroll < 200) {
            header.removeClass('fixed-header');
        } else {
            header.addClass('fixed-header');
        }
    });
    
    // Add smooth transition effect for sticky header
    $('.sticky_header_area').css({
        'transition': 'all 0.43s ease-in-out', // Adjust the duration and timing function as needed
    });
    
    /*---====================---Sticky Menu---======================---*/
    /*---====================---Search Popup---======================---*/
   function risehand_search() {
        if ($('.search-toggler').length) {
            $('.search-toggler').on('click', function(e) {
                $('body').addClass('popup-visible');
                e.preventDefault();
            });
        }
        if ($('.search_coursor , .sea_close_btn').length) {
            $('.search_coursor , .sea_close_btn').on('click', function(e) {
                $('body').removeClass('popup-visible');
                e.preventDefault();
            });
        }
    }
    /*---====================---Search Popup---======================---*/
    /*---====================---Option-panel---======================---*/ 
    function risehand_option_panel() {
        if ($('.side-menu__toggler').length) {
            $('.side-menu__toggler').on('click', function(e) {
                $('body').addClass('optactive');
                e.preventDefault();
            });
        }
        if ($('.opt_cursor , .opt_close_btn').length) {
            $('.opt_cursor , .opt_close_btn').on('click', function(e) {
                $('body').removeClass('optactive');
                e.preventDefault();
            });
        } 
    } 
    /*---====================---Option-panel---======================---*/ 
    /*---====================---Mobile Menu---======================---*/  
    function risehand_sidemenu() {
        if($(".sidemenu_area").length) {
            //adding a new class on button element
            $('#side_menu_toggle_btn').on('click',function () {
                $('body').addClass('side_menu_toggled');   
            });
            //removing a existing class from button element
            $('#side_menu_toggle_btn_close').on('click',function () {
                $('body').removeClass('side_menu_toggled');
            });
        }
    }
    /*---====================---Post ajax---======================---*/  
    function risehand_post_ajax(){
        $('.ajax_posts_enabled').on('click', '.pagination-area .next', function(e) {
            e.preventDefault();
            if ($(this).data('requestRunning')) {
                return;
            }
            $(this).data('requestRunning', true);
            var $ser_post_list = $('.ajaxcontainer'),
                $paginationser = $(this).parents('.pagination-area'),
                $parent = $(this).parent();
                $parent.addClass('loader'); 
                $.get(
                $(this).attr('href'),
                function (response) {
                    var $contentser = $(response).find('.ajaxcontainer').children('.ajax-wrapper'),
                    ser_pagination = $(response).find('.pagination-area').html();
                    $paginationser.html(ser_pagination);
                    $ser_post_list.append($contentser);
                    $contentser.imagesLoaded(function () {
                        $contentser;
                        $paginationser.find('.next').data('requestRunning', false);
                        $parent.removeClass('loader');
                    });
                }
            );
        });
    }
    /*---====================---Post Ajax---======================---*/ 
    /*---====================---Blog Masonry---======================---*/ 
    function risehand_blog_grid_filter_layout() { 
        if ($('.blog_container').length) {
            $('.blog_container').isotope({
                layoutMode: 'masonry',
                itemSelector: '.blog-wrapper',
                transitionDuration: '1s',
            });
        }
    }
    /*---====================---Blog Masonry---======================---*/ 
    /*---====================---faqs---======================---*/ 
    function risehand_faqsall() { 
        if ($('.accordion-box').length) {
            $(".accordion-box").off('click').on('click', '.question', function () {
                console.log('Accordion question clicked');
                var outerBox = $(this).parents('.accordion-box');
                var target = $(this).parents('.accordion');
                
                // Toggle the active class on the clicked question
                $(this).toggleClass('active');
                
                // Close other open accordions
                $(outerBox).find('.accordion .question , .accordion .icon_fq').not(this).removeClass('active');
                $(outerBox).find('.accordion').not(target).removeClass('active-block');
                $(outerBox).find('.accordion').not(target).children('.accordion-content').slideUp(300);
                
                // Toggle the accordion content
                if ($(this).next('.accordion-content').is(':visible')) {
                    $(this).next('.accordion-content').slideUp(300);
                } else {
                    $(outerBox).find('.accordion-content').slideUp(300);
                    target.addClass('active-block');
                    $(this).next('.accordion-content').slideDown(300);
                }
            });
        }  
    }
    /*---====================---faqs---======================---*/ 
    /*---====================---Counter---======================---*/  
    function risehand_funfact() {
        $(window).on('scroll', function() {
            $('.count-text').each(function() {
              if (isElementInViewport($(this)) && $(this).data('counted') !== 'true') {
                $(this)
                  .data('counted', 'true')
                  .prop("Counter", 0)
                  .animate({
                    Counter: $(this).text()
                  }, {
                    duration: 2000,
                    easing: "swing",
                    step: function(now) {
                      now = Number(Math.ceil(now)).toLocaleString('en');
                      $(this).text(now);
                    },
                  });
              }
            });
          });
           
    } 
    /*---====================---Counter---======================---*/ 
    /*---====================---Light Box---======================---*/ 
    function risehand_light_box() {
        if ($('.lightbox-image').length) {
            $('.lightbox-image').fancybox({
                openEffect: 'fade',
                closeEffect: 'fade',
                helpers: {
                    media: {}
                }
            });
        }
    }
    /*---====================---Light Box---======================---*/ 
    /*---====================---Portfolio Mouse Click---======================---*/ 
    function risehand_portfolio_mouse() {  
        $(document).ready(function() {
            $('.portfolio-grid-item:nth-child(2)').addClass('active');
            $('.portfolio-grid-item').mouseenter(function() {
              // Remove 'active' class from all items
              $('.portfolio-grid-item').removeClass('active');
      
              // Add 'active' class to the current item
              $(this).addClass('active');
            });
        });
    }
    /*---====================---Portfolio Mouse Click---======================---*/ 
    /*---====================---Portfolio Masonry---======================---*/ 
    function risehand_grid_filter_layout_man() { 
        if ($('.project_container').length) {
            $('.project_container').isotope({
                layoutMode: 'masonry',
                itemSelector: '.project-wrapper',
                transitionDuration: '1s',
            });
        }
    }
    /*---====================---Portfolio Masonry---======================---*/ 
    /*---====================---Portfolio Filter---======================---*/ 
    function risehand_grid_filter_layout() { 
        if ($('.project_container').length) {
            $('.project_container').isotope({
                layoutMode: 'masonry',
                itemSelector: '.project-wrapper',
                transitionDuration: '1s',
            });
        }
        if ($('.project_filter').length) {
            // filter items on button click
            $('.project_filter').on('click', 'li', function() {
                var filterValue = $(this).attr('data-filter');
                $('.project_container').isotope({ filter: filterValue });
                $('.project_filter li').removeClass('current');
                $(this).addClass('current');
            });
        }
    }
    /*---====================---Portfolio Filter---======================---*/ 
    /*---====================---Risehand Slider---======================---*/ 
    function risehand_scroll_items() {
        let selector = '.scroll_carousel_box'; // Replace with your fixed selector
        let elems = document.querySelectorAll(selector);
        if (elems.length > 0) {
          elems.forEach(item => {
            let $this = item; 
            let _speed = $this.dataset.speed ? JSON.parse($this.dataset.speed) : null;
            let _smartSpeed = $this.dataset.smartSpeed ? JSON.parse($this.dataset.smartSpeed) : false;
            let _autoplay = $this.dataset.autoplay ? JSON.parse($this.dataset.autoplay) : true;
            let _margin = $this.dataset.margin ? JSON.parse($this.dataset.margin) : null;
            let _dir = $this.dataset.dir ? $this.dataset.dir : 'ltr';
      
            // Assuming the ScrollCarousel class is defined and included properly
            const scrollText = new ScrollCarousel($this, {
              speed: _speed,
              margin: _margin,
              direction: _dir,
              autoplay: _autoplay,
              smartSpeed: _smartSpeed,
            });
          });
        }  
    } 
   
    /*---====================---Risehand Slider---======================---*/ 
    /*---====================---Risehand Tab---======================---*/ 
    function risehand_tab() {
        if($('.risehand_tab').length){
            $('.risehand_tab').each(function () {
                var $tabContainer = $(this);
                $tabContainer.find('.showcase_tabs_btns .s_tab_btn').on('click', function (e) {
                    e.preventDefault();
                    var target = $($(this).attr('data-tab'));
                    if ($(target).hasClass('active-tab show')) {
                        return !1
                    } else {
                        $tabContainer.find('.showcase_tabs_btns .s_tab_btn').removeClass('active');
                        $(this).addClass('active');
                        $tabContainer.find('.s_tabs_content .s_tab').removeClass('active-tab show');
                        $(target).addClass('active-tab show')
                    }
                })
            })
        }
    } 
    /*---====================---Risehand Tab---======================---*/ 
    /*---====================---Risehand Progress---======================---*/ 
    function risehand_progress_bar(){
    $.fn.risehandProgressbar = function(options){
        options = $.extend({
          animate     : true,
          animateText : true
        }, options);
        var $this = $(this);
        var $progressBar = $this;
        var $progressCount = $progressBar.find('.ProgressBar-percentage--count');
        var $circle = $progressBar.find('.ProgressBar-circle');
        var percentageProgress = $progressBar.attr('data-progress');
        var percentageRemaining = (100 - percentageProgress);
        var percentageText = $progressCount.parent().attr('data-progress');
        //Calcule la circonférence du cercle
        var radius = $circle.attr('r');
        var diameter = radius * 2;
        var circumference = Math.round(Math.PI * diameter);
        //Calcule le pourcentage d'avancement
        var percentage =  circumference * percentageRemaining / 100;
        $circle.css({
          'stroke-dasharray' : circumference,
          'stroke-dashoffset' : percentage
        });
        //Animation de la barre de progression
        if(options.animate === true){
          $circle.css({
            'stroke-dashoffset' : circumference
          }).animate({
            'stroke-dashoffset' : percentage
          }, 3000)
        }
        //Animation du texte (pourcentage)
        if(options.animateText == true){
          $({ Counter: 0 }).animate(
          { Counter: percentageText },
            { duration: 3000,
              step: function () {
                $progressCount.text( Math.ceil(this.Counter) + '%');
              }
            });
          }else{
            $progressCount.text( percentageText + '%');
      }
    };
    $(document).ready(function(){
    $('.ProgressBar--animateNone').risehandProgressbar({
      animate : false,
      animateText : false
    });
    $('.ProgressBar--animateCircle').risehandProgressbar({
      animate : true,
      animateText : false
    });
    $('.ProgressBar--animateText').risehandProgressbar({
      animate : false,
      animateText : true
    });
    $('.ProgressBar--animateAll').risehandProgressbar();
    }); 
    }
    /*---====================---Risehand Progress---======================---*/  
    function risehand_progress_bar_anime() {
        $(window).on('scroll', function() {
            $('.donation_progress').each(function() {
                if (isElementInViewport($(this)) && !$(this).data('animated')) {
                    var speed = 2000;
                    var progress = $(this).data('progress');
                    var progressBar = $(this).find('.progress-bar');
                    var percentDisplay = $(this).find('.perin');
                    var i = 0;
    
                    var count = setInterval(function() {
                        if (i <= progress) {
                            progressBar.css('width', i + '%');
                            percentDisplay.css('width', i + '%');
                            percentDisplay.find('.percent').html(i + '%');
    
                            // Add a class to .perin when progress exceeds 9%
                            if (i > 9 && !percentDisplay.hasClass('progress-greater-than-3')) {
                                percentDisplay.addClass('progress-greater-than-3');
                            }
    
                            // Remove class when progress exceeds 97%
                            if (i > 97 && percentDisplay.hasClass('progress-greater-than-3')) {
                                percentDisplay.removeClass('progress-greater-than-3');
                            }
                        } else {
                            clearInterval(count);
                        }
                        i++;
                    }, speed / progress); // Adjust speed based on progress
    
                    // Set data attribute to indicate animation has been executed
                    $(this).data('animated', true);
                }
            });
        }).scroll(); // Trigger scroll event initially
    }
    
    // Function to check if an element is in the viewport
    function isElementInViewport(el) {
        var rect = el[0].getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    
    
    /* ==========================================================================
    Elementor front end start
    ========================================================================== */
    $(window).on('elementor/frontend/init', function() { 
        // Content v1
        elementorFrontend.hooks.addAction('frontend/element_ready/risehand-slider-1.default', risehand_theme_swiper_carousel);
        elementorFrontend.hooks.addAction('frontend/element_ready/risehand-slider-2.default', risehand_theme_swiper_carousel);
        elementorFrontend.hooks.addAction('frontend/element_ready/risehand-slider-3.default', risehand_theme_swiper_carousel);
        elementorFrontend.hooks.addAction('frontend/element_ready/risehand-slider-4.default', risehand_theme_swiper_carousel); 
        elementorFrontend.hooks.addAction('frontend/element_ready/risehand-slider-builder.default', risehand_theme_swiper_carousel);  
        elementorFrontend.hooks.addAction('frontend/element_ready/risehand-header-v1.default', risehand_search); 
        elementorFrontend.hooks.addAction('frontend/element_ready/risehand-header-v1.default', risehand_option_panel); 
        elementorFrontend.hooks.addAction('frontend/element_ready/risehand-donation-post-carousel-v1.default', risehand_scroll_items);  
        elementorFrontend.hooks.addAction('frontend/element_ready/risehand-donation-post-carousel-v1.default', risehand_theme_swiper_carousel);  
        elementorFrontend.hooks.addAction('frontend/element_ready/risehand-portfolio-post-v1.default', risehand_portfolio_mouse);
        elementorFrontend.hooks.addAction('frontend/element_ready/risehand-portfolio-carousel-v1.default', risehand_scroll_items);
        elementorFrontend.hooks.addAction('frontend/element_ready/risehand-portfolio-carousel-v1.default', risehand_theme_swiper_carousel);
        elementorFrontend.hooks.addAction('frontend/element_ready/risehand-faqs-v1.default', risehand_faqsall);
        elementorFrontend.hooks.addAction('frontend/element_ready/risehand-client-carousel-v1.default', risehand_theme_swiper_carousel);  
        elementorFrontend.hooks.addAction('frontend/element_ready/risehand-progress-v1.default', risehand_progress_bar);  
        elementorFrontend.hooks.addAction('frontend/element_ready/risehand-tab-with-content-v1.default', risehand_tab);
        elementorFrontend.hooks.addAction('frontend/element_ready/risehand-testimonial-carousel-v1.default', risehand_theme_swiper_carousel); 
        elementorFrontend.hooks.addAction('frontend/element_ready/risehand-fun-facts-box.default', risehand_funfact);  
       
    });
    jQuery(window).on('load', function() {
        (function($) {  
            risehand_theme_swiper_carousel();
            risehand_tab(); 
            risehand_grid_filter_layout();
            risehand_grid_filter_layout_man();
            risehand_portfolio_mouse();
            risehand_light_box();
            risehand_funfact();
            risehand_faqsall();
            risehand_blog_grid_filter_layout();
            risehand_sidemenu();
            risehand_search(); 
            risehand_option_panel(); 
            risehand_post_ajax(); 
            risehand_scroll_items();
            risehand_progress_bar(); 
            risehand_progress_bar_anime();
        
        })(jQuery);
    });
})(jQuery);