<?php
include '../class/include.php';
include './auth.php';
?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ecollege.lk - Profile  </title>
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <meta property="og:url" content="http://demo.madebytilde.com/elephant">
        <meta property="og:type" content="website"> >

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
        <link href="css/sweetalert.css" rel="stylesheet" type="text/css"/>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <style>
            .profile-pic {
                position: relative;
                display: inline-block;
            }


            .fa-color{ 

                margin-top: -43px;
            }

        </style>
    </head>
    <body class="layout layout-header-fixed">
        <!--Top header -->
        <?php include './top-header.php'; ?>
        <!--End Top header -->
        <div class="layout-main">
            <?php include './navigation.php'; ?>
            <div class="layout-content">
                <div class="profile">
                    <div class="profile-header">
                        <div class="profile-cover">
                            <div class="profile-container">
                                <form id="form-data-profile">

                                    <div class="profile-card">
                                        <div class="profile-avetar ">

                                            <a href="#"data-toggle="modal" data-target="#infoModalAlert" >
                                                <?php
                                                if (empty($LECTURE->image_name)) {
                                                    ?>
                                                    <input type="image" src="img/member.jpg" width="128" height="128"  class="append_img profile-avetar-img " /> 

                                                <?php } else { ?>
                                                    <img   class="profile-avetar-img  append_img  "  width="128" height="128"   src="upload/lecture/profile/<?php echo $LECTURE->image_name ?>"  >   
                                                <?php } ?>
                                            </a>
                                        </div>
                                        <div class="profile-overview"> 
                                            <button class="btn btn-primary spinner spinner-inverse spinner-sm pull-right loading" type="button" disabled="disabled" style="display: none">Save changes</button>

                                            <label class="btn btn-primary file-upload-btn uploard_btn">
                                                Change Profile
                                                <input class="file-upload-input" type="file" id="change_profile" name="image_name" multiple="multiple">
                                            </label>
                                            <br>    
                                            <p style="margin: 0px 0 1px;">Lecture Name : <?php echo $LECTURE->full_name ?></p>
                                            <p style="margin: 0px 0 1px;">NIC Number : <?php echo $LECTURE->nic_number ?></p>
                                            <p style="margin: 0px 0 1px;">Email : <?php echo $LECTURE->email ?></p>
                                        </div>
                                    </div> 
                                    <input type="hidden"  name="id" value="<?php echo $LECTURE->id ?>">
                                    <input type="hidden"  name="action" value="CHANGEPROFILE">   
                                </form>
                            </div>
                        </div>
                    </div>
                    <img id="loading" src="https://www.vedantalimited.com/SiteAssets/Images/loading.gif" style="display: none; position: absolute;margin-top: 20%;margin-left: 37%;z-index: 999;"/>

                    <div class="row"> 
                        <div class="col-md-2"></div>
                        <div class="col-md-8"> 
                            <form class="demo-form-wrapper card " style="padding: 50px" id="form-data">
                                <div class="form form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="full_name">Full Name: </label>
                                        <div class="col-sm-9">
                                            <input id="full_name" name="full_name" class="form-control" type="text"  value="<?php echo $LECTURE->full_name ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="nic_number">NIC Number: </label>
                                        <div class="col-sm-9">
                                            <input id="nic_number" name="nic_number" class="form-control" type="text" value="<?php echo $LECTURE->nic_number ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="phone_number">Phone Number: </label>
                                        <div class="col-sm-9">
                                            <input id="phone_number" name="phone_number" class="form-control" type="text" value="<?php echo $LECTURE->phone_number ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="email">Email: </label>
                                        <div class="col-sm-9">
                                            <input id="email" name="email" class="form-control" type="text" value="<?php echo $LECTURE->email ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="email">District: </label>
                                        <div class="col-sm-9">
                                            <select  class="custom-select" id="district" name="district" required="">
                                                <option value="">-- Select your District -- </option>
                                                <?php
                                                foreach (District::all() as $district) {
                                                    if ($district['id'] == $LECTURE->district) {
                                                        ?>
                                                        <option value="<?php echo $district['id']; ?>" selected=""><?php echo $district['name']; ?></option>   
                                                        <?php
                                                    } else {
                                                        ?> 
                                                        <option value="<?php echo $district['id']; ?>"       ><?php echo $district['name']; ?></option>   
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="city">City: </label>
                                        <div class="col-sm-9">
                                            <select class="custom-select" name="city" id="city-bar">
                                                <option value="" selected="selected"> <?php
                                                    $CITY = new City($LECTURE->city);
                                                    echo $CITY->name
                                                    ?> </option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="address">Address: </label>
                                        <div class="col-sm-9">
                                            <input id="address" name="address" class="form-control" type="text" value="<?php echo $LECTURE->address ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label" for="city">Subject: </label>
                                        <div class="col-sm-9">
                                            <select class="custom-select" name="subject" id="subject">
                                                <?php
                                                foreach (Subject::all() as $subject) {
                                                    if ($subject['id'] == $LECTURE->subject) {
                                                        ?>
                                                        <option value="<?php echo $subject['id']; ?>" selected=""><?php echo $subject['name']; ?></option>   
                                                        <?php
                                                    } else {
                                                        ?> 
                                                        <option value="<?php echo $subject['id']; ?>"  ><?php echo $subject['name']; ?></option>   
                                                        <?php
                                                    }
                                                }
                                                ?>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3"> </div> 
                                        <div class="col-md-3">  </div> 
                                        <div class="col-md-3">  </div> 
                                        <div class="col-md-3"> 
                                            <input type="hidden"  name="id" value="<?php echo $LECTURE->id ?>"> 
                                            <input type="hidden"  name="action" value="UPDATE">                                     
                                            <input type="submit" class="btn btn-primary btn-block" type="submit" id="update"   value="update" >

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>
        </div>


        <input type="hidden" value="<?php echo $_SESSION['id'] ?>" id="student_id">

        <script src="js/jquery.min.js" type="text/javascript"></script> 
        <script src="js/vendor.min.js"></script>
        <script src="js/elephant.min.js"></script>
        <script src="js/application.min.js"></script>
        <script src="js/profile.min.js"></script>
        <script src="js/sweetalert.min.js" type="text/javascript"></script>

        <script src="ajax/js/lecture.js" type="text/javascript"></script>
        <script src="ajax/js/check-login.js" type="text/javascript"></script>

        <script src="ajax/js/city.js" type="text/javascript"></script>
    </body>

</html>