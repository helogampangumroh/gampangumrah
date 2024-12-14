'use strict';
// vanilla picker basic example
var parent = document.querySelector('#picker1');
var picker1 = new Picker(parent);
picker1.onChange = function (color) {
    parent.style.background = color.rgbaString;
};

// getting hex value
var parent2 = document.querySelector('#picker2');
var picker2 = new Picker(parent2);
picker2.onChange = function (color) {
    if (color) {
        const hexColor = color.hex;
        document.getElementById('color-input').value = hexColor;
    }
};

// background color picker
var parent3 = document.querySelector('#picker3');
var bodyStyle = document.querySelector('#card-bg').style;
var picker3 = new Picker(parent3);
picker3.onChange = function (color) {
    bodyStyle.backgroundColor = color.rgbaString;
};
