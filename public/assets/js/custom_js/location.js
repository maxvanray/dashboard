"use strict";

$.fn.editable.defaults.mode = 'inline';

$('input[type="checkbox"].custom-checkbox, input[type="radio"].custom-radio').iCheck({
    checkboxClass: 'icheckbox_minimal-blue',
    radioClass: 'iradio_minimal-blue',
    increaseArea: '20%'
});

$('#name').editable({
    type: 'text',
    name: 'username',
    title: 'Enter Location Name'
});