(function ($) {
    'use strict';
    $(document).ready(function () {
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
        var todayDate = moment().startOf('day');
        var YM = todayDate.format('YYYY-MM');
        var YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
        var TODAY = todayDate.format('YYYY-MM-DD');
        var TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');

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
                    title: 'All Day Event',
                    start: YM + '-01',
                    backgroundColor: '#67C5DF',
                },
                {
                    title: 'Long Event',
                    start: YM + '-07',
                    end: YM + '-10',
                    backgroundColor: '#418BCA',
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: YM + '-09T16:00:00',
                    backgroundColor: '#67C5DF',
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: YM + '-16T16:00:00',
                    backgroundColor: '#67C5DF',
                },
                {
                    title: 'Conference',
                    start: YESTERDAY,
                    end: TOMORROW,
                    backgroundColor: '#EF6F6C',
                },
                {
                    title: 'Meeting',
                    start: TODAY + 'T10:30:00',
                    end: TODAY + 'T12:30:00',
                    backgroundColor: '#EF6F6C',
                },
                {
                    title: 'Lunch',
                    start: TODAY + 'T12:00:00',
                    backgroundColor: '#01BC8C',
                },
                {
                    title: 'Meeting',
                    start: TODAY + 'T14:30:00',
                    backgroundColor: '#EF6F6C',
                },
                {
                    title: 'Happy Hour',
                    start: TODAY + 'T17:30:00',
                    backgroundColor: '#418BCA',
                },
                {
                    title: 'Dinner',
                    start: TODAY + 'T20:00:00',
                    backgroundColor: '#A9B6BC',
                },
                {
                    title: 'Birthday Party',
                    start: TOMORROW + 'T07:00:00',
                    backgroundColor: '#A9B6BC',
                },
                {
                    title: 'Click for Google',
                    url: 'http://google.com/',
                    start: YM + '-28',
                    backgroundColor: '#418BCA',
                },
            ],
            eventClick: function (info) {
                // creating obj for an event
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
            dayMaxEventRows: true,
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
                // if the check box was checked then remove the dragged event from the list
                if (document.getElementById('drop-remove').checked) {
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
    });
    $('input[type="checkbox"].custom-checkbox').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        increaseArea: '20%',
    });

    function setpopover() {
        $('.fc-dayGridMonth-view')
            .find('.fc-daygrid-event-harness a')
            .each(function () {
                $(this).popover({
                    placement: 'top',
                    html: true,
                    content: $(this).text(),
                    trigger: 'hover',
                });
            });
        $('.fc-dayGridMonth-button').on('click', function () {
            $('.fc-daygrid-event-harness a').each(function () {
                $(this).popover({
                    placement: 'top',
                    html: true,
                    content: $(this).text(),
                    trigger: 'hover',
                });
            });
            return false;
        });
    }
    $('.fc-toolbar-chunk').find('h2').css('font-size', '18px');
    // setpopover();
    $('.fc-button-group button,.fc-today-button').removeClass('fc-state-default');
})(jQuery);
