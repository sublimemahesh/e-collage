<!DOCTYPE html>
<?php
include '../class/include.php';
include_once(dirname(__FILE__) . '/auth.php');
$id = $_GET['id'];
$STUDENT_REGISTRATION = new StudentRegistration($id);
$LECTURE_CLASS = new LectureClass($STUDENT_REGISTRATION->class_id);
$LECTURE = new Lecture($STUDENT_REGISTRATION->lecture_id);

date_default_timezone_set("Asia/Calcutta");
$today_time = date('Y-m-d H:i:A');


//set start time
$start_time = $LECTURE_CLASS->start_date . ' ' . $LECTURE_CLASS->start_time;

$begin = new DateTime($LECTURE_CLASS->start_date);
$date = new DateTime($LECTURE_CLASS->start_date);
$days = ($LECTURE_CLASS->modules * 7);

$end = $date->modify('+' . $days . ' day');
$interval = DateInterval::createFromDateString('7 day');
$PERIOD = new DatePeriod($begin, $interval, $end);
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
        <link href="css/sweetalert.css" rel="stylesheet" type="text/css"/>
        <link href="css/simplelightbox.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/jm.spinner.css" rel="stylesheet" type="text/css"/>

        <link rel="stylesheet" href="assets/css/jquery.classycountdown.min.css"> 
        <link rel="stylesheet" href="assets/css/main.css"> 
        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    </head>
    <body class="layout layout-header-fixed">
        <div class="box"></div>
        <?php include './top-header.php'; ?>
        <div class="layout-main">
            <?php include './navigation.php'; ?>
            <div class="layout-content">
                <div class="layout-content-body">
                    <div class="row">
                        <div class="col-md-12"style="margin-top: 15px;">
                            <div class="col-md-12">
                                <h3 style="text-align: center">  <span class="text-success"> 
                                        <?php echo ucfirst($LECTURE_CLASS->name) ?></span> -   <?php echo $LECTURE->full_name ?> </h3>
                            </div>

                            <div class="panel m-b-lg">
                                <ul class="nav nav-tabs nav-justified">
                                    <li class="active"><a href="#home" data-toggle="tab">Class Room</a></li>
                                    <li><a href="#past_lesson" data-toggle="tab">Pass Lesson</a></li> 
                                    <li><a href="#mcq_papers" data-toggle="tab">MCQ Papers</a></li> 
                                    <li><a href="#tutorials" data-toggle="tab">Tutorials</a></li> 
                                    <li><a href="#assignment" data-toggle="tab">Assignment</a></li> 
                                    <li><a href="#home_work" data-toggle="tab">Home Work</a></li> 
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="home"> 
                                        <div id="wrapper" class="white">
                                            <div class="animated"> 
                                                <div class="middle-area">
                                                    <h4 class="text-center text-danger"><b>WAITING FOR YOUR NEXT CLASS SESSION..!</b></h4>
                                                    <?php
                                                    foreach ($PERIOD as $key => $date) {

                                                        $date_start = $date->format("M d, Y");
                                                        $date_start_2 = $date->format("Y-m-d");

                                                        $date = $date_start . ' ' . substr($LECTURE_CLASS->start_time, 0, 5);

                                                        if ($date_start_2 . $LECTURE_CLASS->start_time >= $today_time) {
                                                            ?> 

                                                            <div class="countdown"  data-end="<?php echo $date ?>"></div>
                                                            <?php
                                                            break;
                                                        }
                                                    }
                                                    ?>
                                                </div>

                                            </div>  
                                        </div>
                                    </div> 
                                    <div class="tab-pane fade" id="past_lesson">
                                        <?php
                                        foreach ($PERIOD as $date) {
                                            $date_Start = $date->format("Y-m-d");
                                            ?>
                                            <input type="hidden" class="date_view" value="<?php echo $date_Start . ' ' . substr($LECTURE_CLASS->start_time, 0, 5) ?>" >
                                            <div class="card">
                                                <a href="# "class="   card-toggler" title="Collapse">  
                                                    <div class="card-header  ">
                                                        <div class="col-md-8">
                                                            <h5>
                                                                View Previous - <span class="text-success" ><b>( <?php echo $date_Start ?> ) </b></span>
                                                                <span class="fas-fa fa-chevron-down">   </span> 
                                                            </h5>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class=" icon icon-angle-down pull-right f-right"></span>
                                                        </div> 
                                                    </div>
                                                </a> 

                                                <div class="card-body" style="display: none;">
                                                    <hr style="margin: 0px 0px 20px 0px;">
                                                    <iframe width="100%" height="500" src="https://www.youtube.com/embed/h04Hj6sb1qg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                            </div>  
                                        <?php } ?>


                                    </div>
                                    <div class="tab-pane fade" id="mcq_papers">

                                        <div class="row gutter-xs">
                                            <div class="col-md-12">
                                                <?php
                                                foreach ($PERIOD as $date) {
                                                    $date_Start = $date->format("Y-m-d");
                                                    ?>
                                                    <div class="card"> 
                                                        <a href="# "class="   card-toggler" title="Collapse">  
                                                            <div class="card-header  ">
                                                                <div class="col-md-8">
                                                                    <h5>
                                                                        Manage MCQ Papers  - <span class="text-success" ><b>( <?php echo $date_Start ?> ) </b></span>
                                                                        <span class="fas-fa fa-chevron-down">   </span> 
                                                                    </h5>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <span class=" icon icon-angle-down pull-right f-right"></span>
                                                                </div> 
                                                            </div>
                                                        </a> 

                                                        <div class="card-body" style="display: none;">
                                                            <hr style="margin: 0px 0px 20px 0px;">
                                                            <?php
                                                            $LECTURE_MCQ = new LectureMcq(NULL);
                                                            foreach ($LECTURE_MCQ->getMcqByLecture($STUDENT_REGISTRATION->lecture_id) as $lecture_mcq) {
                                                                if ($date_Start == $lecture_mcq['date']) {
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

                                                                    <?php
                                                                }
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                                ?> 

                                            </div> 
                                        </div>  
                                    </div>
                                    <div class="tab-pane fade" id="tutorials"> 
                                        <?php
                                        foreach ($PERIOD as $date) {
                                            $date_Start = $date->format("Y-m-d");
                                            ?>
                                            <div class="card">
                                                <a href="# "class="   card-toggler" title="Collapse">  
                                                    <div class="card-header  ">
                                                        <div class="col-md-8">
                                                            <h5>
                                                                Manage Tutorials Papers   - <span class="text-success" ><b>( <?php echo $date_Start ?> ) </b></span>
                                                                <span class="fas-fa fa-chevron-down">   </span> 
                                                            </h5>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class=" icon icon-angle-down pull-right f-right"></span>
                                                        </div> 
                                                    </div>
                                                </a> 

                                                <div class="card-body" style="display: none;">
                                                    <hr style="margin: 0px 0px 20px 0px;">

                                                    <?php
                                                    $LECTURE_TUTORIALS = new LectureTutorial(NULL);
                                                    foreach ($LECTURE_TUTORIALS->getTutorialsByLecture($STUDENT_REGISTRATION->lecture_id) as $lecture_tutorials) {
                                                        if ($date_Start == $lecture_tutorials['date']) {
                                                            ?>

                                                            <div class="file" id="div_2<?php echo $lecture_tutorials['id'] ?>">
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

                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                            </div>                                                                                    
                                        <?php } ?>
                                    </div> 
                                    <div class="tab-pane fade" id="assignment">
                                        <?php
                                        foreach ($PERIOD as $date) {
                                            $date_Start = $date->format("Y-m-d");
                                            ?>

                                            <div class="card">
                                                <a href="# "class="   card-toggler" title="Collapse">  
                                                    <div class="card-header  ">
                                                        <div class="col-md-8">
                                                            <h5>
                                                                Manage Assessment   - <span class="text-success" ><b>( <?php echo $date_Start ?> ) </b></span>
                                                                <span class="fas-fa fa-chevron-down">   </span> 
                                                            </h5>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <span class=" icon icon-angle-down pull-right f-right"></span>
                                                        </div> 
                                                    </div>
                                                </a> 

                                                <div class="card-body" style="display: none;">
                                                    <hr style="margin: 0px 0px 20px 0px;">

                                                    <?php
                                                    $LECTURE_ASSESSMENT = new LectureAssessment(NULL);
                                                    foreach ($LECTURE_ASSESSMENT->getAssessmentByLecture($STUDENT_REGISTRATION->lecture_id) as $lecture_assessment) {
                                                        if ($date_Start == $lecture_assessment['date']) {
                                                            ?>
                                                            <div class="col-md-4 card " style="padding: 10px;margin: 10px;" id="div_3<?php echo $lecture_assessment['id'] ?>">
                                                                <div class="text-center">
                                                                    <p>
                                                                        <?php echo $lecture_assessment['title'] ?> 
                                                                    </p> 
                                                                    <a href="../upload/class/assessment/<?php echo $lecture_assessment['file_name'] ?>" target="_blank"  class="btn btn-success  " style="margin-bottom: 10px;">  VIEW ASSIGNMENT </a> | 
                                                                    <a href="#" class="delete-lecture-assessment btn btn-sm btn-danger"  data-id="<?php echo $lecture_assessment['id'] ?>" style="margin-top: -8px;"><i class="waves-effect icon icon-trash" data-type="cancel"></i></a> 

                                                                </div>
                                                            </div>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                            </div>  
                                        <?php } ?>
                                    </div> 
                                    <div class="tab-pane fade" id="home_work">
                                        <form class="demo-form-wrapper card " style="padding: 50px" id="form-data">
                                            <div class="form form-horizontal"> 
                                                <div class="form-group">
                                                    <label class="col-sm-1 control-label " for="name" style="text-align: left"> Title: </label>
                                                    <div class="col-sm-11">
                                                        <input id="title" name="title" class="form-control  " type="text"  placeholder="Enter Title "   >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-1 control-label " for="name" style="text-align: left">Image: </label>
                                                    <div class="col-sm-11">
                                                        <input id="image" name="image" class="form-control  " type="file"   >
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-md-3"></div> 
                                                    <div class="col-md-3"></div> 
                                                    <div class="col-md-4"></div> 
                                                    <div class="col-md-2">  
                                                        <input type="hidden"  name="create-home-work">
                                                        <input type="hidden"  name="class_id"  value="<?php echo $LECTURE_CLASS->id ?>" >
                                                        <input type="hidden"  name="student_id"  value="<?php echo $_SESSION['id'] ?>" >
                                                        <input type="submit" class="btn btn-primary btn-block"   value="Submit" id="create" >
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                        <?php
                                        $HOME_WORK = new HomeWork(NULL);
                                        foreach ($HOME_WORK->getHomeWorkByStudent($_SESSION['id']) as $home_work) {
                                            ?>
                                            <div class="col-md-4">
                                                <div class="card">
                                                    <div class="card-header  ">
                                                        <h5>
                                                            <?php echo $home_work['title'] ?>
                                                        </h5>
                                                        <div class="gallery"> 
                                                            <a href="../upload/home-work/<?php echo $home_work['image_name'] ?>" class="big">
                                                                <img src="../upload/home-work/thumb/<?php echo $home_work['image_name'] ?>" alt="<?php echo $home_work['title'] ?>" title="<?php echo $home_work['title'] ?>" />
                                                            </a>
                                                        </div>
                                                    </div> 
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

    </div>


    <script src="js/vendor.min.js"></script>
    <script src="js/elephant.min.js"></script>
    <script src="js/application.min.js"></script>
    <script src="js/demo.min.js"></script> 
    <script src="assets/js/vendor/jQuery-1.12.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.classycountdown.min.js"></script>
    <script src="assets/js/jquery.knob.js"></script>
    <script src="assets/js/jquery.throttle.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="js/sweetalert.min.js" type="text/javascript"></script>
    <script src="js/simple-lightbox.min.js" type="text/javascript"></script>
    <script src="js/jm.spinner.js" type="text/javascript"></script>

    <script src="ajax/js/check-login.js" type="text/javascript"></script>
    <script src="ajax/js/home-work.js" type="text/javascript"></script>


    <script>
        $(function () {
            var $gallery = $('.gallery a').simpleLightbox();

            $gallery.on('show.simplelightbox', function () {
                console.log('Requested for showing');
            })
                    .on('shown.simplelightbox', function () {
                        console.log('Shown');
                    })
                    .on('close.simplelightbox', function () {
                        console.log('Requested for closing');
                    })
                    .on('closed.simplelightbox', function () {
                        console.log('Closed');
                    })
                    .on('change.simplelightbox', function () {
                        console.log('Requested for change');
                    })
                    .on('next.simplelightbox', function () {
                        console.log('Requested for next');
                    })
                    .on('prev.simplelightbox', function () {
                        console.log('Requested for prev');
                    })
                    .on('nextImageLoaded.simplelightbox', function () {
                        console.log('Next image loaded');
                    })
                    .on('prevImageLoaded.simplelightbox', function () {
                        console.log('Prev image loaded');
                    })
                    .on('changed.simplelightbox', function () {
                        console.log('Image changed');
                    })
                    .on('nextDone.simplelightbox', function () {
                        console.log('Image changed to next');
                    })
                    .on('prevDone.simplelightbox', function () {
                        console.log('Image changed to prev');
                    })
                    .on('error.simplelightbox', function (e) {
                        console.log('No image found, go to the next/prev');
                        console.log(e);
                    });
        });
    </script>
</body>

</html>