(function ($) {
    'use strict';
    //sparkline
    $('#sparkline_bar').sparkline(
        [9, 11, 12, 13, 12, 13, 10, 14, 13, 11, 11, 12, 11, 11, 10, 12, 11],
        {
            type: 'bar',
            width: '100',
            barWidth: 5,
            height: '55',
            barColor: '#fff',
            negBarColor: '#fff',
        }
    );

    $('#sparkline_line').sparkline(
        [9, 10, 9, 10, 10, 11, 12, 10, 10, 11, 11, 12, 11, 10, 12, 11, 10, 12],
        {
            type: 'line',
            width: '100',
            height: '55',
            fillColor: '#fff',
            lineColor: '#fff',
        }
    );

    /* Calendar */
    new FullCalendar.ThirdPartyDraggable({
        mirrorSelector: '.ui-draggable-dragging',
    });

    /* initialize the external events
        -----------------------------------------------------------------*/
    function ini_events(ele) {
        ele.each(function () {
            // store data so the calendar knows to render an event upon drop
            $(this).attr(
                'data-event',
                JSON.stringify({
                    title: $.trim($(this).text()), // use the element's text as the event title
                    stick: true, // maintain when user navigates (see docs on the renderEvent method)
                })
            );
            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 1070,
                revert: true, // will cause the event to go back to its
                revertDuration: 0, //  original position after the drag
            });
        });
    }
    ini_events($('#external-events div.external-event'));
    /* initialize the calendar
         -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date();
    var d = date.getDate(),
        m = date.getMonth(),
        y = date.getFullYear();

    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        themeSystem: 'bootstrap5',
        displayEventTime: false,
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay',
        },
        buttonText: {
            prev: '',
            next: '',
            today: 'Today',
            month: 'Month',
            week: 'Week',
            day: 'Day',
        },
        //Random events
        events: [
            {
                title: 'Team Out',
                start: new Date(y, m, 1),
                backgroundColor: '#418BCA',
            },
            {
                title: 'Holiday',
                start: new Date(y, m, 10),
                end: new Date(y, m, 12),
                color: '#01BC8C',
            },
            {
                title: 'Seminar',
                start: new Date(y, m, 13),
                end: new Date(y, m, 14),
                color: '#67C5DF',
            },
            {
                title: 'Product Seminar',
                start: new Date(y, m, 12),
                end: new Date(y, m, 14),
                color: '#f89a14',
            },
            {
                title: 'Anniversary Celebrations',
                start: new Date(y, m, 22),
                end: new Date(y, m, 24),
                color: '#EF6F6C',
            },
            {
                title: 'Event Day',
                start: new Date(y, m, 28),
                end: new Date(y, m, 31),
                backgroundColor: '#418BCA',
            },
            {
                title: 'Product Seminar',
                start: new Date(y, m, 18),
                end: new Date(y, m, 21),
                color: '#A9B6BC',
            },
            {
                title: 'Meeting',
                start: new Date(y, m, d),
                backgroundColor: '#418BCA',
            },
        ],
        eventClick: function (info) {
            var evt_obj = info.event;
            var currColor = evt_obj.backgroundColor;
            var selectedColor = currColor;
            document.getElementById('event_title').value = evt_obj.title;
            // sets the button color to the current event background color
            colorChooser
                .css({
                    'background-color': evt_obj.backgroundColor,
                    'border-color': evt_obj.backgroundColor,
                })
                .html('Type <span class="caret"></span>');
            // modal
            $('#evt_modal')
                .modal('show')
                .on('shown.bs.modal', function () {
                    $('#event_title').focus();
                })
                .on('hidden.bs.modal', function () {
                    evt_obj = '';
                });

            document.querySelectorAll('#color-chooser li a').forEach(function (colorOption) {
                colorOption.addEventListener('click', function (e) {
                    // getting the selected color
                    selectedColor =
                        document.getElementById('color-chooser-btn_edit').style.backgroundColor;
                });
            });
            document.querySelector('.text_save').onclick = function () {
                // set the color and the text for the event
                evt_obj.setProp('backgroundColor', selectedColor);
                evt_obj.setProp('title', document.getElementById('event_title').value);
            };
        },
        editable: true,
        // dayMaxEventRows: true,
        droppable: true,
        drop: function (info) {
            // retrieve the dropped Event Object
            var droppedEl = info.draggedEl;
            var originalEventObject = JSON.parse(droppedEl.dataset.event);
            // we need to copy it, so that multiple events don't have a reference to the same object
            var copiedEventObject = Object.assign({}, originalEventObject);
            // assign it the date that was reported
            copiedEventObject.start = info.date;
            copiedEventObject.allDay = info.allDay;
            copiedEventObject.backgroundColor = getComputedStyle(droppedEl).backgroundColor;
            copiedEventObject.borderColor = getComputedStyle(droppedEl).borderColor;

            calendar.addEvent(copiedEventObject);
            // is the "remove after drop" checkbox checked?
            if ($('#drop-remove').is(':checked')) {
                droppedEl.remove();
            }

            // setpopover();
        },
        eventReceive: function (info) {
            // Prevent default event addition
            info.revert();
        },

        eventDrop: function () {
            // setTimeout(setpopover,100);
        },
        eventResize: function () {
            // setTimeout(setpopover,100);
        },
    });

    calendar.render();
    /* ADDING EVENTS */
    var defaultColor = '#A9B6BC';
    var lettercolor = '#fff'; //default
    $('#color-chooser-btn').css({
        'background-color': defaultColor,
        color: lettercolor,
    });
    //Color chooser button
    var colorChooser = $('.color-chooser');
    $('.reset').on('click', function () {
        $('#new-event').val('');
    });
    $('#color-chooser > li > a').on('click', function (e) {
        e.preventDefault();
        var colorChooser = $(this).closest('.input-group-btn').find('.color-chooser');

        //Save color
        var currColor = $(this).css('background-color');
        //Add color effect to button
        colorChooser
            .css({
                'background-color': currColor,
                'border-color': currColor,
            })
            .html($(this).text() + ' <span class="caret"></span>');
    });
    $('#add-new-event').on('click', function (e) {
        e.preventDefault();
        //Get value and make sure it is not null
        var val = $('#new-event').val();
        var currColor = $('#color-chooser-btn').css('background-color');
        var r = val.trim(' ');
        if (r.length == 0) {
            return;
        }
        //Create event
        var event = $('<div />');
        event
            .css({
                'background-color': currColor,
                'border-color': currColor,
                color: '#fff',
            })
            .addClass('external-event');
        event
            .html(val)
            .append(
                '<i class="fa fa-times event-clear" aria-hidden="true" style="margin-left: 3px;"></i>'
            );
        $('#external-events').prepend(event);
        $('.event_count').text(eval($('.event_count').text()) + 1);
        //Add draggable funtionality
        ini_events(event);
    });
    //Remove event from text input
    $('.createevent_btn').on('click', function () {
        $('#new-event').val(' ');
    });
    $(document).on('click', '.event-clear', function () {
        $(this).closest('div').remove();
    });

    /* realtime chart */
    var data = [],
        totalPoints = 300;
    function getRandomData() {
        if (data.length > 0) data = data.slice(1);

        // do a random walk
        while (data.length < totalPoints) {
            var prev = data.length > 0 ? data[data.length - 1] : 50;
            var y = prev + Math.random() * 10 - 5;
            if (y < 0) y = 0;
            if (y > 100) y = 100;
            data.push(y);
        }

        // zip the generated y values with the x values
        var res = [];
        for (var i = 0; i < data.length; ++i) res.push([i, data[i]]);
        return res;
    }

    // setup control widget
    var updateInterval = 30;
    $('#updateInterval')
        .val(updateInterval)
        .on('change', function () {
            var v = $(this).val();
            if (v && !isNaN(+v)) {
                updateInterval = +v;
                if (updateInterval < 1) updateInterval = 1;
                if (updateInterval > 2000) updateInterval = 2000;
                $(this).val('' + updateInterval);
            }
        });

    if ($('#realtimechart').length) {
        var options = {
            series: {
                shadowSize: 1,
                lines: {
                    show: true,
                    fill: true,
                    fillColor: { colors: [{ opacity: 1 }, { opacity: 0.1 }] },
                },
            },
            yaxis: { min: 0, max: 100 },
            xaxis: { show: false },
            colors: ['rgba(65,139,202,0.5)'],
            grid: {
                tickColor: '#dddddd',
                borderWidth: 0,
            },
        };
        var plot = $.plot($('#realtimechart'), [getRandomData()], options);

        function update() {
            plot.setData([getRandomData()]);
            // since the axes don't change, we don't need to call plot.setupGrid()
            plot.draw();

            setTimeout(update, updateInterval);
        }

        update();
    }
    // top menu

    var useOnComplete = false,
        useEasing = false,
        useGrouping = false,
        options = {
            useEasing: useEasing, // toggle easing
            useGrouping: useGrouping, // 1,000,000 vs 1000000
            separator: ',', // character to use as a separator
            decimal: '.', // character to use as a decimal
        };

    var demo = new countUp.CountUp('myTargetElement1', 9500, 1254, 0, 6, options);
    demo.start();
    var demo = new countUp.CountUp('myTargetElement2', 100, 1, 0, 6, options);
    demo.start();
    var demo = new countUp.CountUp('myTargetElement3', 5000, 2402, 0, 6, options);
    demo.start();
    var demo = new countUp.CountUp('myTargetElement4', 8000, 1254, 0, 6, options);
    demo.start();
    var demo = new countUp.CountUp('myTargetElement1.1', 98000, 1254, 0, 6, options);
    demo.start();
    var demo = new countUp.CountUp('myTargetElement1.2', 396000, 1254, 0, 6, options);
    demo.start();
    var demo = new countUp.CountUp('myTargetElement2.1', 920, 154, 0, 6, options);
    demo.start();
    var demo = new countUp.CountUp('myTargetElement2.2', 3929, 2582, 0, 6, options);
    demo.start();
    var demo = new countUp.CountUp('myTargetElement3.1', 42000, 2582, 0, 6, options);
    demo.start();
    var demo = new countUp.CountUp('myTargetElement3.2', 173929, 25858, 0, 6, options);
    demo.start();
    var demo = new countUp.CountUp('myTargetElement4.1', 56000, 2544, 0, 6, options);
    demo.start();
    var demo = new countUp.CountUp('myTargetElement4.2', 219864, 1584, 0, 6, options);
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
    //Percentage Monitor
    $(document).ready(function () {
        /** BEGIN WIDGET PIE FUNCTION **/
        if ($('.widget-easy-pie-1').length > 0) {
            $('.widget-easy-pie-1').easyPieChart({
                easing: 'easeOutBounce',
                barColor: '#F9AE43',
                lineWidth: 5,
            });
        }
        if ($('.widget-easy-pie-2').length > 0) {
            $('.widget-easy-pie-2').easyPieChart({
                easing: 'easeOutBounce',
                barColor: '#F9AE43',
                lineWidth: 5,
                onStep: function (from, to, percent) {
                    $(this.el).find('.percent').text(Math.round(percent));
                },
            });
        }

        if ($('.widget-easy-pie-3').length > 0) {
            $('.widget-easy-pie-3').easyPieChart({
                easing: 'easeOutBounce',
                barColor: '#EF6F6C',
                lineWidth: 5,
            });
        }
        /** END WIDGET PIE FUNCTION **/
    });

    //world map
    $(function () {
        $('#world-map-markers').vectorMap({
            map: 'world_mill_en',
            scaleColors: ['#C8EEFF', '#0071A4'],
            normalizeFunction: 'polynomial',
            hoverOpacity: 0.7,
            hoverColor: false,
            markerStyle: {
                initial: {
                    fill: '#EF6F6C',
                    stroke: '#383f47',
                },
            },
            backgroundColor: '#515763',
            markers: [
                { latLng: [60, -100], name: 'canada - 1222 views' },
                { latLng: [43.93, 12.46], name: 'San Marino- 300 views' },
                { latLng: [47.14, 9.52], name: 'Liechtenstein- 52 views' },
                { latLng: [12.05, -61.75], name: 'Grenada- 5 views' },
                { latLng: [41.9, 12.45], name: 'Vatican City- 1254 views' },
                { latLng: [50, 0], name: 'France - 5254 views' },
                { latLng: [0, 120], name: 'Indonesia - 525 views' },
                { latLng: [-25, 130], name: 'Australia - 4586 views' },
                { latLng: [0, 20], name: 'Africa - 1 views' },
                { latLng: [35, 100], name: 'China -29 views' },
                { latLng: [46, 105], name: 'Mongolia - 2123 views' },
                { latLng: [40, 70], name: 'Kyrgiztan - 24446 views' },
                { latLng: [58, 50], name: 'Russia - 3405 views' },
                { latLng: [35, 135], name: 'Japan - 47566 views' },
            ],
        });
    });
    $(document).ready(function () {
        var composeHeight = $('#calendar').height() + 21 - $('.adds').height();
        $('.scroller_height').slimScroll({
            color: '#A9B6BC',
            height: '270px',
            size: '5px',
        });
    });
})(jQuery);
