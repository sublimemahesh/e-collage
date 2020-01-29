$(document).ready(function () {

//    var form = $('#form').formValid({
//        fields: {
//            "username": {
//                "required": true,
//                "tests": [
//                    {
//                        "type": "null",
//                        "message": "Please enter the uesrname..!"
//                    }
//                ]
//            },
//            "password": {
//                "required": true,
//                "tests": [
//                    {
//                        "type": "null",
//                        "message": "Please enter your password..!"
//                    }
//                ]
//            }
//        }
//    });
//
//    form.keypress(300);

    $('button[type="submit"]').click(function () {

        if (document.getElementById("username").value == "admin"
                && document.getElementById("password").value == "admin123")
        {
            window.location.replace("dashboard.php");
        } else
        {
            $('#message').text("Invalid Username or Password..!");
        }


    });


});