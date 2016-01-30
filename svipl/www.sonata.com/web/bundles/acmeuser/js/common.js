
// When the browser is ready...
$(function() {
    //start code jQuery Form Validation code
    /* recent-works */
    $("#recent-works").validate({
        // Specify the validation rules
        rules: {
            title: {
                required: true
            },
            description: {
                required: true
            },
            image: {
                required: true
            },
        },
        // Specify the validation error messages
        messages: {
        },
        submitHandler: function(form) {
            form.submit();
        },
        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }

    });
    /* end recent-works */
    
    /* logo_add */
    $("#logo_add_form").validate({
        // Specify the validation rules
        rules: {
            logo: {
                required: true
            },
        },
        // Specify the validation error messages
        messages: {
        },
        submitHandler: function(form) {
            form.submit();
        },
        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }

    });
    /* end logo_add */
    
    // Setup form validation on the #login-form element
    $("#login-form").validate({
        // Specify the validation rules
        rules: {
            login_email: {
                required: true,
                email: true
            },
            login_password: {
                required: true
            }
        },
        // Specify the validation error messages
        messages: {
        },
        submitHandler: function(form) {
            form.submit();
        },
        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }

    });

    $("#forgot-password-form").validate({
        // Specify the validation rules
        rules: {
            password_email: {
                required: true,
                email: true
            }
        },
        // Specify the validation error messages
        messages: {
        },
        submitHandler: function(form) {
            form.submit();
        },
        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }

    });

    $("#profile-form").validate({
        // Specify the validation rules
        rules: {
            firstname: {
                required: true
            },
            lastname: {
                required: true
            },
            company: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                number: true
            },
//            website: {
//                required: true
//            }
        },
        submitHandler: function(form) {
            form.submit();
        },
        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }

    });
    /* author: dhaval
     * Description: Registration form validation*/
    
    jQuery.validator.addMethod("url", function(value, element) {
    return this.optional(element) || /^((https?|s?ftp):\/\/)?(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(value);
    }, "Please enter a valid URL.");
    $("#register-form").validate({
        // Specify the validation rules
        rules: {
            user_type: {
                required: true
            },
            firstname: {
                required: true
            },
            lastname: {
                required: true
            },
            company: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            phone: {
                required: true,
                number: true
            },
//            website: {
//                required: true
//            },
            password: {
                required: true,
                minlength:5,
                nowhitespace: true,
            },
            c_password: {
                required: true,
                equalTo: "#password"
            },
            term_condition: {
                required: true
            },
        },
        submitHandler: function(form) {
            form.submit();
        },
        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else if (element.closest('.radio').length) {
                error.appendTo(element.closest('.form-group'));
            } else if (element.closest('.checkbox-inline').length) {
                error.appendTo(element.closest('.form-group'));
            } else {
                error.insertAfter(element);
            }
        }

    });
    /* end code dhaval*/

    /* author: dhaval
     * Description: Investor form validation*/
    $("#investor-form").validate({
        // Specify the validation rules
        rules: {
            company_name: {
                required: true
            },
            investment_low: {
                required: true,
                number: true
            },
            investment_high: {
                required: true,
                number: true
            },
            revenue_low: {
                required: true,
                number: true
            },
            revenue_high: {
                required: true,
                number: true
            },
            ebitda_low: {
                required: true,
                number: true
            },
            ebitda_high: {
                required: true,
                number: true
            },
            fund_size: {
//                required: true,
                number: true
            },
            amount_invested: {
//                required: true,
                number: true
            },
            'transaction_type[]': {
                required: true
            },
            'industries[]': {
                required: true
            },
            ownership_stake: {
                required: true
            },
            'country[]': {
                required: true
            },
            'state[]': {
                required: false
            },
            'city[]': {
                required: false
            },
            seeking_executives: {
                required: true
            },
            co_investor: {
                required: true
            },
            additional_note: {
                minlength: 20
            }

        },
        submitHandler: function(form) {
            form.submit();
        },
        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else if (element.closest('.radio-inline').length) {
                error.appendTo(element.closest('.form-group'));
            } else if (element.closest('.checkbox').length) {
                error.appendTo(element.closest('.form-group'));
            } else {
                error.insertAfter(element);
            }
        }

    });
    /* end code dhaval*/

    /* author: dhaval
     * Description: Investor form validation*/
    $("#opportunity-form").validate({
        // Specify the validation rules
        rules: {
            status: {
                required: true
            },
            company_name: {
                required: true
            },
            opportunity_title: {
                required: true
            },
            opportunity_description: {
                //minlength: 20
            },
            amount_seeking_low: {
//                required: true,
                number: true
            },
            amount_seeking_high: {
//                required: true,
                number: true
            },
            revenue: {
                required: true,
                number: true
            },
            ebitda: {
//                required: true,
                number: true
            },
            period: {
                required: true,
                
            },
//            fye: {
//                required: true
//            },
            
            'transaction_type[]': {
                required: true
            },
            'industries[]': {
                required: true
            },
            ownership_stake: {
                required: true
            },
            board_seat_available: {
                required: true
            },
            outside_investor: {
                required: true
            },
            outside_investor_name: {
                required: function(){
                    return $(".outside_investor").val()=='yes';
                }
            },
            'country[]': {
                required: true
            },
            'state[]': {
                required: false
            },
            'city[]': {
                required: false
            },
            additional_note: {
                minlength: 20
            },
            term_condition: {
                required: true
            },
            number_of_employees: {
                required: true,
                number: true,
            }
        },
        submitHandler: function(form) {
            form.submit();
        },
        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else if (element.closest('.radio-inline').length) {
                error.appendTo(element.closest('.form-group'));
            } else if (element.closest('.checkbox').length) {
                error.appendTo(element.closest('.form-group'));
            } else if (element.closest('.checkbox-inline').length) {
                error.appendTo(element.closest('.form-group'));
            } else {
                error.insertAfter(element);
            }
        }

    });
    /* end code dhaval*/
    
    /* author: dhaval
     * Description: job form validation*/
    $("#job-form").validate({
        // Specify the validation rules
        rules: {
            status: {
                required: true
            },
            job_title: {
                required: true
            },
            job_description: {
                minlength: 20
            },
            'industries[]': {
                required: true
            },
            'country[]': {
                required: true
            },
            'state[]': {
                required: false
            },
            'city[]': {
                required: false
            },
            education: {
                required: true
            },
            total_experience: {
                required: true
            },
            prior_experience: {
                required: true
            }
        },
        submitHandler: function(form) {
            form.submit();
        },
        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else if (element.closest('.radio-inline').length) {
                error.appendTo(element.closest('.form-group'));
            } else if (element.closest('.checkbox').length) {
                error.appendTo(element.closest('.form-group'));
            } else {
                error.insertAfter(element);
            }
        }

    });
    /* end code dhaval*/
    
    /* author: dhaval
     * Description: agent form validation*/
    $("#agent-form").validate({
        // Specify the validation rules
        rules: {
            status: {
                required: true
            },
            agent_title: {
                required: true
            },
            agent_code: {
                required: true
            },
            agent_description: {
                minlength: 20
            },
            'industries[]': {
                required: true
            },
            'country[]': {
                required: true
            },
            'state[]': {
                required: false
            },
            'city[]': {
                required: false
            },
            education: {
                required: true
            },
            total_experience: {
                required: true
            },
            prior_experience: {
                required: true
            }
        },
        submitHandler: function(form) {
            form.submit();
        },
        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else if (element.closest('.radio-inline').length) {
                error.appendTo(element.closest('.form-group'));
            } else if (element.closest('.checkbox').length) {
                error.appendTo(element.closest('.form-group'));
            } else {
                error.insertAfter(element);
            }
        }

    });
    /* end code dhaval*/
    
    $("#changepassword-form").validate({
        // Specify the validation rules
        rules: {
            old_password: {
                required: true
            },
            password: {
                required: true,
                nowhitespace: true,
                minlength: 5
            },
            confirm_password: {
                required: true,
                equalTo: '#password'
            }
        },
        submitHandler: function(form) {
            form.submit();
        },
        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });
    
    $("#recover-password-form").validate({
        // Specify the validation rules
        rules: {
            password: {
                required: true,
                nowhitespace: true,
                minlength: 5
            },
            confirm_password: {
                required: true,
                equalTo: '#password'
            }
        },
        submitHandler: function(form) {
            form.submit();
        },
        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });
    
    /* author: dhaval
     * Description: Investor form validation*/
    $("#cart-form").validate({
        // Specify the validation rules
        rules: {
            cc_number: {
                required: true,
                creditcard: true
            },
            cvv: {
                required: true,
                number: true,
                maxlength: 3
            },
            exp_year: {
                required: true,
            },
            exp_month: {
                required: true,
            },
            term_condition: {
                required: true,
            }
        },
        submitHandler: function(form) {
            form.submit();
        },
        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else if (element.closest('.radio-inline').length) {
                error.appendTo(element.closest('.form-group'));
            } else if (element.closest('.checkbox').length) {
                error.appendTo(element.closest('.form-group'));
            } else if (element.closest('.checkbox-inline').length) {
                error.appendTo(element.closest('.form-group'));
            } else {
                error.insertAfter(element);
            }
        }

    });
    /* end code dhaval*/
    
    /* author: mitesh
     * Description: Contact form validation*/
    /* image_form */
    $("#image_form").validate({
	// Specify the validation rules
        rules: {
            title: {
                required: true
            },
            link: {
                required: true,
                url: true
            },
            description: {
                required: true
            },
            image: {
                required: true
            },
            backgroundimage: {
                required: true
            }
        },
        submitHandler: function(form) {
            form.submit();
        },
        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else if (element.closest('.radio-inline').length) {
                error.appendTo(element.closest('.form-group'));
            } else if (element.closest('.icheckbox_minimal').length) {
                error.appendTo(element.closest('.form-group'));
            } else {
                error.insertAfter(element);
            }
        }
    });
    /* end image_form */
    
    /* image_edit_form */
    $("#image_edit_form").validate({
	// Specify the validation rules
        rules: {
            title: {
                required: true
            },
            link: {
                required: true,
                url: true
            },
            description: {
                required: true
            }
        },
        submitHandler: function(form) {
            form.submit();
        },
        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else if (element.closest('.radio-inline').length) {
                error.appendTo(element.closest('.form-group'));
            } else if (element.closest('.icheckbox_minimal').length) {
                error.appendTo(element.closest('.form-group'));
            } else {
                error.insertAfter(element);
            }
        }
    });
    /* end image_edit_form */
    //end code jQuery Form Validation code
});

