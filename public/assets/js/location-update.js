'use strict';
$(function(){


    $('input').on('ifChecked', function(event){
        $(this).parent().parent().parent().parent().find('.from').hide();
        $(this).parent().parent().parent().parent().find('.to').hide();
    });
    $('input').on('ifUnchecked', function(event){
        $(this).parent().parent().parent().parent().find('.from').show();
        $(this).parent().parent().parent().parent().find('.to').show();
    });
    $("input[type=checkbox]:checked").each(function(){
        $(this).parent().parent().parent().parent().find('.from').hide();
        $(this).parent().parent().parent().parent().find('.to').hide();
    });


    // TIME SELECT
    $(".timeselect").timeDropper({
        primaryColor: "#48CFAD",
        borderColor: "#48CFAD",
        textColor: "#48CFAD",
        meridians: true,
        format: "hh:mm A",
        setCurrentTime: false
    });

    // CHECKBOX
    $('input[type="checkbox"].custom-checkbox, input[type="radio"].custom-radio').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue',
        increaseArea: '20%'
    });

    // CLOSED
    // $('#closed_sunday').on('change', function(event){
    //     alert('click');
    // });
    // if ( $('#closed_sunday').is(':checked') ) {
    //     $('#sunday_times').hide();
    // }else{
    //     $('#sunday_times').show();
    // }
    $(".content").find('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
    });

    // DEFAULTS 
    var tokenval = $("#_token").data("token");
    $.fn.editable.defaults.url = '/location';
    $.fn.editable.defaults.mode = 'inline';
    $.fn.editable.defaults.error = function(response, newValue) {
        if(response.status === 500) {
            return 'Service unavailable. Please try later.';
        } else {
            return response.responseText;
        }
    };
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': tokenval
      }
    });


    // EDITABLE FIELDS
    $('#name').editable({
        type: 'text',
        name: 'name',
        title: 'Enter Location Name'
    });
    $('#address').editable({
        type: 'text',
        name: 'address',
        title: 'Enter Location Address'
    });
    $('#city').editable({
        type: 'text',
        name: 'city',
        title: 'Enter Location City'
    });
    $('#state').editable({
        typeahead: {
            name: 'state',
            local: ["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]
        }
    });
    $('#zip').editable({
        type: 'text',
        name: 'address',
        title: 'Enter Address'
    });
    $('#floor').editable({
        type: 'text',
        name: 'address',
        title: 'Enter Address'
    });
    $('#contact').editable({
        type: 'text',
        title: 'Enter Location Contact Name'
    });
    $('#email').editable({
        type: 'text',
        title: 'Enter Location Contact Name'
    });
    $('#phone').editable({
        type: 'text',
        title: 'Enter Location Phone Number'
    });
    $('#description').editable({
        type: 'text',
        title: 'Enter Location Phone Number'
    });

    var isClosed = function(event){
        
        
    };

    $('#update-hours').on('click', function(e){
        $('#closed_sunday').hide();
        // if( $('#closed_sunday .icheckbox_square-blue').hasClass('checked') ){
        //     alert('checked');
        // }else{
        //     alert('unch');
        // }
    });






});