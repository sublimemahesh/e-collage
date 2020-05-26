<!DOCTYPE html>
<?php
include '../class/include.php';
include_once(dirname(__FILE__) . '/auth.php');
?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Manage Select My Class - Ecollage.lk   </title>
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <meta property="og:url" content="http://demo.madebytilde.com/elephant">
        <meta property="og:type" content="website">
        <meta property="og:image" content="../../elephant.html">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@madebytilde">
        <meta name="twitter:creator" content="@madebytilde">
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
        <link rel="stylesheet" href="css/demo.min.css">
        <link href="css/sweetalert.css" rel="stylesheet" type="text/css"/>

    </head>
    <body class="layout layout-header-fixed">
        <?php include './top-header.php'; ?>
        <div class="layout-main">
            <?php include './navigation.php'; ?>
            <div class="layout-content">
                <div class="layout-content-body">  
                    <div class="row gutter-xs">
                        <?php
                        $STUDENT_REGISTRATION = new StudentRegistration(NULL);
                        foreach ($STUDENT_REGISTRATION->getStudentByStudentId($_SESSION['id']) as $student_registration) {
                            $LECTURE = new Lecture($student_registration['lecture_id']);
                            ?> 
                            <div class="col-md-3">
                                <div class="card ">
                                    <div class="card-image">
                                        <a class="card-link" href="student-class-view.php?id=<?php echo $student_registration['id'] ?>">
                                            <?php
                                            if (empty($LECTURE->image_name)) {
                                                ?>
                                                <img class="card-img-top img-responsive" src="img/member.jpg" alt=""<?php echo $LECTURE->full_name ?>" style="width: 100%">
                                            <?php } else { ?>
                                                <img class="card-img-top img-responsive" src="upload/lecture/profile/<?php echo $LECTURE->image_name ?>" alt="<?php echo $LECTURE->full_name ?>" style="width: 100%">
                                            <?php } ?>
                                        </a> 
                                    </div>

                                    <div class="card-body">
                                        <div class="overlay-content overlay-top text-center" style="margin-top: -43px;">
                                            <span class="label label-success " style="font-size: 16px;border-radius: 0px;"> 
                                                <?php
                                                $LECTURE_CLASS = new LectureClass($student_registration['lecture_id']);

                                                $EDUCATIN_SUBJECT = new EducationSubject($LECTURE_CLASS->subject_id);
                                                echo $EDUCATIN_SUBJECT->name;
                                                ?>
                                            </span>
                                        </div>
                                        <h3 class="card-title text-center" style="margin-top: 10px"><?php echo $LECTURE->full_name ?></h3>

                                        <?php if ($LECTURE->education_level == 1) { ?> 
                                            <h6 class="card-subtitle text-center">Doctorate / ආචාර්ය උපාධිය</h6>
                                        <?php } else if ($LECTURE->education_level == 2) { ?> 
                                            <h6 class="card-subtitle text-center">Master's degree or Postgraduate / පශ්චාත් උපාධිය</h6>
                                        <?php } else if ($LECTURE->education_level == 3) { ?> 
                                            <h6 class="card-subtitle text-center">Bachelor's degree / උපාධිය</h6>
                                        <?php } else if ($LECTURE->education_level == 4) { ?>   
                                            <h6 class="card-subtitle text-center">Graduate Teacher / උපාධිධාරී ගුරු</h6>
                                        <?php } else if ($LECTURE->education_level == 5) { ?>   
                                            <h6 class="card-subtitle text-center">Trainee Teacher / පුහුණු ගුරු</h6>
                                        <?php } else if ($LECTURE->education_level == 6) { ?>   
                                            <h6 class="card-subtitle text-center">Diploma / ඩිප්ලෝමා</h6>
                                        <?php } else if ($LECTURE->education_level == 7) { ?>   
                                            <h6 class="card-subtitle text-center">Certificate / සහතිකපත්</h6>
                                        <?php } else if ($LECTURE->education_level == 8) { ?>   
                                            <h6 class="card-subtitle text-center">Professional / වෘත්තීමය</h6>
                                        <?php } else if ($LECTURE->education_level == 9) { ?>   
                                            <h6 class="card-subtitle text-center">Other / වෙනත්</h6>
                                        <?php } ?>    

                                        <div class="row" style="margin-top: 10px;margin-bottom: 10px;">
                                            <div class="col-md-5" style="padding-right: 0px;">
                                                <a class="link-muted" href="#">
                                                    <span class="icon icon-group icon-1x"></span> -  9 Sessions
                                                </a>
                                            </div>

                                            <div class="col-md-7" style="padding: 0px;">
                                                <a class="link-muted" href="#">
                                                    <span class="icon icon-calendar icon-1x"></span> -   14 Hours
                                                </a>
                                            </div>
                                        </div>

                                        <a class="card-link" href="student-class-view.php?id=<?php echo $student_registration['id'] ?>">
                                            <center>
                                                <p class="btn btn-success btn-block" style="width: 80%" > Enter Your Class
                                                </p>
                                            </center> 
                                        </a>
                                    </div>
                                </div>
                            </div> 
                            <?php
                        }
                        ?>

                    </div> 
                </div>
            </div>
            <?php include './footer.php'; ?>
        </div>

        <script src="js/vendor.min.js"></script>
        <script src="js/elephant.min.js"></script>
        <script src="js/application.min.js"></script>
        <script src="js/demo.min.js"></script>
        <script src="js/sweetalert.min.js" type="text/javascript"></script>
        <script src="ajax/js/check-login.js" type="text/javascript"></script>

    </body>

</html>