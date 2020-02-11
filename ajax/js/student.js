$(document).ready(function () {

//Update student 
    $("#update").click(function (event) {
        event.preventDefault();

        if (!$('#full_name').val() || $('#full_name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter full name..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#email').val() || $('#email').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter email..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#nic_number').val() || $('#nic_number').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter short nic number..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#age').val() || $('#age').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter age..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#phone_number').val() || $('#phone_number').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter phone number..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else if (!$('#address').val() || $('#address').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter phone address..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
        } else {
            var formData = new FormData($('#form-data')[0]);
            $.ajax({
                url: "ajax/post-and-get/student.php",
                type: "POST",
                data: formData,
                async: false,
                dataType: 'json',
                success: function (result) {
                    swal({
                        title: "Success!",
                        text: "Your data was saved successfully!.....",
                        type: 'success',
                        timer: 2000,
                        showConfirmButton: false
                    }, function () {
                        setTimeout(function () {
                            window.location.replace("profile.php");
                        }, 1500);
                    });
                },
                cache: false,
                contentType: false,
                processData: false
            });
        }
    });

    $('#asseessment').click(function (event) {
        event.preventDefault();


        var formData = new FormData($("form#form-data")[0]);

        $.ajax({
            url: "ajax/post-and-get/student.php",
            type: 'POST',
            data: formData,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "JSON",
            success: function (result) {
                if (result.status == 'beginner') {
                    swal({
                        title: "Opps...!",
                        text: "you have obtain less than 40% marks ...",
                        type: 'warning',
                        confirmButtonText: "try again.",
                        showCancelButton: false,
                    }, function () {
                        window.location = "assessment-paper.php";
                    });
                } else if (result.status == 'intermediate') {
                    swal({
                        title: "Congratulation.! ",
                        text: "you have obtain 60% marks ... ",
                        type: 'warning',
                        showCancelButton: false,

                    }, function () {
                        window.location = "index.php";
                    });
                } else if (result.status == 'advance') {
                    swal({
                        title: "Congratulation.! ",
                        text: "you have obtain 100% marks ..",
                        type: 'warning',
                        showCancelButton: false

                    }, function () {
                        window.location = "index.php";
                    });
                }
            }
        });

    });

});

