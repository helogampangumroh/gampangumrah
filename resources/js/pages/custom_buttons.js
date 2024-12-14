/**
 * Created by user on 29/7/16.
 */

(function ($) {
    'use strict';
    // add this function to initialize
    var useOnComplete = false,
        useEasing = false,
        useGrouping = false,
        options = {
            useEasing: useEasing, // toggle easing
            useGrouping: useGrouping, // 1,000,000 vs 1000000
            separator: ',', // character to use as a separator
            decimal: '.', // character to use as a decimal
        };

    var demo = new countUp.CountUp('count1', 9500, 12.52, 0, 6, options);
    demo.start();
    var demo = new countUp.CountUp('count2', 9000, 1, 0, 6, options);
    demo.start();
    var demo = new countUp.CountUp('count3', 50000, 24.02, 0, 6, options);
    demo.start();
    var demo = new countUp.CountUp('count4', 8000, 1254, 0, 6, options);
    demo.start();
    var demo = new countUp.CountUp('count5', 5000, 1254, 0, 6, options);
    demo.start();
    var demo = new countUp.CountUp('count6', 6000, 1254, 0, 6, options);
    demo.start();

    var my_posts = $('[rel=tooltip]');

    var size = $(window).width();
    for (let i = 0; i < my_posts.length; i++) {
        the_post = $(my_posts[i]);

        if (the_post.hasClass('invert') && size >= 767) {
            the_post.tooltip({
                placement: 'left',
            });
            the_post.css('cursor', 'pointer');
        } else {
            the_post.tooltip({
                placement: 'right',
            });
            the_post.css('cursor', 'pointer');
        }
    }
})(jQuery);
