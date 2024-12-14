(function ($) {
    'use strict';
    $('#stack2,#stack3').on('hidden.bs.modal', function (e) {
        $('body').addClass('modal-open');
    });
})(jQuery);
