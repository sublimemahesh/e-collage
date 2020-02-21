<?php
include './class/include.php';
$STUDENT = new Student(NULL);
$LAST_ID = $STUDENT->getLastStudentId();
$LAST_ID = $LAST_ID + 1;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>SSM net - Registration   </title> 
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
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="first-name" >Full Name</label>
                                    <input id="first_name" class="form-control" type="text" name="full_name"   class="form-
                                           control" data-field="full_name" >
                                    <div class="valid-message"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="nic_number" >NIC Number</label>
                                    <input id="nic_number" class="form-control" type="text" name="nic_number"   class="form-
                                           control" data-field="nic_number" >
                                    <div class="valid-message"></div>
                                </div>
                            </div>
                        </div>


                        <div class="row gutter-xs">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="gender" >Gender</label>
                                    <select id="form-control-21" class="custom-select" name="gender">
                                        <option value="" selected="selected"> -- Select your Gender -- </option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>                                         
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="age" >Age</label>
                                    <input id="age" class="form-control" type="text" name="age"   class="form-control" data-
                                           field="age" >
                                    <div class="valid-message"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row gutter-xs">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="phone" >Phone Number</label>
                                    <input id="phone_number" class="form-control" type="text" name="phone_number"   class="form-control" data-field="phone_number" >
                                    <div class="valid-message"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="phone" >Address</label>
                                    <input id="address" class="form-control" type="text" name="address"   class="form-control" 
                                           data-field="address" >
                                    <div class="valid-message"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row gutter-xs" style="margin-bottom: 10px;">
                            <div class="form-group" style="margin-bottom: 0px!important;">
                                <label for="phone" >Select Your Educational Level </label>
                            </div>
                            <div class="col-sm-6">
                                <label class="custom-control custom-control-primary custom-radio">
                                    <input class="custom-control-input" type="radio" name="education_level" value="o/l"  >
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-label">Educational Level ( O / L )</span>
                                </label>
                            </div>
                            <div class="col-sm-6">
                                <label class="custom-control custom-control-primary custom-radio">
                                    <input class="custom-control-input" type="radio" name="education_level" value="a/l">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-label">Educational Level ( A / L )</span>
                                </label>

                            </div>
                        </div>
                        <div class="row gutter-xs">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" class="form-control" type="email" name="email"  data-field="email" >
                                    <div class="valid-message"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="student_id">Student ID</label>
                                    <input id="student_id" class="form-control" type="text" name="student_id"  data-field="student_id" value="<?php echo 'STU000' . $LAST_ID ?>" readonly="">
                                    <div class="valid-message"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row gutter-xs"> 

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="password" class="control-label">Password</label>
                                    <!--<div class="input-group">-->
                                    <input  id="password" class="form-control" type="password" name="password" id="labelPassword"     data-field="password" >
                                    <div class="valid-message" ></div> 

                                </div>
                            </div> 
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="com_password" class="control-label">Confirm Password</label>
                                    <!--<div class="input-group">-->
                                    <input  id="com_password" class="form-control" type="password" name="com_password" id="labelPassword"      data-field="com_password" >
                                    <div class="valid-message" ></div> 

                                </div>
                            </div> 
                        </div>
                        <div class="form-group">
                            <div class="pull-left text-danger btn-padding font-size-new" id="message"></div>
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