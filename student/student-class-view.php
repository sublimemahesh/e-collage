<!DOCTYPE html>
<?php
include '../class/include.php';
include_once(dirname(__FILE__) . '/auth.php');
$id = $_GET['id'];
$STUDENT_REGISTRATION = new StudentRegistration($id);
$LECTURE_CLASS = new LectureClass($STUDENT_REGISTRATION->class_id);
$LECTURE = new Lecture($STUDENT_REGISTRATION->lecture_id);
?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ecollege.lk - Student Class View  </title>
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
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
    </head>
    <body class="layout layout-header-fixed">
        <?php include './top-header.php'; ?>
        <div class="layout-main">
            <?php include './navigation.php'; ?>
            <div class="layout-content">
                <div class="layout-content-body">
                    <div class="row">
                        <div class="col-md-12"style="margin-top: 15px;">
                            <div class="col-md-12">
                                <h3 style="text-align: center">  <span class="text-success"><?php echo ucfirst($LECTURE_CLASS->name) ?></span> -   <?php echo $LECTURE->full_name ?> </h3>
                            </div>
                            <div class="panel m-b-lg">
                                <ul class="nav nav-tabs nav-justified">
                                    <li class="active"><a href="#home" data-toggle="tab">Class Room</a></li>
                                    <li><a href="#past_lesson" data-toggle="tab">Pass Lesson</a></li>
                                    <li><a href="#mcq_papers" data-toggle="tab">MCQ Papers</a></li>
                                    <li><a href="#tutorials" data-toggle="tab">Tutorials</a></li>
                                    <li><a href="#assignment" data-toggle="tab">Assignment</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="home">
                                        <div class="col-lg-12 col-sm-12 grid-margin " style="margin-top:30px">
                                            <div class="col-md-12">
                                                <div class="box-shadow">

                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="past_lesson">
                                        <div class="col-lg-12 col-sm-12 grid-margin " style="margin-top:30px">
                                            <h4 class="card-title">A/L CHEMISTRY  2020  / Enroll ID: 35</h4>
                                            <div class="card">
                                                <div class="box-shadow">
                                                    <div class="card-header">
                                                        <h5>
                                                            <a href="#" >
                                                                Chemical Equilibrium Part 3 <small> (2020-05-16 )</small>
                                                                <span class="fas-fa fa-chevron-down"> 
                                                                </span> 
                                                            </a>
                                                        </h5>
                                                        <hr>
                                                        <div>
                                                            <h5 style="padding:5px;"> සමතුලිතතාව   3වන කොටස </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                    </div>

                                    <div class="tab-pane fade" id="mcq_papers">
                                        <div class="card">
                                            <div class="box-shadow">
                                                <div class="card-header">
                                                    <h5>
                                                        <a  href="#" >
                                                            View MCQ Papers<small> ( <?php echo $LECTURE_CLASS->start_date ?> )</small>
                                                            <span class="fas-fa fa-chevron-down"> 
                                                            </span> 
                                                        </a>
                                                    </h5>
                                                    <hr>
                                                    <?php
                                                    $LECTURE_MCQ = new LectureMcq(NULL);
                                                    foreach ($LECTURE_MCQ->getMcqByLecture($LECTURE_CLASS->id) as $lecture_mcq) {
                                                        ?>

                                                        <div class="file" id="div<?php echo $lecture_mcq['id'] ?>">
                                                            <a href="../upload/class/mcq/<?php echo $lecture_mcq['file_name'] ?>" target="_blank" class="file-link" title="file-name.pdf">
                                                                <div class="file-thumbnail file-thumbnail-pdf">

                                                                </div>
                                                                <div class="file-info">
                                                                    <h5 style="padding:5px;"> <?php echo $lecture_mcq['title'] ?></h5>   
                                                                </div>

                                                            </a>

                                                            <button class="file-delete-btn delete delete-mcq" data-id=" <?php echo $lecture_mcq['id'] ?>" title="Delete" type="button">
                                                                <span class="icon icon-remove"></span> 
                                                            </button>
                                                        </div>

                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="tab-pane fade" id="tutorials">
                                        <div class="card">
                                            <div class="box-shadow">
                                                <div class="card-header">
                                                    <h5>
                                                        <a  href="#" >
                                                            View Lecture Tutorials <small> ( <?php echo $LECTURE_CLASS->start_date ?> )</small>
                                                            <span class="fas-fa fa-chevron-down"> 
                                                            </span> 
                                                        </a>
                                                    </h5>
                                                    <hr>
                                                    <?php
                                                    $LECTURE_TUTORIALS = new LectureTutorial(NULL);
                                                    foreach ($LECTURE_TUTORIALS->getTutorialsByLecture($LECTURE_CLASS->id) as $lecture_tutorials) {
                                                        ?>

                                                        <div class="file" id="div<?php echo $lecture_tutorials['id'] ?>">
                                                            <a href="../upload/class/tutorials/<?php echo $lecture_tutorials['file_name'] ?>" target="_blank" class="file-link" title="file-name.pdf">
                                                                <div class="file-thumbnail file-thumbnail-pdf">

                                                                </div>
                                                                <div class="file-info">
                                                                    <h5 style="padding:5px;"> <?php echo $lecture_tutorials['title'] ?></h5>   
                                                                </div>

                                                            </a>

                                                            <button class="file-delete-btn delete delete-tutorials" data-id=" <?php echo $lecture_tutorials['id'] ?>" title="Delete" type="button">
                                                                <span class="icon icon-remove"></span> 
                                                            </button>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="assignment">
                                        <?php
                                        $LECTURE_ASSESSMENT = new LectureAssessment(NULL);
                                        foreach ($LECTURE_ASSESSMENT->getAssessmentByLecture($LECTURE_CLASS->id) as $lecture_assessment) {
                                            ?>
                                            <div class="col-md-4 card " style="padding: 10px;margin: 10px;" id="div_3<?php echo $lecture_assessment['id'] ?>">
                                                <div class="text-center">
                                                    <p>
                                                        <?php echo $lecture_assessment['title'] ?> 
                                                    </p> 
                                                    <a href="../upload/class/assessment/<?php echo $lecture_assessment['file_name'] ?>" target="_blank"  class="btn btn-success  " style="margin-bottom: 10px;">  VIEW ASSIGNMENT </a>  

                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>


                            </div>
                        </div>              
                    </div>            
                </div>
            </div>
        </div>
        <?php include './footer.php'; ?>
    </div>

    <script src="js/vendor.min.js"></script>
    <script src="js/elephant.min.js"></script>
    <script src="js/application.min.js"></script>
    <script src="js/demo.min.js"></script>
    <script src="ajax/js/check-login.js" type="text/javascript"></script>>
</body>

</html>