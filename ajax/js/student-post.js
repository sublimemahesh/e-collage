
$(document).ready(function () {
    $("#student-post").click(function (event) {
        event.preventDefault();


//        alert($('input[type="file"]').val());




//        $('#loading').show();
//    if (!$('#full_name').val() || $('#full_name').val().length === 0) {
//        swal({
//            title: "Error!",
//            text: "Please enter full name..!",
//            type: 'error',
//            timer: 1500,
//            showConfirmButton: false
//        });
//
//    } else {
        var formData = new FormData($('#form-data')[0]);

        $.ajax({
            url: "ajax/post-and-get/student.php",
            type: "POST",
            data: formData,
            async: false,
            dataType: 'json',
            success: function (result) {
//                    $(".append_img").attr("src", "upload/student/profile/" + result.filename);
//                    $('#loading').hide();
                swal({
                    title: "Success!",
                    text: "Your data was saved successfully!.....",
                    type: 'success',
                    timer: 2000,
                    showConfirmButton: false
                });
            },
            cache: false,
            contentType: false,
            processData: false
        });
//    }
    });
});