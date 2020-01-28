$(document).ready(function () {
    $('#create').click(function (event) {
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
                        title: "Congratulation.!",
                        text: "Now you have selected to beginner level.",
                        type: 'warning',
                        showCancelButton: false,
                        confirmButtonColor: "rgb(240, 169, 0)",
                        confirmButtonText: "Continue.",
                    }, function () {
                        window.location = "index.php";
                    });
                } else if (result.status == 'intermediate') {
                    swal({
                        title: "Congratulation.!",
                        text: "Now you selected intermediate level.",
                        type: 'warning',
                        showCancelButton: false,
                        confirmButtonColor: "rgb(240, 169, 0)",
                        confirmButtonText: "Continue.",
                    }, function () {
                        window.location = "index.php";
                    });
                } else if (result.status == 'advance') {
                    swal({
                        title: "Congratulation.!",
                        text: "Now you selected advanced level.",
                        type: 'warning',
                        showCancelButton: false,
                        confirmButtonColor: "rgb(240, 169, 0)",
                        confirmButtonText: "Continue.",
                    }, function () {
                        window.location = "index.php";
                    });
                }
            }
        });

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

