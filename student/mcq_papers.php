<?php
include '../class/include.php';
include_once(dirname(__FILE__) . '/auth.php');
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


                <div class="container-fluid">
                    <div class="row">
                        <div class="navigation"  >
                            <div class="col-md-12 " style="margin-top: 0px;">
                                <div class="student_nav">
                                    <h4 class=""> A/L CHEMISTRY  2020</h4>

                                    <ul class="nav nav-tabs nav-justified student_nav">
                                        <li class="nav-item active"><a href="./classroom.php" class="nav-link">CLASSROOM</a></li>
                                        <li ><a  href="./past_lesson.php" class="nav-link">PAST LESSONS  <sup style="font-size:0.7em;background-color:orangered;color:white;padding:0.3em;">NEW </sup> </a></li>
                                        <li ><a href="./mcq_papers.php" class="nav-link">MCQ PAPERS</a></li>
                                        <li ><a  href="./tutorial.php" class="nav-link">TUTORIALS</a></li>
                                        <li ><a href="./assignment.php" class="nav-link">ASSIGNMENTS</a></li>
                                        <!--                                    <li ><a data-toggle="tab" href="#menu3" class="nav-link">COMMENTS</a></li>-->
                                    </ul>

                                </div>
                            </div>

                        </div>

                        <div class="col-lg-12 col-sm-12 grid-margin " style="margin-top:30px">
                            <div class="card">
                               
                                <div class="card-header box-shadow" >
                                    <img class="cover-img" src="../assets/images/mcq.png" alt=""/>
                                    <div id="collapse-35" class="" role="tabpanel" aria-labelledby="heading-35" data-parent="#accordion-5" style="">
                                        <h5 style="padding:5px;"> සමතුලිතතාව   3වන කොටස </h5>
                                    </div>
                                </div>
                                    <div class="card-header box-shadow" >
                                    <img class="cover-img" src="../assets/images/mcq.png" alt=""/>
                                    <div id="collapse-35" class="" role="tabpanel" aria-labelledby="heading-35" data-parent="#accordion-5" style="">
                                        <h5 style="padding:5px;"> සමතුලිතතාව   3වන කොටස </h5>
                                    </div>
                                </div>
                                    <div class="card-header box-shadow" >
                                    <img class="cover-img" src="../assets/images/mcq.png" alt=""/>
                                    <div id="collapse-35" class="" role="tabpanel" aria-labelledby="heading-35" data-parent="#accordion-5" style="">
                                        <h5 style="padding:5px;"> සමතුලිතතාව   3වන කොටස </h5>
                                    </div>
                                </div>
                           
                            </div>
                        </div>  
                    </div>
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

    <script src="ajax/js/category.js" type="text/javascript"></script>
    <script src="ajax/js/student.js" type="text/javascript"></script>
    <script src="ajax/js/check-login.js" type="text/javascript"></script>


</body>

</html>