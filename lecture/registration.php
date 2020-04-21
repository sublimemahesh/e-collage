<?php
include '../class/include.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ecollege.lk - Registration   </title> 
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
                    <center>
                        <img class="img-responsive" src="img/logo.png" alt="Ecollege.lk">
                    </center>
                </a>
                <p class="signup-heading">
                    <em>Lecture Registration</em>
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
                                    <input id="nic_number" class="form-control" type="text" name="nic_number"   class="form-control" data-field="nic_number" >
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
                                    <label for="email">Email</label>
                                    <input id="email" class="form-control" type="email" name="email"  data-field="email" >
                                    <div class="valid-message"></div>
                                </div>
                            </div>
                        </div> 


                        <div class="row gutter-xs">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="gender" >District </label>

                                    <select  class="custom-select" id="district" name="district" required="">
                                        <option value="">-- Select your District -- </option>
                                        <?php
                                        foreach (District::all() as $district) {
                                            ?>
                                            <option value="<?php echo $district['id']; ?>"><?php echo $district['name']; ?></option>   
                                            <?php
                                        }
                                        ?> 
                                    </select>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="age" >City</label>
                                    <select class="custom-select" name="city" id="city-bar">
                                        <option value="" selected="selected"> -- Select your district -- </option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row gutter-xs">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="age" >Address</label>
                                    <input id="address" class="form-control" type="text" name="address"  data-field="address" >
                                    <div class="valid-message"></div>
                                </div>
                            </div>

                        </div>

                        <div class="row gutter-xs">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="gender" >Subject </label>
                                    <select id="form-control-21" class="custom-select" name="subject">
                                        <option value="" selected="selected"> -- Select your Subject -- </option>
                                        <?php
                                        $SUBJECT = new Subject(NULL);
                                        foreach ($SUBJECT->all() as $subject) {
                                            ?>
                                            <option value="<?php echo $subject['id'] ?>"><?php echo $subject['name'] ?></option>
                                        <?php } ?>                
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="password" class="control-label">Password</label> 
                                    <input  id="password" class="form-control" type="password" name="password" id="labelPassword"     data-field="password" >
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
        <script src="ajax/js/city.js" type="text/javascript"></script>
    </body>
</html>