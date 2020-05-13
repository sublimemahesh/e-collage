
$(document).ready(function () {
    
    
    $(".select").click(function (event) {
        event.preventDefault();
 
            var formData = new FormData($('.form-data')[0]);

            $.ajax({
                  url: "ajax/post-and-get/student_class_registration.php",
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
                                window.location.replace("select-class.php");
                            }, 1500);
                        });
                   
                },
                cache: false,
                contentType: false,
                processData: false
            });
       
    }); 
    
    
});

