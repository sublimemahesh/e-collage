<?php

include '../../../class/include.php';

//Update Lecture Class
if (isset($_POST['create'])) {

    $LECTURE_CLASS = new LectureClass(NULL);

    $LECTURE_CLASS->lecture = $_POST['lecture'];
    $LECTURE_CLASS->name = ucwords($_POST['name']);
    $LECTURE_CLASS->city = $_POST['city'];
    $LECTURE_CLASS->class_type = $_POST['class_type'];
    $LECTURE_CLASS->subject_id = $_POST['subject'];
    $LECTURE_CLASS->start_date = $_POST['start_date'];
    $LECTURE_CLASS->start_time = $_POST['start_time'];
    $LECTURE_CLASS->end_time = $_POST['end_time'];
    $LECTURE_CLASS->class_fee = $_POST['class_fee'];
    $LECTURE_CLASS->create();

    $response['status'] = 'success';
    echo json_encode($response);
    exit();
}

//update 
if (isset($_POST['update'])) {

    $LECTURE_CLASS = new LectureClass($_POST['id']);

    $LECTURE_CLASS->name = ucwords($_POST['name']);
    $LECTURE_CLASS->city = $_POST['city'];
    $LECTURE_CLASS->class_type = $_POST['class_type'];
    $LECTURE_CLASS->subject_id = $_POST['subject'];
    $LECTURE_CLASS->start_date = $_POST['start_date'];
    $LECTURE_CLASS->start_time = $_POST['start_time'];
    $LECTURE_CLASS->end_time = $_POST['end_time'];
    $LECTURE_CLASS->class_fee = $_POST['class_fee'];
    $LECTURE_CLASS->update();


    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}


//update 
if (isset($_POST['create-mcq'])) {

    $LECTURE_CLASS = new LectureClass($_POST['id']);
    $dir_dest = '../../../upload/class/';
    $filename = $_FILES['pdf_file']['name'];

    $handle = new Upload($_FILES['pdf_file']);
    $imgName = null;

    if ($handle->uploaded) {
        $handle->file_dst_name = Helper::randamId();
        $imgName = $handle->file_dst_name;
        $handle->Process($dir_dest);
    } 

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['pdf_file']['tmp_name'];
    $size = $_FILES['pdf_file']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {

        $result = ["status" => "errro-format"];
        echo json_encode($result);
        exit();
    } else {

        $result = ["status" => "sucess"];
        echo json_encode($result);
        exit();
    }
}
?> 