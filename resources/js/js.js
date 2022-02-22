jQuery(document).ready(function($){
     
    function reloadCaptcha(){ $("#captchax").attr("src","php/captcha/captcha.php?r=" + Math.random()); }
                 
    $('.captcode').click(function(e){
        e.preventDefault();
        reloadCaptcha();
    });
     
    function swapButton(){
        var txtswap = $(".form-footer button[type='submit']");
        if (txtswap.text() == txtswap.data("btntext-sending")) {
            txtswap.text(txtswap.data("btntext-original"));
        } else {
            txtswap.data("btntext-original", txtswap.text());
            txtswap.text(txtswap.data("btntext-sending"));
        }
    }
 
    /* @custom validation method (smartCaptcha) 
    ------------------------------------------------------------------ */  
    $.validator.methods.smartCaptcha = function(value, element, param) {
            return value == param;
    };
     
    $("#booking-form").validate({
                                             
        errorClass: "state-error",
        validClass: "state-success",
        errorElement: "em",
        onkeyup: false,
        onclick: false,                     
        rules: {
                guestname: {
                    required: true,
                    minlength: 3
                },      
                guestemail: {
                    required: true,
                    email: true
                },
                guestphone: {
                    required: true
                },
                adults: {
                    required: true,
                    number: true
                },                              
                children: {
                    required: true,
                    number: true
                },
                checkin:{
                    required:true  
                },
                checkout:{
                    required:true  
                },
                captcha:{
                    required:true,
                    remote:'php/captcha/process.php'
                }                               
        },
        messages:{
                guestname: {
                        required: 'Please enter your name.',
                        minlength: 'Name must be at least 2 characters.'
                },              
                guestemail: {
                        required: 'Please enter your email address.',
                        email: 'Please enter a valid email address.'
                },
                adults: {
                        required: 'Please enter the number of adult guests.',
                        number: 'Please enter a valid number.'
                },                                                      
                children: {
                        required: 'Confirm the number of child guests.',
                        number: 'Please enter a valid number.'
                },  
                checkin:{
                        required: 'Please select a checkin date.'
                },
                checkout:{
                        required:'Please select a checkout date.'
                },
                captcha:{
                        required: 'You must enter the captcha code',
                        remote:'Captcha code is incorrect'
                }                               
        },
        highlight: function(element, errorClass, validClass) {
                $(element).closest('.field').addClass(errorClass).removeClass(validClass);
        },
        unhighlight: function(element, errorClass, validClass) {
                $(element).closest('.field').removeClass(errorClass).addClass(validClass);
        },
        errorPlacement: function(error, element) {
            if (element.is(":radio") || element.is(":checkbox")) {
                    element.closest('.option-group').after(error);
            } else {
                    error.insertAfter(element.parent());
            }
        },              
        submitHandler:function(form) {
            $(form).ajaxSubmit({
                    target:'.result',              
                    beforeSubmit:function(){
                            swapButton();
                            $('.form-footer').addClass('progress');
                    },
                    error:function(){
                            swapButton();
                            $('.form-footer').removeClass('progress');
                    },
                        success:function(){
                            swapButton();
                            $('.form-footer').removeClass('progress');
                            $('.alert-success').show().delay(7000).fadeOut();
                            $('.field').removeClass("state-error, state-success");
                            if( $('.alert-error').length == 0){
                                $('#booking-form').resetForm();
                                reloadCaptcha();
                            }
                        }
                });
        }
         
    }); 
      
    $("#checkin").datepicker({
        defaultDate: "+1w",
        changeMonth: false,
        numberOfMonths: 1,
        prevText: '<i class="fa fa-chevron-left"></i>',
        nextText: '<i class="fa fa-chevron-right"></i>',
        onClose: function( selectedDate ) {
            $( "#checkout" ).datepicker( "option", "minDate", selectedDate );
        }
    });
      
    $("#checkout").datepicker({
        defaultDate: "+1w",
        changeMonth: false,
        numberOfMonths: 1,
        prevText: '<i class="fa fa-chevron-left"></i>',
        nextText: '<i class="fa fa-chevron-right"></i>',            
        onClose: function( selectedDate ) {
            $( "#checkin" ).datepicker( "option", "maxDate", selectedDate );
        }
    });
});


