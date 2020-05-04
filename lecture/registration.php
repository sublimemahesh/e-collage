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
        <div class="signup" style="max-width: 650px!important;">
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
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="first-name" >Full Name</label>
                                    <input id="first_name" class="form-control" type="text" name="full_name"   class="form-
                                           control" data-field="full_name" >
                                    <div class="valid-message"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" class="form-control" type="email" name="email"  data-field="email" >
                                    <div class="valid-message"></div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="age" >Age</label>
                                    <input id="age" class="form-control" type="text" name="age"   class="form-control" data-field="age" >
                                    <div class="valid-message"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="nic_number" >NIC Number / Passport No</label>
                                    <input id="nic_number" class="form-control" type="text" name="nic_number"   class="form-control" data-field="nic_number" >
                                    <div class="valid-message"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="phone" >Phone Number</label>
                                    <input id="phone_number" class="form-control" type="text" name="phone_number"   class="form-control" data-field="phone_number" >
                                    <div class="valid-message"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row gutter-xs"> 
                            <div class="col-sm-12">
                                <label for="birth_day" >Date of Birth</label>
                            </div>
                            <div class="col-sm-2">
                                <label for="birth_day" >Date</label>
                                <div class="form-group"> 
                                    <select id="dobday"  class="form-control" name="date"></select>
<!--                                    <input id="birth_day" class="form-control" type="text" name="birth_day"  class="form-control" data-field="birth_day" >-->

                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label for="birth_day" >Month</label>
                                <div class="form-group"> 
                                    <select id="dobmonth"  class="form-control" name="month"></select>
<!--                                    <input id="birth_day" class="form-control" type="text" name="birth_day"  class="form-control" data-field="birth_day" >-->

                                </div>
                            </div>

                            <div class="col-sm-3">
                                <label for="birth_day" >Year</label>
                                <div class="form-group"> 
                                    <select id="dobyear"  class="form-control" name="year"></select>
