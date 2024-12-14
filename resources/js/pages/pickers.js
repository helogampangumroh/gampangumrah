(function ($) {
    'use strict';
    $("input[name='demo1']").TouchSpin({
        min: 0,
        max: 100,
        step: 0.1,
        decimals: 2,
        boostat: 5,
        maxboostedstep: 10,
        postfix: '%',
        buttondown_class: 'btn btn-default',
        buttonup_class: 'btn btn-default',
    });
    $("input[name='demo2']").TouchSpin({
        min: -1000000000,
        max: 1000000000,
        stepinterval: 50,
        maxboostedstep: 10000000,
        prefix: '$',
        buttondown_class: 'btn btn-default',
        buttonup_class: 'btn btn-default',
    });
    $("input[name='demo_vertical']").TouchSpin({
        verticalbuttons: true,
        buttondown_class: 'btn btn-default',
        buttonup_class: 'btn btn-default',
    });
    $("input[name='demo3']").TouchSpin({
        buttondown_class: 'btn btn-default',
        buttonup_class: 'btn btn-default',
    });
    $("input[name='demo3_21']").TouchSpin({
        initval: 40,
        buttondown_class: 'btn btn-default',
        buttonup_class: 'btn btn-default',
    });
    $("input[name='demo4_2']").TouchSpin({
        postfix: 'a button',
        buttondown_class: 'btn btn-default',
        buttonup_class: 'btn btn-default',
    });
    $("input[name='demo5']").TouchSpin({
        prefix: 'pre',
        postfix: 'post',
        buttondown_class: 'btn btn-default',
        buttonup_class: 'btn btn-default',
    });
    $('#customize-spinner').spinner('changed', function (e, newVal, oldVal) {
        $('#old-val').text(oldVal);
        $('#new-val').text(newVal);
    });

    $(document).ready(function () {
        $('.bootstrap-touchspin-down').removeClass('input-group-prepend  input-group-append');
        $('.bootstrap-touchspin-up').removeClass(' input-group-prepend input-group-append');
        $('.bootstrap-touchspin-down').parent().removeClass('input-group-btn input-group-prepend');
        $('.bootstrap-touchspin-up').parent().removeClass('input-group-btn input-group-append');
    });
})(jQuery);
