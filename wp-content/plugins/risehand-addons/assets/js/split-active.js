(function ($) {
    "use strict";
  
        function risehand_SplitText() {
            setTimeout(function () {
                var elementsToAnimate = $(".risehandsplit-active");
                if (elementsToAnimate.length === 0) return;
                gsap.registerPlugin(SplitText);
                elementsToAnimate.each(function (index, element) {
                    var splitText = new SplitText(element, {
                        type: "chars, words", // "chars, words, lines"
                    }); 
                    gsap.set(element, { perspective: 400 }); 
                    if ($(element).hasClass("fade-in")) {
                        gsap.set(splitText.chars, { opacity: 0, ease: "Back.easeOut" });
                    }
                    if ($(element).hasClass("slide-in-right")) {
                        gsap.set(splitText.chars, { opacity: 0, x: "30", ease: "Back.easeOut" });
                    }
                    if ($(element).hasClass("slide-in-left")) {
                        gsap.set(splitText.chars, { opacity: 0, x: "-30", ease: "Back.easeOut" });
                    }
                    if ($(element).hasClass("slide-in-up")) {
                        gsap.set(splitText.chars, { opacity: 0, y: "30", ease: "circ.out" });
                    }
                    if ($(element).hasClass("slide-in-down")) {
                        gsap.set(splitText.chars, { opacity: 0, y: "-30", ease: "circ.out" });
                    } 
                    element.anim = gsap.to(splitText.chars, {
                        scrollTrigger: { trigger: element, toggleActions: "restart pause resume reverse", start: "top 90%" },
                        x: "0",
                        y: "0",
                        rotateX: "0",
                        scale: 1,
                        opacity: 1,
                        duration: 0.8,
                        stagger: 0.02
                    });
                });
            }, 250);
        }  
        function risehand_image_onscroll() { 
            gsap.registerPlugin(ScrollTrigger);
        
            let revealContainers = document.querySelectorAll(".imagereveal");
            
            revealContainers.forEach((container) => {
                let image = container.querySelector("img");
                let tl = gsap.timeline({
                    scrollTrigger: {
                        trigger: container,
                        start: "top center",
                        toggleActions: "play none none reverse"
                    }
                });
              
                tl.fromTo(image, {
                    scale: 2.9,
                    transformOrigin: "top"
                }, {
                    scale: 1,
                    ease: "power1.out", // Adjust the easing function for smoother animation
                    duration: 0.6 // Decrease the duration for smoother animation
                });
            });
        }
         
        
  /* ==========================================================================
    Elementor front end start
    ========================================================================== */
    $(window).on('elementor/frontend/init', function() { 
        // Content v1
        elementorFrontend.hooks.addAction('frontend/element_ready/risehand-slider-1.default', risehand_SplitText);
        elementorFrontend.hooks.addAction('frontend/element_ready/risehand-image-box-v1.default', risehand_image_onscroll); 
        elementorFrontend.hooks.addAction('frontend/element_ready/risehand-image-box-v2.default', risehand_image_onscroll); 
       
    });
    jQuery(window).on('load', function() {
        (function($) {  
            risehand_SplitText();
            risehand_image_onscroll();
        })(jQuery);
    });

    
})(jQuery);