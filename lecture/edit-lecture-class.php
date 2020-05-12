<?php
include '../class/include.php';
include './auth.php';
$id = '';
$id = $_GET['id'];
$LECTURE_CLASS = new LectureClass($id);
?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ecollege.lk - Edit Lecture Class  </title>
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
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link href="css/jquery.timepicker.css" rel="stylesheet" type="text/css"/>

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
                <div class="layout-content-body">
                    <div class="row gutter-xs">
                        <div class="col-xs-12">
                            <?php
                            if (isset($_GET['message'])) {

                                $MESSAGE = New Message($_GET['message']);
                                ?>
                                <div class="alert alert-<?php echo $MESSAGE->status; ?>" role = "alert">
                                    <?php echo $MESSAGE->description; ?>
                                </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="row gutter-xs">
                        <div class="col-xs-12">
                            <div class="row">  
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header"> 
                                            <strong>Edit Lecture Class</strong>
                                        </div>
                                    </div>
                                    <form class="demo-form-wrapper card " style="padding: 50px" id="form-data">
                                        <div class="form form-horizontal">
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label " for="title" style="text-align: left">Class Type: </label>
                                                <div class="col-sm-10">
                                                    <select  class="custom-select" id="class_type" name="class_type" required="">
                                                        <option value="">-- Select your Class Type -- </option>
                                                        <?php
                                                        foreach (EducationCategory::all() as $education_category) {
                                                            if ($LECTURE_CLASS->class_type == $education_category['id']) {
                                                                ?> 
                                                                <option value="<?php echo $education_category['id']; ?>" selected=""><?php echo $education_category['name']; ?></option>   
                                                                <?php
                                                            } else {
                                                                ?>
                                                                <option value="<?php echo $education_category['id']; ?>"><?php echo $education_category['name']; ?></option>   
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label " for="title" style="text-align: left">Subject: </label>
                                                <div class="col-sm-10">
                                                    <select  class="custom-select" id="subject" name="subject" required="">
                                                        <option value="">-- Select your Subject -- </option>
                                                        <?php
                                                        foreach (LectureSubject::getLectureSubjectsByLecture($_SESSION['id']) as $lecture_subject) {

                                                            if ($LECTURE_CLASS->subject_id == $lecture_subject['subject_id']) {
                                                                ?> 
                                                                <option value="<?php echo $lecture_subject['subject_id']; ?>" selected=""><?php
                                                                    $EDUCATIN_SUBJECT = new EducationSubject($lecture_subject['subject_id']);
                                                                    echo $EDUCATIN_SUBJECT->name;
                                                                    ?>
                                                                </option>   
                                                                <?php
                                                            } else {
                                                                ?>
                                                                <option value="<?php echo $lecture_subject['subject_id']; ?>"  ><?php
                                                                    $EDUCATIN_SUBJECT = new EducationSubject($lecture_subject['subject_id']);
                                                                    echo $EDUCATIN_SUBJECT->name;
                                                                    ?>
                                                                </option> 
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label " for="title" style="text-align: left">Start Date: </label>
                                                <div class="col-sm-10">
                                                    <input id="start_date" name="start_date" class="form-control datepicker" type="text"  placeholder="Enter start date" value="<?php echo $LECTURE_CLASS->start_date ?>">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-sm-2 control-label " for="title" style="text-align: left">Start Time: </label>
                                                <div class="col-sm-10">
                                                    <input id="start_time" name="start_time" class="form-control" type="text"  placeholder="Enter start time" value="<?php echo $LECTURE_CLASS->start_time ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label " for="title" style="text-align: left">Duration: </label>
                                                <div class="col-sm-10">

                                                    <input id="duration" name="duration" class="form-control" type="text"   placeholder="Duration" value="<?php echo $LECTURE_CLASS->duration ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-2 control-label " for="title" style="text-align: left">Class Fee: </label>
                                                <div class="col-sm-10">
                                                    <input id="class_fee" name="class_fee" class="form-control" type="text"   placeholder="Enter your Course Fee" value="<?php echo $LECTURE_CLASS->class_fee ?>">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-3"></div> 
                                                <div class="col-md-3"></div> 
                                                <div class="col-md-4"></div> 
                                                <div class="col-md-2">  
                                                    <input type="hidden"  name="update">
                                                    <input type="hidden"  name="id"  value="<?php echo $id ?>" >
                                                    <input type="submit" class="btn btn-primary btn-block"   value="Update" id="update" >
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
        <script src="ajax/js/lecture.js" type="text/javascript"></script>
        <script src="js/jquery.timepicker.min.js" type="text/javascript"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(function () {
                $(".datepicker").datepicker({dateFormat: 'yy-mm-dd',
                    minDate: 'today',
                });
            });

            $(function () {
                $('#start_time').timepicker({'scrollDefault': 'now'});
            });
        </script> 
        <script src="ajax/js/lecture_class.js" type="text/javascript"></script>
        <script src="delete/js/lecture-subject.js" type="text/javascript"></script>
    </body>

</html>