(function ($) {
    "use strict";  
    // Risehand select active js
    function risehand_search() {
        $("select").select2(); 
        $('#rating').select2('destroy');
        $('.variations select').select2('destroy');
    } 
    jQuery(window).on('load', function() {
        (function($) {     
            risehand_search();
        })(jQuery);
    });
})(jQuery);