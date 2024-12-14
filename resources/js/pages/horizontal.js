(function ($) {
    'use strict';
    $('#navigation').slimmenu({
        resizeWidth: '574',
        collapserTitle: 'Main Menu',
        animSpeed: 'medium',
        easingEffect: null,
        indentChildren: false,
        expandIcon: '<i class="fa fa-angle-down"></i>',
        collapseIcon: '<i class="fa fa-angle-up"></i>',
    });

    $('.sub-toggle').on('click', function () {
        $('.sub-toggle')
            .not(this)
            .not($(this).parent('li').closest('ul').next())
            .removeClass('expanded');

        $('.sub-toggle')
            .not($(this).find('i'))
            .not($(this).parent('li').closest('ul').next().find('i'))
            .find('i')
            .removeClass('fa-angle-up')
            .addClass('fa-angle-down');
        $('.sub-toggle')
            .not(this)
            .not($(this).parent('li').closest('ul').next())
            .prev()
            .slideUp(500);
    });
    $('.has-submenu .sub-toggle').on('click', function () {
        $(this)
            .parent('li')
            .closest('ul')
            .next()
            .find('i')
            .removeClass('fa-angle-down')
            .addClass('fa-angle-up');
    });
})(jQuery);
