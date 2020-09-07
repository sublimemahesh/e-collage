<?php
include '../class/include.php';
include './auth.php';
$id = '';
$id = $_GET['id'];
$QUESTION = new LessonQuestion($id);
$options = LessonQuestionOption::getOptionsByQuestionId($id);

$LECTURE_CLASS = new LectureClass($QUESTION->class);

$begin = new DateTime($LECTURE_CLASS->start_date);
$date = new DateTime($LECTURE_CLASS->start_date);
date_default_timezone_set("Asia/Calcutta");
$today = date('Y-m-d');

$days = ($LECTURE_CLASS->modules * 7);
$end = $date->modify('+' . $days . ' day');
$interval = DateInterval::createFromDateString('7 day');
$PERIOD = new DatePeriod($begin, $interval, $end);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ecollege.lk - Edit Question </title>
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
    <link href="css/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/demo.min.css">
    <link href="css/jm.spinner.css" rel="stylesheet" type="text/css" />
    <style>
        .profile-pic {
            position: relative;
            display: inline-block;
        }


        .fa-color {

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
            <div class="layout-content-body">
                <div class="row gutter-xs">
                    <div class="col-xs-12">
                    </div>
                </div>
                <div class="row gutter-xs">
                    <div class="col-xs-12">
                        <div class="row">

                            <div class="col-md-12">

                                <div class="card">
                                    <div class="card-header">
                                        <strong>Edit Question</strong>
                                    </div>
                                </div>
                                <form class="demo-form-wrapper card " style="padding: 50px" id="edit-form-question">
                                    <div class="form form-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label " for="name" style="text-align: left">Select Date: </label>
                                            <div class="col-sm-10">

                                                <select class="custom-select" id="date" name="date" required="">
                                                    <option value="">-- Select schedule date -- </option>
                                                    <?php
                                                    foreach ($PERIOD as $date) {
                                                        $selected = '';
                                                        if ($date->format("Y-m-d") == $QUESTION->date) {
                                                            $selected = 'selected';
                                                        }
                                                    ?>
                                                        <option value="<?php echo $date->format("Y-m-d"); ?>" <?= $selected; ?>><?php echo $date->format("Y-m-d "); ?></option>
                                                    <?php

                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label " for="name" style="text-align: left"> Question: </label>
                                            <div class="col-sm-10">
                                                <input id="question" name="question" class="form-control" type="text" placeholder="Enter Question " value="<?= $QUESTION->question; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-2 control-label " for="name" style="text-align: left"> Option A: </label>
                                            <div class="col-sm-10">
                                                <input id="option-a" name="option_a" class="form-control" type="text" placeholder="Enter Option A " value="<?= $options['option_A']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label " for="name" style="text-align: left"> Option B: </label>
                                            <div class="col-sm-10">
                                                <input id="option-b" name="option_b" class="form-control  " type="text" placeholder="Enter Option B " value="<?= $options['option_B']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label " for="name" style="text-align: left"> Option C: </label>
                                            <div class="col-sm-10">
                                                <input id="option-c" name="option_c" class="form-control  " type="text" placeholder="Enter Option C " value="<?= $options['option_C']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label " for="name" style="text-align: left"> Option D: </label>
                                            <div class="col-sm-10">
                                                <input id="option-d" name="option_d" class="form-control  " type="text" placeholder="Enter Option D " value="<?= $options['option_D']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label " for="name" style="text-align: left"> Option E: </label>
                                            <div class="col-sm-10">
                                                <input id="option-e" name="option_e" class="form-control  " type="text" placeholder="Enter Option E " value="<?= $options['option_E']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label " for="name" style="text-align: left">Correct Answer: </label>
                                            <div class="col-sm-10">

                                                <select class="custom-select" id="correct-answer" name="correct_answer" required="">
                                                    <option value="">-- Select correct answer -- </option>
                                                    <?php
                                                    if ($options['correct_answer'] == 'A') {
                                                    ?>
                                                        <option value="A" selected>A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="E">E</option>
                                                    <?php
                                                    } elseif ($options['correct_answer'] == 'B') {
                                                    ?>
                                                        <option value="A">A</option>
                                                        <option value="B" selected>B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="E">E</option>
                                                    <?php
                                                    } elseif ($options['correct_answer'] == 'C') {
                                                    ?>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C" selected>C</option>
                                                        <option value="D">D</option>
                                                        <option value="E">E</option>
                                                    <?php
                                                    } elseif ($options['correct_answer'] == 'D') {
                                                    ?>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D" selected>D</option>
                                                        <option value="E">E</option>
                                                    <?php
                                                    } elseif ($options['correct_answer'] == 'E') {
                                                    ?>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="E" selected>E</option>
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
                                                <input type="hidden" name="edit-question">
                                                <input type="hidden" name="class_id" value="<?php echo $QUESTION->class; ?>">
                                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                                <input type="hidden" name="option_id" value="<?php echo $options['id']; ?>">
                                                <input type="submit" class="btn btn-primary btn-block" value="Edit" id="edit-question">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/vendor.min.js"></script>
    <script src="js/elephant.min.js"></script>
    <script src="js/application.min.js"></script>
    <script src="js/profile.min.js"></script>
    <script src="js/sweetalert.min.js" type="text/javascript"></script>
    <script src="js/demo.min.js"></script>

    <script src="ajax/js/schedule-class.js" type="text/javascript"></script>
    <script src="ajax/js/category.js" type="text/javascript"></script>
    <script src="ajax/js/lecture_subject.js" type="text/javascript"></script>
    <script src="delete/js/lecture-subject.js" type="text/javascript"></script>
    <script src="js/jm.spinner.js" type="text/javascript"></script>
</body>

</html>