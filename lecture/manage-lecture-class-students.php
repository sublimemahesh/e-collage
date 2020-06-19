<?php
include '../class/include.php';
include './auth.php';
?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ecollege.lk - Manage Lecture Class Students </title>
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

                            <div class="card">
                                <div class="card-header"> 
                                    <strong>Manage  Classes Students</strong>
                                </div>
                                <div class="card-body">
                                    <table id="demo-datatables-colreorder-1" class="table table-hover table-striped table-nowrap dataTable" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Class Type</th>   
                                                <th>Subject</th>  
                                                <th>Start Date</th>  
                                                <th>Start Time</th>                                               
                                                <th>Num of Students</th>  
                                             
                                            </tr>
                                        </thead>
                                        <?php
                                        $LECTURE_CLASS = new LectureClass(NULL);
                                        foreach ($LECTURE_CLASS->getLectureClassesByLecture($_SESSION['id']) as $key => $lecture_class) {
                                            $key++;
                                            ?>
                                            <tr id="div<?php echo $lecture_class['id'] ?>">
                                                <td><?php echo $key ?></td>
                                                <td><?php
                                                    $CLASS_TYPE = new ClassType($lecture_class['class_type']);
                                                    echo $CLASS_TYPE->name
                                                    ?></td>
                                                <td><?php
                                                    $SUBJECT = new EducationSubject($lecture_class['subject_id']);
                                                    echo $SUBJECT->name
                                                    ?></td>
                                                <td><?php echo $lecture_class['start_date'] ?></td>
                                                <td><?php echo $lecture_class['start_time'] ?></td>
                                              
                                                <td><?php echo count(StudentRegistration::getStudentByClassId($lecture_class['id'])) ?></td>

                                                
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>Class Type</th>   
                                                <th>Subject</th>  
                                                <th>Start Date</th>  
                                                <th>Start Time</th>  
                                              
                                                <th>Num of Students</th>  
                                                 
                                            </tr>
                                        </tfoot>                                       
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </body>
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
    <script src="delete/js/lecture-class.js" type="text/javascript"></script>


</html>