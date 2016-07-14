

$(function () {

    var trigger = $('.hamburger');
        overlay = $('.overlay'),
        isClosed = false;

    /** Menue Show / Hide */
    trigger.click(function () {
        hamburger_cross();
    });

    /**
     * Func Menue show / hide 
     */
    function hamburger_cross() {

        if (isClosed == true) {
            overlay.hide();
            trigger.removeClass('is-open');
            trigger.addClass('is-closed');
            isClosed = false;
        } else {
            overlay.show();
            trigger.removeClass('is-closed');
            trigger.addClass('is-open');
            isClosed = true;
        }
    }

    /** Animation vom Menue Button  */
    $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
    });
});




