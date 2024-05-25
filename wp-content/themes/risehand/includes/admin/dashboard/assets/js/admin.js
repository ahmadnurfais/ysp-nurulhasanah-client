/*==================================================
                    vankine Theme Js 
==================================================*/
(function ($) {
    ("use strict");
   
  
    jQuery(document).ready(function($) {
        // Check if the notice has been closed within the last 24 hours
        var noticeClosedTime = localStorage.getItem('admin_notice_closed_times');
        if (noticeClosedTime && (new Date().getTime() - noticeClosedTime) < 24 * 60 * 60 * 1000) {
            $('.admin-notice-risehandss').hide();
        }
    
        // Handle close button click event
        $('.admin-notice .notice-dismiss').on('click', function() {
            // Store the current time in localStorage
            localStorage.setItem('admin_notice_closed_times', new Date().getTime());
        });
    });

    jQuery(document).ready(function($) {
        $('.admin-notice-debug_enabled').each(function() {
            var notice = $(this);
            var colors = [
                '#3f3eed',
                '#161c29',
                '#121623'
            ];
            var currentIndex = 0;
    
            setInterval(function() {
                currentIndex = (currentIndex + 1) % colors.length;
                var nextColor = colors[currentIndex];
                
                notice.css('background-image', 'linear-gradient(to right, ' + nextColor + ', ' + colors[currentIndex] + ')');
            }, 2000);
        });
    });
    
  

})(jQuery); 

