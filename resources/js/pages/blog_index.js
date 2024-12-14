(function ($) {
    'use strict';
    $(document).ready(function () {
        $('#table').DataTable();
    });
    $(function () {
        $('body').on('hidden.bs.modal', '.modal', function () {
            $(this).removeData('bs.modal');
        });
    });
    var $url_path = '{!! url(' / ') !!}';
    $('#delete_confirm').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var $recipient = button.data('id');
        var modal = $(this);
        modal
            .find('.modal-footer a')
            .prop('href', $url_path + '/admin/blog/' + $recipient + '/delete');
    });
    $('img').addClass('img-responsive');
})(jQuery);
