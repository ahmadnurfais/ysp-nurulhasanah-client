(function ($) {
    ("use strict");
    // Page loading
   

    /*---====================---header drop down button---======================---*/
    if($('.navbar_nav li.dropdown ul').length){
        $('.navbar_nav li.dropdown > a').append('<div class="dropdown-btn"><span class="risehand-chevron-down"></span></div>');
    }
    if($('.navbar_nav li.mega_menu  ul').length){
        $('.navbar_nav li.mega_menu >  a').append('<div class="dropdown-btn"><span class="risehand-chevron-down"></span></div>');
    }
   
 
  /*---====================---mobile navbar append---======================---*/
    if($('.mobile_menu_box').length){
        //Menu Toggle Btn
        $('.navbar_togglers').on('click', function() {
            $('body').toggleClass('mobile_menu_box-visible');
        });
        //Menu Toggle Btn
        $('.mobile_menu_box .menu-backdrop,.mobile_menu_box .close-btn').on('click', function() {
            $('body').removeClass('mobile_menu_box-visible');
        });
    }
    /*---====================---header drop down toggle---======================---*/
     //Mobile Nav Hide Show
	if($('.mobile_menu_box').length){
		var mobileMenuContent = $('.navbar_nav').html();
		$('.mobile_menu_box .navbar_nav').append(mobileMenuContent); 
	} 
    var $offCanvasNav = $(".mobile_menu_box"),
    $offCanvasNavSubMenu = $offCanvasNav.find(".sub-menu");

/*Add Toggle Button With Off Canvas Sub Menu*/
$offCanvasNavSubMenu.parent().prepend('<span class="dropdown-btn"><i class="ni risehand-chevron-down"></i></span>');

/*Close Off Canvas Sub Menu*/
$offCanvasNavSubMenu.slideUp();

/*Category Sub Menu Toggle*/
$offCanvasNav.on("click", "li a, li .dropdown-btn", function (e) {
    var $this = $(this);
    if (
        $this
            .parent()
            .attr("class")
            .match(/\b(menu-item-has-children|has-children|has-sub-menu|sub-menu|mega_menu)\b/) &&
        ($this.attr("href") === "#" || $this.hasClass("dropdown-btn"))
    ) {
        e.preventDefault();
        if ($this.siblings("ul:visible").length) {
            $this.parent("li").removeClass("drop-active");
            $this.siblings("ul").slideUp();
        } else {
            $this.parent("li").addClass("drop-active");
            $this.closest("li").siblings("li").removeClass("drop-active").find("li").removeClass("drop-active");
            $this.closest("li").siblings("li").find("ul:visible").slideUp();
            $this.siblings("ul").slideDown();
        }
    }
});
 

$(document).ready(function() {
    function handleMiniCartClick() {
      console.log("Mini cart icon clicked");
      $('body').addClass('open_cart');
    }
  
    function handleCloseCartClick() {
      console.log("Close cart button clicked");
      $('body').removeClass('open_cart');
    }
  
    // Shop Page - Mini Cart Icon
    $(document).on('click', '.mirisehand-cart-icon', handleMiniCartClick);
    
    // Shop Page and Product Single Page - Close Cart Button
    $(document).on('click', '.cart_box .box-cart-close , .cart_box .overlay_box', handleCloseCartClick);
  });
  
  $(document).ready(function() {
    var duration = 1000; // Set the initial duration (e.g., 3 seconds)
  
    function hideSkeletonLoading() {
      $(".sketch-loading").hide();
    }
  
    function showSkeletonLoading() {
      $(".sketch-loading").show();
    }
  
    function resetTimer() {
      clearTimeout(timer);
      timer = setTimeout(hideSkeletonLoading, duration);
    }
  
    var timer = setTimeout(hideSkeletonLoading, duration);
  
    $(".load_more_jobs , .job_types li label").click(function() {
      showSkeletonLoading();
      resetTimer();
      // Add your additional code here for loading more content
    });
    $(".woo_pagination.loadmoreproduct .woocommerce-pagination a").click(function() {
      showSkeletonLoading();
      resetTimer();
      // Add your additional code here for loading more content
    });
  });
 
  
  $(document).ready(function() {
    function handleMiniCartClick() {
      console.log("Mini cart icon clicked");
      $('body').addClass('open_cart');
    }
  
    function handleCloseCartClick() {
      console.log("Close cart button clicked");
      $('body').removeClass('open_cart');
    }
  
    // Shop Page - Mini Cart Icon
    $(document).on('click', '.mini-cart-icon', handleMiniCartClick);
    
    // Shop Page and Product Single Page - Close Cart Button
    $(document).on('click', '.cart_box .box-cart-close , .cart_box .overlay_box', handleCloseCartClick);
  });
    
  $(document.body).trigger('wc_fragment_refresh');

})(jQuery);




