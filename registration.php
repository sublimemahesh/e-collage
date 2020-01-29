<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sign Up - Self English Learning</title>
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <meta name="description" content="Elephant is an admin template that helps you build modern Admin Applications, professionally fast! Built on top of Bootstrap, it includes a large collection of HTML, CSS and JS components that are simple to use and easy to customize.">

        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
        <link rel="stylesheet" href="css/vendor.min.css">
        <link rel="stylesheet" href="css/elephant.min.css">
        <link rel="stylesheet" href="css/signup-2.min.css"> 
        <link href="css/jquery.formValid.css" rel="stylesheet" type="text/css"/>
    </head>

    <body class="reg-bck">
        <div class="signup">
            <div class="signup-body">
                <a class="signup-brand" href="#">
                    <img class="img-responsive" src="img/logo.png" alt="Elephant">
                </a>
                <p class="signup-heading">
                    <em>Student Registration</em>
                </p>  
                <div class="signup-form">
                    <form  method="POST" id="form"  >
                        <div class="row gutter-xs">
                            <div class="col-sm-12">

                                <div class="form-group">
                                    <label for="first-name" >Full Name</label>
                                    <input id="first_name" class="form-control" type="text" name="full_name"   class="form-control" data-field="full_name" >
                                    <div class="valid-message"></div>
                                </div>
                            </div>

                        </div>
                        <div class="row gutter-xs">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" class="form-control" type="email" name="email"  data-field="email" >
                                    <div class="valid-message"></div>
                                </div>
                            </div>
                        </div>

                         
                        <div class="row gutter-xs">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="student_id">Student ID</label>
                                    <input id="student_id" class="form-control" type="text" name="student_id"  data-field="student_id"  >
                                    <div class="valid-message"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row gutter-xs"> 

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="password" class="control-label">Password</label>
                                    <!--<div class="input-group">-->
                                    <input  id="password" class="form-control" type="password" name="password" id="labelPassword"   data-field="password" >
                                    <div class="valid-message" ></div> 
<!--                                        <span class="input-group-addon">
                                            <label class="custom-control custom-control-primary custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" name="password_toggler">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-label">Show</span>
                                            </label>
                                        </span> 
                                    </div>-->
                                </div>
                            </div> 
                        </div>

                        <button class="btn btn-primary btn-block" type="submit"  >Sign up</button> 
                    </form> 
                </div>

                <div class="signup-footer">
                    Already have an account? <a href="login.php">Log in</a>
                </div>
            </div>

        </div>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/vendor.min.js"></script>
        <script src="js/elephant.min.js"></script>
        <script src="js/signup-1.min.js"></script> 
        <script src="js/jquery.formValid.js" type="text/javascript"></script>
        <script src="ajax/js/registration.js" type="text/javascript"></script>

    </body>
</html>