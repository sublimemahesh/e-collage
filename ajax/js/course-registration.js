$(document).ready(function () {


    $('button[type="submit"]').click(function () {
        if (!$('#txtFullName').val() || $('#txtFullName').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter full name..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
            return false;
        } else if (!$('#txtEmail').val() || $('#txtEmail').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter email address..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
            return false;
        } else if (!$('#txtAddress').val() || $('#txtAddress').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter address..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
            return false;
        } else if (!$('#txtDistrict').val() || $('#txtDistrict').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter district..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
            return false;
        } else if (!$('#txtCity').val() || $('#txtCity').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter city..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
            return false;
        } else if (!$('#txtMobile').val() || $('#txtMobile').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter mobile number..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
            return false;
        } else if (!$('#txtSchool').val() || $('#txtSchool').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter school..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
            return false;
        } else if (!$('#txtGrade').val() || $('#txtGrade').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please select grade..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
            return false;
        } else if (!$('#txtDOB').val() || $('#txtDOB').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter date of birth..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
            return false;
        } else if (!$('#txtAge').val() || $('#txtAge').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter age..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
            return false;
        } else if (!$('#chbCourse:checked').length) {
            swal({
                title: "Error!",
                text: "Please select at least one course..!",
                type: 'error',
                timer: 1500,
                showConfirmButton: false
            });
            return false;
        } else {
            var formData = new FormData($("form#form")[0]);
            $.ajax({
                url: "ajax/post-and-get/course-registration.php",
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                dataType: "JSON",
                success: function (result) {
                    if (result.status == 'error') {
                        swal({
                            title: "Error!",
                            text: "Please enter  subject name..!",
                            type: 'error',
                            timer: 1500,
                            showConfirmButton: false
                        });
                    } else {
                        swal({
                            title: "Success!",
                            text: "You have been registered successfully...!",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                        setTimeout(() => {
                            $('input').val('');
                            // $("#chbCourse").attr("checked", false);
                            $('select option:eq(0)').attr('selected', 'selected');
                        }, 2000);
                    }
                }
            });
            // }
            return false;
        }
    });


});