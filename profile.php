<?php
include_once(dirname(__FILE__) . '/class/include.php');
include_once(dirname(__FILE__) . '/auth.php');
?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Profile &middot; Elephant Template &middot; The fastest way to build Modern Admin APPS for any platform, browser, or device.</title>
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <meta name="description" content="Elephant is an admin template that helps you build modern Admin Applications, professionally fast! Built on top of Bootstrap, it includes a large collection of HTML, CSS and JS components that are simple to use and easy to customize.">
        <meta property="og:url" content="http://demo.madebytilde.com/elephant">
        <meta property="og:type" content="website">
        <meta property="og:title" content="The fastest way to build Modern Admin APPS for any platform, browser, or device.">
        <meta property="og:description" content="Elephant is an admin template that helps you build modern Admin Applications, professionally fast! Built on top of Bootstrap, it includes a large collection of HTML, CSS and JS components that are simple to use and easy to customize.">
        <meta property="og:image" content="../../elephant.html">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@madebytilde">
        <meta name="twitter:creator" content="@madebytilde">
        <meta name="twitter:title" content="The fastest way to build Modern Admin APPS for any platform, browser, or device.">
        <meta name="twitter:description" content="Elephant is an admin template that helps you build modern Admin Applications, professionally fast! Built on top of Bootstrap, it includes a large collection of HTML, CSS and JS components that are simple to use and easy to customize.">
        <meta name="twitter:image" content="../../elephant.html">
        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
        <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="manifest.json">
        <link rel="mask-icon" href="safari-pinned-tab.svg" color="#f7a033">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
        <link rel="stylesheet" href="css/vendor.min.css">
        <link rel="stylesheet" href="css/elephant.min.css">
        <link rel="stylesheet" href="css/application.min.css">
        <link rel="stylesheet" href="css/profile.min.css">
    </head>
    <body class="layout layout-header-fixed">
        <!--Top header -->
        <?php include './top-header.php'; ?>
        <!--End Top header -->
        <div class="layout-main">
            <?php include './disable-navigation.php'; ?>
            <div class="layout-content">
                <div class="profile">
                    <div class="profile-header">
                        <div class="profile-cover">
                            <div class="profile-container">
                                <div class="profile-card">
                                    <div class="profile-avetar">
                                        <img class="profile-avetar-img" width="128" height="128" src="img/0180441436.jpg" alt="Teddy Wilson">
                                    </div>
                                    <div class="profile-overview">
                                        <h1 class="profile-name"><?php echo $STUDENT->full_name ?></h1>
                                    </div>

                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8"> 
                            <div class="demo-form-wrapper card " style="padding: 50px">
                              
                                <form class="form form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-control-1">Student Name: </label>
                                        <div class="col-sm-9">
                                            <input id="form-control-1" class="form-control" type="text"  value="<?php echo $STUDENT->full_name ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-control-1">Email: </label>
                                        <div class="col-sm-9">
                                            <input id="form-control-1" class="form-control" type="text" value="<?php echo $STUDENT->email ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-control-1">Image: </label>

                                        <div class="col-sm-9">
                                            <input id="form-control-1" class="form-control" type="file">
                                            <img class=" " width="128" height="128" src="img/0180441436.jpg"  >
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-control-1">NIC Number: </label>
                                        <div class="col-sm-9">
                                            <input id="form-control-1" class="form-control" type="text" value="<?php echo $STUDENT->nic_number ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-control-1">Gender: </label>
                                        <div class="col-sm-9">
                                            <select id="form-control-21" class="custom-select" name="gender">
                                                <option value="" selected="selected"> -- Select your Gender -- </option>
                                                <?php
                                                if ($STUDENT->gender == ['Male']) {
                                                    ?>
                                                    <option value="Male" selected="">Male</option>
                                                    <option value="Female">Female</option>   
                                                <?php } else { ?>
                                                    <option value="Male" >Male</option>
                                                    <option value="Female" selected="">Female</option>        
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-control-1">Age: </label>
                                        <div class="col-sm-9">
                                            <input id="form-control-1" class="form-control" type="text" value="<?php echo $STUDENT->age ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-control-1">Phone Number: </label>
                                        <div class="col-sm-9">
                                            <input id="form-control-1" class="form-control" type="text" value="<?php echo $STUDENT->phone_number ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-control-1">Address: </label>
                                        <div class="col-sm-9">
                                            <input id="form-control-1" class="form-control" type="text" value="<?php echo $STUDENT->address ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="form-control-1">Education Level: </label>
                                        <div class="col-sm-9">
                                            <div class="col-sm-9">
                                                <?php
                                                if ($STUDENT->education_level == 'o/l') {
                                                    ?>
                                                    <label class="custom-control custom-control-primary custom-radio">
                                                        <input class="custom-control-input" type="radio" name="education_level" value="o/l" checked="" >
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">Educational Level ( O / L )</span>
                                                    </label>
                                                    <label class="custom-control custom-control-primary custom-radio">
                                                        <input class="custom-control-input" type="radio" name="education_level" value="a/l">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">Educational Level ( A / L )</span>
                                                    </label>
                                                <?php } else { ?>
                                                    <label class="custom-control custom-control-primary custom-radio">
                                                        <input class="custom-control-input" type="radio" name="education_level" value="o/l"  >
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">Educational Level ( O / L )</span>
                                                    </label>
                                                    <label class="custom-control custom-control-primary custom-radio">
                                                        <input class="custom-control-input" type="radio" name="education_level" value="a/l" checked="">
                                                        <span class="custom-control-indicator"></span>
                                                        <span class="custom-control-label">Educational Level ( A / L )</span>
                                                    </label>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3"> </div> 
                                        <div class="col-md-3">  </div> 
                                        <div class="col-md-3">  </div> 
                                        <div class="col-md-3"> 
                                            <button class="btn btn-primary btn-block" type="submit"  >Sign up</button>  
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/vendor.min.js"></script>
        <script src="js/elephant.min.js"></script>
        <script src="js/application.min.js"></script>
        <script src="js/profile.min.js"></script>

    </body>

</html>