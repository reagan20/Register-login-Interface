
$('document').ready(function() {
    //customized methods
    jQuery.validator.addMethod("validEmail", function (value, element) {
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(value)) {
            return true;
        } else {
            return false;
        }
        ;
    }, "Enter a valid email address!");

    //SECTION A: Applicant's Registration Details.
    $("#register").validate({
        rules: {
            fname: {
                required: true,
                lettersonly: true,
                minlength: 3
            },
            lname: {
                required: true,
                lettersonly: true,
                minlength: 3
            },
            email: {
                required: true,
                email: true,
                validEmail: true
            },
            password: {
                required: true,
                minlength: 4,
                maxlength: 10
            },
            password2: {
                required: true,
                equalTo: '#password'
            }
        },
        messages: {
            fname: {
                required: "Enter first name",
                lettersonly: "Name should contains letters only!"
            },
            lname: {
                required: "Enter last name",
                lettersonly: "Name should contains letters only!"
            },
            email: {
                required: "Email address required!",
                email: "Enter valid email address!"
            },
            password: {
                required: "Password required!!"
            },
            password2: {
                required: "Confirm password!",
                equalTo: "Passwords should match!"
            }
        }
    });
}
