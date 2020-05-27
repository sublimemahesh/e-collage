<!DOCTYPE html>
<?php
include '../class/include.php';
include_once(dirname(__FILE__) . '/auth.php');
$id = $_GET['id'];
$STUDENT_REGISTRATION = new StudentRegistration($id);
$LECTURE_CLASS = new LectureClass($STUDENT_REGISTRATION->class_id);
$LECTURE = new Lecture($STUDENT_REGISTRATION->lecture_id);

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
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade active in" id="home">

                                        <div class="row"> 
                                            <div class="col-md-3"></div>
                                            <div class="col-md-6">
                                                <div class="middle">
                                                    <h1 style="font-size:30px;text-align: center;">NEXT CLASS SESSION</h1> 
                                                    <p id="demo" class="text-danger" style="font-size:30px;text-align: center;"></p>
                                                </div>  
                                            </div>
                                            <div class="col-md-3"></div>

                                        </div> 
                                    </div>
                                    <div class="tab-pane fade" id="past_lesson">
                                        <?php
                                        foreach ($PERIOD as $date) {
                                            $date_f = $date->format("Y-m-d");
                                            ?>
                                            <input type="hidden" class="date_view" value="<?php echo $date_f . ' ' . substr($LECTURE_CLASS->start_time, 0, 5) ?>" >
                                            <div class="card">
                                                <a href="# "class="   card-toggler" title="Collapse">  
                                                    <div class="card-header  ">
                                                        <div class="col-md-8">
                                                            <h5>
                                                                View Previous - <span class="text-success" ><b>( <?php echo $date_f ?> ) </b></span>
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
                                                    $date_f = $date->format("Y-m-d");
                                                    ?>
                                                    <div class="card"> 
                                                        <a href="# "class="   card-toggler" title="Collapse">  
                                                            <div class="card-header  ">
                                                                <div class="col-md-8">
                                                                    <h5>
                                                                        Manage MCQ Papers  - <span class="text-success" ><b>( <?php echo $date_f ?> ) </b></span>
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
                                                                if ($date_f == $lecture_mcq['date']) {
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
                                            $date_f = $date->format("Y-m-d");
                                            ?>
                                            <div class="card">
                                                <a href="# "class="   card-toggler" title="Collapse">  
                                                    <div class="card-header  ">
                                                        <div class="col-md-8">
                                                            <h5>
                                                                Manage Tutorials Papers   - <span class="text-success" ><b>( <?php echo $date_f ?> ) </b></span>
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
                                                        if ($date_f == $lecture_tutorials['date']) {
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
                                            $date_f = $date->format("Y-m-d");
                                            ?>

                                            <div class="card">
                                                <a href="# "class="   card-toggler" title="Collapse">  
                                                    <div class="card-header  ">
                                                        <div class="col-md-8">
                                                            <h5>
                                                                Manage Assessment   - <span class="text-success" ><b>( <?php echo $date_f ?> ) </b></span>
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
                                                        if ($date_f == $lecture_assessment['date']) {
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
    <script src="ajax/js/check-login.js" type="text/javascript"></script>
    <script>
// Set the date we're counting down to
      
            var countDownDate = new Date('2020-05-28').getTime();

// Update the count down every 1 second
            var countdownfunction = setInterval(function () {

                // Get todays date and time
                var now = new Date().getTime();

                // Find the distance between now an the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Output the result in an element with id="demo"
                document.getElementById("demo").innerHTML = days + "<span class='text-success f-14'>Days</span>  " + hours + "<span class='text-success f-14'>Hours</span>  "
                        + minutes + "<span class='text-success f-14'>Minutes</span>  " + seconds + "<span class='text-success f-14'>Seconds</span>";

                // If the count down is over, write some text 
                if (distance < 0) {
                    clearInterval(countdownfunction);
                    document.getElementById("demo").innerHTML = "Now Start Your Class";
                }
            }, 1000);
      

    </script>
</body>

</html>