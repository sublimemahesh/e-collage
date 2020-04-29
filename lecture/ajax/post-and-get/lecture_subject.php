<?php

include '../../../class/include.php';


//Update Lecture Details

if (isset($_POST['create'])) {
    $LECTURE_SUBJECT = new LectureSubject(NULL);

    $LECTURE_SUBJECT->subject_id = $_POST['subject'];
    $LECTURE_SUBJECT->lecture = $_POST['lecture'];
    $LECTURE_SUBJECT->create();

    $response['status'] = 'success';
    echo json_encode($response);
    exit();
}

//update 
if (isset($_POST['update'])) {
    $LECTURE_SUBJECT = new LectureSubject($_POST['id']);


    $LECTURE_SUBJECT->subject_id = $_POST['subject'];
    
    $LECTURE_SUBJECT->update();


    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}
?> 