/* author: Dhaval
 * start check user email exists */
function checkUserEmail(dt) {
    if (dt.value != '') {
        $.ajax({
            type: "POST",
            url: "models/userProcess.php",
            data: {
                type: 'checkemail',
                email: dt.value,
                lang: dt.lang
            },
            beforeSend: function() {
                $('#loader').html("Wait for checking");
                $('#submitform').attr('disabled', 'disabled');
            },
            success: function(resp) {
                $('#loader').parent('div.form-group').removeClass('has-error');

                var obj = jQuery.parseJSON(resp);

                if (obj.status) {
                    $('#loader').html("");
                } else {
                    $('#loader').parent('div.form-group').addClass('has-error');
                    $('#loader').html(obj.message);
                    $('#' + dt.id).val("");
                }
                $('#submitform').attr('disabled', false);
            },
            error: function(e) {
                alert('Error: ' + e);
            }
        });
    }
}

function checkCoupon(dt) {
    if (dt.value != '') {
        $.ajax({
            type: "POST",
            url: "models/paymentProcess.php",
            data: {
                type: 'coupon',
            },
            beforeSend: function() {
                $('#loader').html("Wait for checking");
                $('#submitform').attr('disabled', 'disabled');
            },
            success: function(resp) {
                $('#loader').parent('div.form-group').removeClass('has-error');

                var obj = jQuery.parseJSON(resp);

                if (obj.status) {
                    $('#loader').html("");
                } else {
                    $('#loader').parent('div.form-group').addClass('has-error');
                    $('#loader').html(obj.message);
                    $('#' + dt.id).val("");
                }
                $('#submitform').attr('disabled', false);
            },
            error: function(e) {
                alert('Error: ' + e);
            }
        });
    }
}

// end code
