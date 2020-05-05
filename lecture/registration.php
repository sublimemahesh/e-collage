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
                <a class="signup-brand" href="../index.php">
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
                                    <select  class="custom-select" name="date">
                                        <option> --  Date --</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>                                        
                                    </select>

                                </div>
                            </div>
                            <div class="col-sm-3">
                                <label for="birth_day" >Month</label>
                                <div class="form-group"> 
                                    <select   class="custom-select"  name="month">
                                        <option> --  Month --</option>
                                        <option value="Jan">Jan</option>
                                        <option value="Feb">Feb</option>
                                        <option value="Mar">Mar</option>
                                        <option value="Apr">Apr</option>
                                        <option value="May">May</option>
                                        <option value="Jun">Jun</option>
                                        <option value="Jul">Jul</option>
                                        <option value="Aug">Aug</option>
                                        <option value="Sep">Sep</option>
                                        <option value="Oct">Oct</option>
                                        <option value="Nov">Nov</option>
                                        <option value="Dec">Dec</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <label for="birth_day" >Year</label>
                                <div class="form-group"> 
                                    <select  class="custom-select"  name="year">
                                        <option> --  Year --</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                        <option value="2013">2013</option>
                                        <option value="2012">2012</option>
                                        <option value="2011">2011</option>
                                        <option value="2010">2010</option>
                                        <option value="2009">2009</option>
                                        <option value="2008">2008</option>
                                        <option value="2007">2007</option>
                                        <option value="2006">2006</option>
                                        <option value="2005">2005</option>
                                        <option value="2004">2004</option>
                                        <option value="2003">2003</option>
                                        <option value="2002">2002</option>
                                        <option value="2001">2001</option>
                                        <option value="2000">2000</option>
                                        <option value="1999">1999</option>
                                        <option value="1998">1998</option>
                                        <option value="1997">1997</option>
                                        <option value="1996">1996</option>
                                        <option value="1995">1995</option>
                                        <option value="1994">1994</option>
                                        <option value="1993">1993</option>
                                        <option value="1992">1992</option>
                                        <option value="1991">1991</option>
                                        <option value="1990">1990</option>
                                        <option value="1989">1989</option>
                                        <option value="1988">1988</option>
                                        <option value="1987">1987</option>
                                        <option value="1986">1986</option>
                                        <option value="1985">1985</option>
                                        <option value="1984">1984</option>
                                        <option value="1983">1983</option>
                                        <option value="1982">1982</option>
                                        <option value="1981">1981</option>
                                        <option value="1980">1980</option>
                                        <option value="1979">1979</option>
                                        <option value="1978">1978</option>
                                        <option value="1977">1977</option>
                                        <option value="1976">1976</option>
                                        <option value="1975">1975</option>
                                        <option value="1974">1974</option>
                                        <option value="1973">1973</option>
                                        <option value="1972">1972</option>
                                        <option value="1971">1971</option>
                                        <option value="1970">1970</option>
                                        <option value="1969">1969</option>
                                        <option value="1968">1968</option>
                                        <option value="1967">1967</option>
                                        <option value="1966">1966</option>
                                        <option value="1965">1965</option>
                                        <option value="1964">1964</option>
                                        <option value="1963">1963</option>
                                        <option value="1962">1962</option>
                                        <option value="1961">1961</option>
                                        <option value="1960">1960</option>
                                    </select>

                                </div>
                            </div>


                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="age" >Address</label>
                                    <input id="address" class="form-control" type="text" name="address"  > 

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
                                        <option value="" selected="selected"> -- Select your city -- </option>

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

                            <div class="form-group">
                                <label for="mediums" >Mediums </label></br>
                                <div class="col-sm-9">
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
                                    <label class="custom-control custom-control-primary custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" name="mediums[]" value="6"  id="other">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-label">Other </span>
                                    </label>

                                </div>
                                <div class="col-sm-3" style="display: none" id="other_bar">
                                    <label class="custom-control custom-control-primary custom-checkbox "> 
                                        <div class="form-group">
                                            <input id="collage" class="form-control" type="text" name="mediums[]"> 
                                        </div>
                                    </label>
                                </div>

                            </div>


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
                                            <input class="custom-control-input" type="checkbox" name="facilities[]" value="6">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-label">Recording instruments</span>
                                        </label>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="custom-control custom-control-primary custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" name="facilities[]" value="5">
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-label">Video camera</span>
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
                                    <input  id="password" class="form-control" type="password" name="password" id="labelPassword"     data-field="password" placeholder="Enter your Password">
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

                $('#other').click(function () {
                    if ($(this).prop("checked") == true) {
                        $("#other_bar").show();
                    } else if ($(this).prop("checked") == false) {

                        $("#other_bar").hide();

                    }
                });
            });

        </script>


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