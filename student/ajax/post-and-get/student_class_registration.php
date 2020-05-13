<?php

include '../../../class/include.php';


//create Classes Registration
if (isset($_POST['create'])) {
    
    $STUDENT_REGISTRATION = new StudentRegistration(NULL);

    $STUDENT_REGISTRATION->student_id = $_POST['student_id'];
    $STUDENT_REGISTRATION->lecture_id = $_POST['lecture_id'];
    $STUDENT_REGISTRATION->class_id = $_POST['class_id'];
    $STUDENT_REGISTRATION->create();


    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}
?> 