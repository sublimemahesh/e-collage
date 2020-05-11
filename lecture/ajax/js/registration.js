$(document).ready(function () {

    var form = $('#form').formValid({
        fields: {
            "full_name": {
                "required": true,
                "tests": [
                    {
                        "type": "null",
                        "message": "Please enter the first name..!"
                    }
                ]
            },
            "nic_number": {
                "required": true,
                "tests": [
                    {
                        "type": "null",
                        "message": "Please enter the nic number..!"
                    }
                ]
            },
            "email": {
                "required": true,
                "tests": [
                    {
                        "type": "null",
                        "message": "Please enter the email..!"
                    },
                    {
                        "type": "email",
                        "message": "Please enter the valid email..!"
                    }
                ]
            },
            "address": {
                "required": true,
                "tests": [
                    {
                        "type": "select",
                        "message": "Please select the address..!"
                    }
                ]
            },
            "phone_number": {
                "required": true,
                "tests": [
                    {
                        "type": "select",
                        "message": "Please select the phone number..!"
                    }
                ]
            },
            "password": {
                "required": true,
                "tests": [
                    {
                        "type": "null",
                        "message": "Please enter your password..!"
                    }
                ]
            }
        }
    });
    form.keypress(300);
    $('#next').click(function () {

        form.test();
        if (form.errors() == 0) {
            $('#agreement_form').show();
            $('#register_form').hide();


            $('#black').click(function () {
                $('#register_form').show();
                $('#agreement_form').hide();

            });
            $('#register').click(function () {
                if ($('#agreement').prop("checked") == false) {
                    swal({
                        title: "Error!",
                        text: "Please accept our term and conditions",
                        type: 'error',
                        timer: 2000,
                        showConfirmButton: false
                    });
                } else {
                    var formData = new FormData($("form#form")[0]);
                    $.ajax({
                        url: "ajax/post-and-get/registration.php",
                        type: 'POST',
                        data: formData,
                        async: false,
                        cache: false,
                        contentType: false,
                        processData: false,
                        dataType: "JSON",
                        success: function (result) {
                            if (result.status == 'error') {
                                $('#message').text(result.message);
                            } else {
                                window.location.replace("index.php");
                            }
                        }
                    });
                }
            });

        }
        return false;

    });
});