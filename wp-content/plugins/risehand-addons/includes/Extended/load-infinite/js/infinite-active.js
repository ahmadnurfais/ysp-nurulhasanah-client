jQuery(function($) {
    "use strict";
    if ($('.woocommerce-shop').length) {
    $('ul.products').infiniteScroll({
        // options
        path: '.scrollproduct .page-numbers .next',
        append: '.product_wrapper',
        history: false,
        status: '.scroller-status',
        hideNav: '.page-numbers', 
    });
}
});