<!--                                    <input id="birth_day" class="form-control" type="text" name="birth_day"  class="form-control" data-field="birth_day" >-->
                                </div>
                            </div>


                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="age" >Address</label>
                                    <input id="address" class="form-control" type="text" name="address"  >

                                </div>
                            </div>
                            <!--                            <div class="col-sm-4" hidden="">
                                                            <div class="form-group">
                                                                <label for="age" >Grade</label>
                                                                <input id="grade" class="form-control" type="text" name="grade"   >
                            
                                                            </div>
                                                        </div>-->
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
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="age" >School</label>
                                    <input id="school" class="form-control" type="text" name="school"  data-field="school" >
                                    <div class="valid-message"></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="age" >College / Tuition Class</label>
                                    <input id="collage" class="form-control" type="text" name="collage">

                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="password" class="control-label">Experience (How much years) </label> 
                                    <input  id="experience" class="form-control" type="number" name="experience" id="labelPassword"   min="0"  >

                                </div>
                            </div> 

                        </div>
                        <div class="row gutter-xs">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="mediums" >Mediums </label></br>
                                    <label class="custom-control custom-control-primary custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" name="mediums[]" value="1" >
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-label">Sinhala </span>
                                    </label>
                                    <label class="custom-control custom-control-primary custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" name="mediums[]" value="2" >
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-label">Tamil </span>
                                    </label>
                                    <label class="custom-control custom-control-primary custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" name="mediums[]" value="3" >
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-label">English </span>
                                    </label>
                                    <label class="custom-control custom-control-primary custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" name="mediums[]" value="4">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-label">Arabic </span>
                                    </label>
                                    <label class="custom-control custom-control-primary custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" name="mediums[]" value="5"  >
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-label">Hindi </span>
                                    </label>

                                </div>
                            </div>

                        </div>

                        <div class="row gutter-xs">


                            <!--                            <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="password" class="control-label">Register for payments</label> 
                                                                <select id="form-control-21" class="custom-select" name="payment">
                                                                    <option value="" selected="selected"> -- Register for payments -- </option> 
                                                                    <option value="1">Bank Account No</option>
                                                                    <option value="2">Account holder’s name as pass book</option>
                                                                    <option value="3">Bank Name</option>
                                                                    <option value="4"> Branch</option>  
                                                                </select>
                                                            </div>
                                                        </div> -->


                        </div>
                        <div class="row gutter-xs">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="gender" >IT literacy </label> <br>
                                    <div class="col-md-5">
                                        <label class="custom-control custom-control-primary custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" name="it_literacy[]" value="1" >
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-label">I can operate digital equipments </span>
                                        </label>

                                    </div>
                                    <div class="col-md-6">   

                                        <label class="custom-control custom-control-primary custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" name="it_literacy[]" value="2" >
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-label">I can use Internet browsing & email </span>
                                        </label>
                                    </div>

                                    <div class="col-md-5">
                                        <label class="custom-control custom-control-primary custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" name="it_literacy[]" value="3" >
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-label">I can Type setting </span>
                                        </label>
                                    </div>
                                    <div class="col-md-7">
                                        <label class="custom-control custom-control-primary custom-checkbox"  >
                                            <input class="custom-control-input" type="checkbox" name="it_literacy[]" value="4" >
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-label">No It literacy (don’t worry about I will support you) </span>
                                        </label> 
                                    </div> 
                                </div>
                            </div> 
                        </div>
                        <hr>
                        <div class="row gutter-xs">
                            <div class="col-sm-12">
                                <div class="form-group"> 
                                    <label for="gender" >Equipment Facilities</label></br>     
                                    <div class="col-md-4">
                                        <label class="custom-control custom-control-primary custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" name="facilities[]" value="1" >
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-label">Internet connection </span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="custom-control custom-control-primary custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" name="facilities[]" value="2" >
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-label">Desktop / Laptop </span>
                                        </label>
                                    </div>

                                    <div class="col-md-4">
                                        <label class="custom-control custom-control-primary custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" name="facilities[]" value="3">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-label">Tablet computer </span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="custom-control custom-control-primary custom-checkbox"  >
                                            <input class="custom-control-input" type="checkbox" name="facilities[]" value="4">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-label">Smart phone</span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="custom-control custom-control-primary custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" name="facilities[]" value="5">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-label">Video camera</span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="custom-control custom-control-primary custom-checkbox" 
                                               <input class="custom-control-input" type="checkbox" name="facilities[]" value="6" >
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-label"> Recording instruments</span>
                                        </label> 
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <hr>
                        <div class="row gutter-xs">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="gender" >Educated Level (Select option) </label>
                                    <select id="form-control-21" class="custom-select" name="education_level">
                                        <option value="" selected="selected"> -- Select your Educated Level -- </option>
                                        <option value="1">Doctorate / ආචාර්ය උපාධිය</option>
                                        <option value="2">Master's degree or Postgraduate / පශ්චාත් උපාධිය</option>
                                        <option value="3">Bachelor's degree / උපාධිය</option>
                                        <option value="4">Graduate Teacher / උපාධිධාරී ගුරු</option>
                                        <option value="5">Trainee Teacher / පුහුණු ගුරු</option>
                                        <option value="6">Diploma / ඩිප්ලෝමා</option>
                                        <option value="7">Certificate / සහතිකපත්</option>
                                        <option value="8">Professional / වෘත්තීමය</option>
                                        <option value="9">Other / වෙනත්</option>

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
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="../assets/js/dobpicker.js" type="text/javascript"></script>

        <script>
            $(document).ready(function () {
                $.dobPicker({
                    daySelector: '#dobday', /* Required */
                    monthSelector: '#dobmonth', /* Required */
                    yearSelector: '#dobyear', /* Required */
                    dayDefault: 'Day', /* Optional */
                    monthDefault: 'Month', /* Optional */
                    yearDefault: 'Year', /* Optional */
                    minimumAge: 12, /* Optional */
                    maximumAge: 80 /* Optional */
                });
            });
        </script>

        <!--        
                <script src="js/vendor.min.js"></script>
                <script src="js/elephant.min.js"></script>-->
        <script src="js/signup-1.min.js"></script> 
        <script src="js/jquery.formValid.js" type="text/javascript"></script>
        <script src="ajax/js/registration.js" type="text/javascript"></script>
        <script src="ajax/js/city.js" type="text/javascript"></script>

    </body>
</html>