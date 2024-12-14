
(function($){ "use strict";
$(document).ready(function() {
    // initialize session timeout settings
    $.sessionTimeout({
        title: 'Session Timeout Notification',
        message: 'Your session is about to expire.',
        keepAliveUrl: 'session_timeout',
        redirUrl: '{{ URL::route('lockscreen', Sentinel::getUser()->id) }}',
        logoutUrl: 'logout',
        warnAfter: 5000, //warn after 5 seconds
        redirAfter: 10000, //redirect after 10 secons
    });
});



$(document).on('click', '.card-header span.clickable', function(e) {
    var $this = $(this);
    if (!$this.hasClass('card-collapsed')) {
        $this.parents('.card').find('.card-body').slideUp();
        $this.addClass('card-collapsed');
        $this.find('i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
    } else {
        $this.parents('.card').find('.card-body').slideDown();
        $this.removeClass('card-collapsed');
        $this.find('i').removeClass('fa-chevron-down').addClass('fa-chevron-up');
    }
});
})(jQuery)
