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

            var nicNumber = $('#nic_number').val();
            var mobileNumber = $('#phone_number').val();

            if (nicNumber.match(/^.*[^\s{1,}]\s.*/) || nicNumber == '') {
                $('#errors').val(1);
                swal({
                    title: "Space characters not alowded in NIC Number.!",
                    text: "containing space characters in nic number column..",
                    type: "error",
                    showCancelButton: false,
                    confirmButtonColor: "#00b0e4",
                    confirmButtonText: "Enter Again.!",
                    closeOnConfirm: false},
                        function () {
                            swal.close();
                            $('html, body').animate({
                                scrollTop: $("#full_name").offset().top
                            }, 1000);
                            $('#nic_number').focus();
                        });
            } else if (mobileNumber.match(/^.*[^\s{1,}]\s.*/) || mobileNumber == '') {
                $('#errors').val(1);
                swal({
                    title: "Space characters not alowded in Mobile Number.!",
                    text: "containing space characters in mobile number column..",
                    type: "error",
                    showCancelButton: false,
                    confirmButtonColor: "#00b0e4",
                    confirmButtonText: "Enter Again.!",
                    closeOnConfirm: false
                }, function () {
                    swal.close();
                    $('html, body').animate({
                        scrollTop: $("#email").offset().top
                    }, 1000);
                    $('#phone_number').focus();
                });
            } else {

                var formData = new FormData($("form#form")[0]);
                $.ajax({
                    url: "ajax/post-and-get/registration_check.php",
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
                                        text: "Please accept our Agreement..!",
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
                    }

                });
            }
        }
        return false;

    });
});