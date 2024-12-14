(function ($) {
    'use strict';
    // Csrf token for all ajax calls

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        },
    });

    var left_side_width = 220; //Sidebar width in pixels

    //leftmenu init
    var menu = document.getElementById('menu');
    if (menu) {
        new MetisMenu('#menu');
    }

    $(function () {
        setTimeout(function () {
            $('#notific').remove();
        }, 5000);

        $(function () {
            //hide menu in small screens
            if ($(window).width() <= 992) {
                $('.wrapper').addClass('hide_menu');
                $('body').removeClass('mini_sidebar');
                $('body').addClass('left-hidden');
            }
            //Enable sidebar toggle
            $("[data-bs-toggle='offcanvas'].sidebar-toggle").on('click', function (e) {
                e.preventDefault();
                $('body').toggleClass('left-hidden');
                //Toggle Menu
                if (!$('body').hasClass('mini_sidebar')) {
                    $('.wrapper').toggleClass('hide_menu');
                }
            });
            // INIT popovers
            const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
            const popoverList = [...popoverTriggerList].map(
                (popoverTriggerEl) => new bootstrap.Popover(popoverTriggerEl)
            );
        });

        //Add hover support for touch devices
        $('.btn')
            .on('touchstart', function () {
                $(this).addClass('hover');
            })
            .on('touchend', function () {
                $(this).removeClass('hover');
            });

        //Activate tooltips
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
        const tooltipList = [...tooltipTriggerList].map(
            (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
        );

        /*
         * Add collapse and remove events to boxes
         */
        $("[data-widget='collapse']").on('click', function () {
            //Find the box parent
            var box = $(this).parents('.box').first();
            //Find the body and the footer
            var bf = box.find('.box-body, .box-footer');
            if (!box.hasClass('collapsed-box')) {
                box.addClass('collapsed-box');
                bf.slideUp();
            } else {
                box.removeClass('collapsed-box');
                bf.slideDown();
            }
        });

        /*
         * ADD SLIMSCROLL TO THE TOP NAV DROPDOWNS
         * ---------------------------------------
         */
        $('.navbar .menu')
            .slimscroll({
                height: '200px',
                alwaysVisible: true,
                size: '3px',
            })
            .css('width', '100%');

        /*
         * INITIALIZE BUTTON TOGGLE
         * ------------------------
         */

        $('.btn-group[data-bs-toggle="btn-toggle"]').each(function () {
            var group = $(this);
            $(this)
                .find('.btn')
                .on('click', function (e) {
                    group.find('.btn.active').removeClass('active');
                    e.preventDefault();
                });
        });

        $("[data-widget='remove']").on('click', function () {
            //Find the box parent
            var box = $(this).parents('.box').first();
            box.slideUp();
        });
    });
    function fix_sidebar() {
        //Make sure the body tag has the .fixed class
        if (!$('body').hasClass('fixed')) {
            return;
        }

        //Add slimscroll
        $('.sidebar').slimscroll({
            height: $(window).height() - $('.header').height() + 'px',
            color: 'rgba(0,0,0,0.2)',
        });
    }
    /*END DEMO*/

    /* CENTER ELEMENTS */
    (function ($) {
        'use strict';
        jQuery.fn.center = function (parent) {
            if (parent) {
                parent = this.parent();
            } else {
                parent = window;
            }
            this.css({
                position: 'absolute',
                top: ($(parent).height() - this.outerHeight()) / 2 + $(parent).scrollTop() + 'px',
                left: ($(parent).width() - this.outerWidth()) / 2 + $(parent).scrollLeft() + 'px',
            });
            return this;
        };
    })(jQuery);

    //Back to top code
    $(document).ready(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').on('click', function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate(
                {
                    scrollTop: 0,
                },
                800
            );
            return false;
        });

        // $('#back-to-top').tooltip('show');
    });
    //color switcher code
    $(function () {
        //BEGIN THEME SETTING
        $('#theme-setting > a.btn-theme-setting').on('click', function () {
            if ($('#theme-setting').css('right') < '0') {
                $('#theme-setting').css('right', '0');
            } else {
                $('#theme-setting').css('right', '-250px');
            }
        });
        $('#white').on('click', function () {
            //		alert('white clicked');
            $('#colorscheme').attr('href', 'css/styles/white.css');
        });
        $('#blacks').on('click', function () {
            //		alert('black clicked');
            $('#colorscheme').attr('href', 'css/styles/black.css');
        });
        // Begin Change Theme Color
    });

    //Code for collpasing panels

    $(document).on('click', '.removepanel', function () {
        var $this = $(this);
        $this.parents('.card').hide('slow');
    });
    //panel hide
    $('.showhide').attr('title', 'Hide Panel content');
    $(document).on('click', '.clickable', function (e) {
        var $this = $(this);
        if (!$this.hasClass('card-collapsed')) {
            $this.parents('.card').find('.card-body').slideUp();
            $this.addClass('card-collapsed');
            $this.closest('i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
            $('.showhide').attr('title', 'Show Panel content');
        } else {
            $this.parents('.card').find('.card-body').slideDown();
            $this.removeClass('card-collapsed');
            $this.closest('i').removeClass('fa-chevron-down').addClass('fa-chevron-up');
            $('.showhide').attr('title', 'Hide Panel content');
        }
    });

    $('.sub-menu .active').parent().parent('li').first('a').css('background', '#414151');
})(jQuery);
