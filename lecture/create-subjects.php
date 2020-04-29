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
         <link rel="stylesheet" href="css/demo.min.css">
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
                        <div class="col-md-1"></div>
                        <div class="col-md-10"> 

                            <form class="demo-form-wrapper card " style="padding: 50px" id="form-data">
                                <div class="form form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="email">Category: </label>
                                        <div class="col-sm-10">
                                            <select  class="custom-select" id="category" name="category" required="">
                                                <option value="">-- Select your Category -- </option>
                                                <?php
                                                foreach (EducationCategory::all() as $education_category) {
                                                    ?>

                                                    <option value="<?php echo $education_category['id']; ?>"       ><?php echo $education_category['name']; ?></option>   
                                                    <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="sub_category">Sub Category: </label>
                                        <div class="col-sm-10">
                                            <select class="custom-select" name="sub_category" id="sub_category">
                                                <option value="" selected=""> -- Please Select Category First --</option>   
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="subject">Subject: </label>
                                        <div class="col-sm-10">
                                            <select class="custom-select" name="subject" id="subject">
                                                <option value="" selected=""> -- Please Select Sub Category First --</option>   
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



                            <div class="layout-content-body">
                                <div class="card">
                                    <div class="card-header">

                                        <strong>  Manage Your Subjects</strong>
                                    </div>
                                    <div class="card-body">
                                        <table id="demo-datatables-responsive-2" class="table table-bordered table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>id</th>
                                                    <th>Category</th>
                                                    <th>Sub Category</th>
                                                    <th>Subject</th>
                                                    <th>Option</th> 
                                                    <th>Option</th> 
                                                    <th>Option</th> 
                                                    <th>Option</th> 
                                                   
                                                 
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tiger</td>
                                                    <td>Nixon</td>
                                                    <td>System Architect</td>
                                                    <td>Edinburgh</td>
                                                    <td>61</td> 
                                                    <td>61</td> 
                                                    <td>61</td> 
                                                    <td>61</td> 
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-1"></div>
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
        <script src="js/demo.min.js"></script>
        <script src="ajax/js/lecture.js" type="text/javascript"></script>
        <script src="ajax/js/check-login.js" type="text/javascript"></script>

        <script src="ajax/js/category.js" type="text/javascript"></script>
    </body>

</html>