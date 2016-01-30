// When the browser is ready...
$(function() {
    //start code jQuery Form Validation code

    /* author: dhaval
     * Description: url validaion*/
    jQuery.validator.addMethod("url", function(value, element) {
        return this.optional(element) || /^((https?|s?ftp):\/\/)?(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(value);
    }, "Please enter a valid URL.");
    /* end code dhaval*/

    /* Description: greateThan previous date*/
    jQuery.validator.addMethod("greaterThan",
            function(value, element, params) {
                if (!/Invalid|NaN/.test(new Date(value))) {
                    return new Date(value) >= new Date($(params).val());
                }
                return isNaN(value) && isNaN($(params).val())
                        || (Number(value) > Number($(params).val()));
            }, 'Must be greater than {0}.');
    //end code

    /* Description: greateThan 0 amount*/
    $.validator.addMethod('minAmount', function(value, el, param) {
        return value > param;
    }, 'Must be greater than {0}.');
    //end code
    
    $.validator.prototype.resetForm = function () {
        if ($.fn.resetForm) {
            $(this.currentForm).resetForm();
        }
        this.submitted = {};
        this.lastElement = null;
        this.prepareForm();
        this.hideErrors();
        var elements = this.elements().removeData("previousValue").removeAttr("aria-invalid");
        if (this.settings.removehighlight) {
            for (var i = 0; elements[i]; i++) {
                this.settings.removehighlight.call(this, elements[i], this.settings.errorClass, this.settings.validClass);
            }
        }
    }

    $("#register-form").validate({
        // Specify the validation rules
        rules: {
            firstname: {
                required: true
            },
            lastname: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            username: {
                required: true,
                alphanumeric: true,
                rangelength: [5, 12]
            },
            user_type: {
                required: true
            },
            password: {
                required: true,
                nowhitespace: true,
                minlength: 6
            },
            c_password: {
                required: true,
                minlength: 6,
                equalTo: "#password"
            }
        },
        submitHandler: function(form) {
            form.submit();
        },
        highlight: function(element) {
            $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-ok').addClass('glyphicon-remove');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-remove').addClass('glyphicon-ok');
        },
        removehighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error').removeClass('has-success');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-remove').removeClass('glyphicon-ok');
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
    
    $("#main-contact-form").validate({
        // Specify the validation rules
        rules: {
            name: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            company: {
                required: true
            },
            phone: {
                required: true,
                number: true
            },
            subject: {
                required: true
            },
            message: {
                required: true
            }
        },
        submitHandler: function(form) {
            form.submit();
        },
        highlight: function(element) {
            $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-ok').addClass('glyphicon-remove');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-remove').addClass('glyphicon-ok');
        },
        removehighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error').removeClass('has-success');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-remove').removeClass('glyphicon-ok');
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
//            email: {
//                required: true,
//                email: true
//            },
            password: {
                required: function(element){
                  return $("#id").val() == 0;  
                },
                minlength:5,
                nowhitespace: true,
            },
            c_password: {
                required: function(element){
                  return $("#id").val() == 0;  
                },
                equalTo: "#password"
            },
        },
        submitHandler: function(form) {
            form.submit();
        },
        highlight: function(element) {
            $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-ok').addClass('glyphicon-remove');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-remove').addClass('glyphicon-ok');
        },
        removehighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error').removeClass('has-success');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-remove').removeClass('glyphicon-ok');
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

    $("#login-form").validate({
        // Specify the validation rules
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true
            }
        },
        // Specify the validation error messages
        messages: {
            email: "Please enter your email",
            password: {
                required: "Please enter your password",
            }
        },
        submitHandler: function(form) {
            form.submit();
        },
        highlight: function(element) {
            $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-ok').addClass('glyphicon-remove');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-remove').addClass('glyphicon-ok');
        },
        removehighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error').removeClass('has-success');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-remove').removeClass('glyphicon-ok');
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

    $("#password-form").validate({
        // Specify the validation rules
        rules: {
            email: {
                required: true,
                email: true
            }
        },
        submitHandler: function(form) {
            form.submit();
        },
        highlight: function(element) {
            $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-ok').addClass('glyphicon-remove');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-remove').addClass('glyphicon-ok');
        },
        removehighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error').removeClass('has-success');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-remove').removeClass('glyphicon-ok');
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
    
    $("#reset-password-form").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                nowhitespace: true,
                minlength: 6
            },
            password_confirmation: {
                required: true,
                equalTo: '#password'
            }
        },
        submitHandler: function (form) {
            form.submit();
        },
        highlight: function (element) {
            $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-ok').addClass('glyphicon-remove');
        },
        unhighlight: function (element) {
            $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-remove glyphicon-lock').addClass('glyphicon-ok');
        },
        removehighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error').removeClass('has-success');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-remove').removeClass('glyphicon-ok');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });
    
    $("#change-password-form").validate({
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
        submitHandler: function (form) {
            form.submit();
        },
        highlight: function (element) {
            $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-ok').addClass('glyphicon-remove');
        },
        unhighlight: function (element) {
            $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-remove').addClass('glyphicon-ok');
        },
        removehighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error').removeClass('has-success');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-remove').removeClass('glyphicon-ok');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function (error, element) {
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
            email: {
                required: true,
                email: true
            },
            firstname: {
                required: true
            },
            lastname: {
                required: true
            }
        },
        submitHandler: function(form) {
            form.submit();
        },
        highlight: function(element) {
            $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-ok').addClass('glyphicon-remove');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-remove').addClass('glyphicon-ok');
        },
        removehighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error').removeClass('has-success');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-remove').removeClass('glyphicon-ok');
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

    $("#contact-form").validate({
        // Specify the validation rules
        rules: {
            fullname: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            message: {
                required: true,
                minlength: 20
            },
        },
        submitHandler: function(form) {
            form.submit();
        },
        highlight: function(element) {
            $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-ok').addClass('glyphicon-remove');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-remove').addClass('glyphicon-ok');
        },
        removehighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error').removeClass('has-success');
            $(element).closest('.form-group').find('.glyphicon').removeClass('glyphicon-remove').removeClass('glyphicon-ok');
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
    //end code jQuery Form Validation code
});