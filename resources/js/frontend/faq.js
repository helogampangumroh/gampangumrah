(function ($) {
    'use strict';
    $('.collapse')
        .on('shown.bs.collapse', function () {
            $(this).parent().find('.fa-plus').removeClass('fa-plus').addClass('fa-minus');
        })
        .on('hidden.bs.collapse', function () {
            $(this).parent().find('.fa-minus').removeClass('fa-minus').addClass('fa-plus');
        });

    $(function () {
        gallery();
    });

    function gallery() {
        function mixitup() {
            $('#faq').mixItUp({
                animation: {
                    duration: 300,
                    effects: 'fade translateZ(-360px) stagger(34ms)',
                    easing: 'ease',
                },
            });
        }

        mixitup();
    }
})(jQuery);
