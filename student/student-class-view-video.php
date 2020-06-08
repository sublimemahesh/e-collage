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
                                 
                                <div class="tab-content">
                          
                                        
                                            <div class="animated"> 
                                                <div class="middle-area" id="count_section"  >
                                                   
                                                    <?php
                                                    foreach ($PERIOD as $key => $date) {

                                                        $date_start = $date->format("M d, Y");
                                                        $date_start_2 = $date->format("Y-m-d");

                                                        $date = $date_start . ' ' . substr($LECTURE_CLASS->start_time, 0, 5);

                                                        if ($date_start_2 . $LECTURE_CLASS->start_time >= $today_time) {
                                                            ?> 

                                                            <iframe width="100%" height="560" src="https://www.youtube.com/embed/WXVqho_CahQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                            <?php
                                                            break;
                                                        }
                                                    }
                                                    ?>
                                               
                                        </div>
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