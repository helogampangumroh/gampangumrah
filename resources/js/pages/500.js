(function ($) {
    'use strict';
    $('document').ready(function () {
        setTimeout(function () {
            $('.livicon').trigger('click');
        }, 10);
    });
    // code for aligning center
    $(document).ready(function () {
        var x = $(window).height();
        var y = $('.middle').height();

        x = x - y;
        x = x / 2;
        $('.middle').css('padding-top', x);
    });
})(jQuery);
