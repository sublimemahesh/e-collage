<!DOCTYPE html>
<?php
include '../class/include.php';
include_once(dirname(__FILE__) . '/auth.php');

$id = '';
$id = $_GET['id'];
$LECTURE_CLASS = new LectureClass($id);

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
        <title>Schedule Class - Ecollage.lk</title>
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
        <meta property="og:url" content="http://demo.madebytilde.com/elephant">
        <meta property="og:type" content="website">
        <meta property="og:image" content="../../elephant.html">
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
        <link href="css/jm.spinner.css" rel="stylesheet" type="text/css"/>


    </head>
    <body class="layout layout-header-fixed">
        <div class="box"></div>

        <?php include './top-header.php'; ?>
        <div class="layout-main">
            <?php include './navigation.php'; ?>
            <div class="layout-content">
                <div class="layout-content-body"> 
                    <div class="row">
                        <div class="col-md-12 " style="margin-top: 25px;">
                            <div class="col-md-12 text-center" style="padding: 10px;border-bottom: 1px solid #bfbcbc;">
                                <h3>Manage <span class="text-success"><?php echo $LECTURE_CLASS->name ?></span> Class Documents - <?php echo $LECTURE_CLASS->start_date ?></h3>
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
                                        <form class="demo-form-wrapper card " style="padding: 50px" id="form-data">
                                            <div class="form form-horizontal">
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label " for="name" style="text-align: left">Video Title: </label>
                                                    <div class="col-sm-10">
                                                        <input id="name" name="name" class="form-control  " type="file"  placeholder="Enter Video Title name "   >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label " for="name" style="text-align: left">Video URL: </label>
                                                    <div class="col-sm-10">
                                                        <input id="name" name="name" class="form-control  " type="text"  placeholder="Enter Video URL "   >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label " for="name" style="text-align: left">Select Date: </label>
                                                    <div class="col-sm-10">

                                                        <select  class="custom-select" id="date" name="date" required="">
                                                            <option value="">-- Select schedule date -- </option>
                                                            <?php
                                                            foreach ($PERIOD as $date) {
                                                                ?>
                                                                <option value="<?php echo $date->format("Y-m-d"); ?>"><?php echo $date->format("Y-m-d "); ?></option>   
                                                                <?php
                                                            }
                                                            ?> 
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-md-3"></div> 
                                                    <div class="col-md-3"></div> 
                                                    <div class="col-md-4"></div> 
                                                    <div class="col-md-2">  
                                                        <input type="hidden"  name="update">
                                                        <input type="hidden"  name="id"  value="<?php echo $id ?>" >
                                                        <input type="submit" class="btn btn-primary btn-block"   value="Add" id="update" >
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                    <div class="tab-pane fade" id="past_lesson">
                                        <?php
                                        foreach ($PERIOD as $date) {
                                            $date_f = $date->format("Y-m-d");
                                            ?>

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
                                        <form class="demo-form-wrapper card " style="padding: 50px" id="form-mcq">
                                            <div class="form form-horizontal"> 
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label " for="name" style="text-align: left"> Title: </label>
                                                    <div class="col-sm-10">
                                                        <input id="title" name="title" class="form-control  " type="text"  placeholder="Enter Title "   >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label " for="name" style="text-align: left">MCQ Papers: </label>
                                                    <div class="col-sm-10">
                                                        <input id="pdf_file" name="pdf_file" class="form-control  " type="file"   >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label " for="name" style="text-align: left">Select Date: </label>
                                                    <div class="col-sm-10">

                                                        <select  class="custom-select" id="date" name="date" required="">
                                                            <option value="">-- Select schedule date -- </option>
                                                            <?php
                                                            foreach ($PERIOD as $date) {
                                                                ?>
                                                                <option value="<?php echo $date->format("Y-m-d"); ?>"><?php echo $date->format("Y-m-d "); ?></option>   
                                                                <?php
                                                            }
                                                            ?> 
                                                        </select> 
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-3"></div> 
                                                    <div class="col-md-3"></div> 
                                                    <div class="col-md-4"></div> 
                                                    <div class="col-md-2">  
                                                        <input type="hidden"  name="create-mcq">
                                                        <input type="hidden"  name="lecture_id"  value="<?php echo $_SESSION['id'] ?>" >
                                                        <input type="submit" class="btn btn-primary btn-block"   value="Add" id="create-mcq" >
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
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
                                                            foreach ($LECTURE_MCQ->getMcqByLecture($_SESSION['id']) as $lecture_mcq) {
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
                                        <form class="demo-form-wrapper card " style="padding: 50px" id="form-tutorials">
                                            <div class="form form-horizontal">

                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label " for="name" style="text-align: left"> Title: </label>
                                                    <div class="col-sm-10">
                                                        <input id="title_1" name="title" class="form-control" type="text"  placeholder="Enter Title "   >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label " for="pdf_file" style="text-align: left">MCQ Papers: </label>
                                                    <div class="col-sm-10">
                                                        <input id="pdf_file_1" name="pdf_file" class="form-control  " type="file"   >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label " for="name" style="text-align: left">Select Date: </label>
                                                    <div class="col-sm-10">
                                                        <select  class="custom-select" id="date_1" name="date" >
                                                            <option value="">-- Select schedule date -- </option>
                                                            <?php
                                                            foreach ($PERIOD as $date) {
                                                                ?>
                                                                <option value="<?php echo $date->format("Y-m-d"); ?>"><?php echo $date->format("Y-m-d"); ?></option>   
                                                                <?php
                                                            }
                                                            ?> 
                                                        </select> 
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-md-3"></div> 
                                                    <div class="col-md-3"></div> 
                                                    <div class="col-md-4"></div> 
                                                    <div class="col-md-2">  
                                                        <input type="hidden"  name="create-tutorials">
                                                        <input type="hidden"  name="lecture_id"  value="<?php echo $_SESSION['id'] ?>" >
                                                        <input type="submit" class="btn btn-primary btn-block"   value="Add" id="create-tutorial" >
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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
                                                    foreach ($LECTURE_TUTORIALS->getTutorialsByLecture($_SESSION['id']) as $lecture_tutorials) {
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
                                        <form class="demo-form-wrapper card " style="padding: 50px" id="form-assessment">
                                            <div class="form form-horizontal">

                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label " for="name" style="text-align: left"> Title: </label>
                                                    <div class="col-sm-10">
                                                        <input id="title_2" name="title" class="form-control" type="text"  placeholder="Enter Title "   >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label " for="pdf_file" style="text-align: left">Assessment Papers: </label>
                                                    <div class="col-sm-10">
                                                        <input id="pdf_file_2" name="pdf_file" class="form-control  " type="file"   >
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-sm-2 control-label " for="name" style="text-align: left">Select Date: </label>
                                                    <div class="col-sm-10">

                                                        <select  class="custom-select" id="date_2" name="date"  >
                                                            <option value="">-- Select schedule date -- </option>
                                                            <?php
                                                            foreach ($PERIOD as $date) {
                                                                ?>
                                                                <option value="<?php echo $date->format("Y-m-d"); ?>"><?php echo $date->format("Y-m-d"); ?></option>   
                                                                <?php
                                                            }
                                                            ?> 
                                                        </select> 
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-3"></div> 
                                                    <div class="col-md-3"></div> 
                                                    <div class="col-md-4"></div> 
                                                    <div class="col-md-2">  
                                                        <input type="hidden"  name="create-assessment">
                                                        <input type="hidden"  name="lecture_id"  value="<?php echo $_SESSION['id'] ?>" >
                                                        <input type="submit" class="btn btn-primary btn-block"   value="Add" id="create-assessment" >
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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
                                                    foreach ($LECTURE_ASSESSMENT->getAssessmentByLecture($_SESSION['id']) as $lecture_assessment) {
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
            <?php include './footer.php'; ?>
        </div>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/vendor.min.js"></script>
        <script src="js/elephant.min.js"></script>
        <script src="js/application.min.js"></script>
        <script src="js/demo.min.js"></script>
        <script src="js/sweetalert.min.js" type="text/javascript"></script>
        <script src="ajax/js/schedule-class.js" type="text/javascript"></script>
        <script src="delete/js/lecture-mcq.js" type="text/javascript"></script>
        <script src="delete/js/lecture-tutorial.js" type="text/javascript"></script>
        <script src="delete/js/lecture-assessment.js" type="text/javascript"></script>
        <script src="js/jm.spinner.js" type="text/javascript"></script>
    </body>

</html>