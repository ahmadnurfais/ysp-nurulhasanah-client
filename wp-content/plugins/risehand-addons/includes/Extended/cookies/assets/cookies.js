jQuery(function($) {
    "use strict";

    const cookieNotice = $('#cookie-notice');
    const acceptCookiesButton = $('#accept-cookies');

    acceptCookiesButton.on('click', function() {
        setCookie('cookiesAccepted', 'true');
        cookieNotice.hide(); // Hide the notice
    });

    function setCookie(name, value) {
        const expirationDate = new Date();
        expirationDate.setFullYear(expirationDate.getFullYear() + 1); // Set cookie to expire in a year
        const cookieValue = encodeURIComponent(value) + '; expires=' + expirationDate.toUTCString() + '; path=/';
        document.cookie = name + '=' + cookieValue;
    }

    // Check if user has already accepted cookies
    const cookiesAccepted = document.cookie.includes('cookiesAccepted=true');
    if (!cookiesAccepted) {
        // Show the cookie notice
        cookieNotice.show();
    }
});
