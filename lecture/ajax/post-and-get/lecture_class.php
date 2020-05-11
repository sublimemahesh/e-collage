<?php

include '../../../class/include.php';

//Update Lecture Class
if (isset($_POST['create'])) {

    $LECTURE_CLASS = new LectureClass(NULL);

    $LECTURE_CLASS->lecture = $_POST['lecture'];
    $LECTURE_CLASS->class_type = $_POST['class_type'];
    $LECTURE_CLASS->subject_id = $_POST['subject'];
    $LECTURE_CLASS->start_date = $_POST['start_date'];
    $LECTURE_CLASS->start_time = $_POST['start_time'];
    $LECTURE_CLASS->duration = $_POST['duration'];
    $LECTURE_CLASS->class_fee = $_POST['class_fee'];
    $LECTURE_CLASS->create();

    $response['status'] = 'success';
    echo json_encode($response);
    exit();
}

//update 
if (isset($_POST['update'])) {
    $LECTURE_CLASS = new LectureSubject($_POST['id']);


    $LECTURE_CLASS->subject_id = $_POST['subject'];

    $LECTURE_CLASS->update();


    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}
?> 