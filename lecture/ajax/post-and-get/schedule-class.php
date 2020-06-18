<?php

include '../../../class/include.php';

//Create VIDEO 
if (isset($_POST['create_video'])) {

    $LECTURE_VIDEO = new LectureVideo(NULL);

    $LECTURE_VIDEO->url = $_POST['url'];
    $LECTURE_VIDEO->date = $_POST['date'];
    $LECTURE_VIDEO->class_id = $_POST['class_id'];
    $LECTURE_VIDEO->lecture_id = $_POST['lecture_id'];


    $LECTURE_VIDEO->create();
    $result = ["status" => "sucess"];
    echo json_encode($result);
    exit();
}
//Create MCQ 
if (isset($_POST['create-mcq'])) {

    $LECTURE_MCQ = new LectureMcq(NULL);
    $dir_dest = '../../../upload/class/mcq/';
    $filename = $_FILES['pdf_file']['name'];

    $handle = new Upload($_FILES['pdf_file']);
    $imgName = null;

    if ($handle->uploaded) {
        $handle->file_dst_name = Helper::randamId();
        $imgName = $handle->file_dst_name;
        $handle->file_new_name_body = $imgName;
        $handle->Process($dir_dest);
    }

    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['pdf_file']['tmp_name'];
    $size = $_FILES['pdf_file']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {

        $result = ["status" => "errro-format"];
        echo json_encode($result);
        exit();
    } else {

        $LECTURE_MCQ->file_name = $imgName . '.pdf';
        $LECTURE_MCQ->title = ucwords($_POST['title']);
        $LECTURE_MCQ->date = $_POST['date'];
        $LECTURE_MCQ->lecture_id = $_POST['lecture_id'];
        $LECTURE_MCQ->class_id = $_POST['class_id'];


        $LECTURE_MCQ->create();
        $result = ["status" => "sucess"];
        echo json_encode($result);
        exit();
    }
}

//Create Tutorials 
if (isset($_POST['create-tutorials'])) {

    $LECTURE_TUTORIALS = new LectureTutorial(NULL);
    $dir_dest = '../../../upload/class/tutorials/';
    $filename = $_FILES['pdf_file']['name'];

    $handle = new Upload($_FILES['pdf_file']);
    $imgName = null;

    if ($handle->uploaded) {
        $handle->file_dst_name = Helper::randamId();
        $imgName = $handle->file_dst_name;
        $handle->file_new_name_body = $imgName;
        $handle->Process($dir_dest);
    }

    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['pdf_file']['tmp_name'];
    $size = $_FILES['pdf_file']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {

        $result = ["status" => "errro-format"];
        echo json_encode($result);
        exit();
    } else {


        $LECTURE_TUTORIALS->file_name = $imgName . '.pdf';
        $LECTURE_TUTORIALS->title = ucwords($_POST['title']);
        $LECTURE_TUTORIALS->date = $_POST['date'];
        $LECTURE_TUTORIALS->lecture_id = $_POST['lecture_id'];
        $LECTURE_TUTORIALS->class_id = $_POST['class_id'];


        $LECTURE_TUTORIALS->create();
        $result = ["status" => "sucess"];
        echo json_encode($result);
        exit();
    }
}


//Create Assessment 
if (isset($_POST['create-assessment'])) {

    $LECTURE_ASSESSMENT = new LectureAssessment(NULL);
    $dir_dest = '../../../upload/class/assessment/';
    $filename = $_FILES['pdf_file']['name'];

    $handle = new Upload($_FILES['pdf_file']);
    $imgName = null;

    if ($handle->uploaded) {
        $handle->file_dst_name = Helper::randamId();
        $imgName = $handle->file_dst_name;
        $handle->file_new_name_body = $imgName;
        $handle->Process($dir_dest);
    }

    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['pdf_file']['tmp_name'];
    $size = $_FILES['pdf_file']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {

        $result = ["status" => "errro-format"];
        echo json_encode($result);
        exit();
    } else {


        $LECTURE_ASSESSMENT->file_name = $imgName . '.pdf';
        $LECTURE_ASSESSMENT->title = ucwords($_POST['title']);
        $LECTURE_ASSESSMENT->date = $_POST['date'];
        $LECTURE_ASSESSMENT->lecture_id = $_POST['lecture_id'];
        $LECTURE_ASSESSMENT->class_id = $_POST['class_id'];


        $LECTURE_ASSESSMENT->create();
        $result = ["status" => "sucess"];
        echo json_encode($result);
        exit();
    }
}

//Create home work 
if (isset($_POST['create-home-work'])) {

    $HOME_WORK = new HomeWork(NULL);
    $dir_dest = '../../../upload/class/home-work/';
    $filename = $_FILES['pdf_file']['name'];

    $handle = new Upload($_FILES['pdf_file']);
    $imgName = null;

    if ($handle->uploaded) {
        $handle->file_dst_name = Helper::randamId();
        $imgName = $handle->file_dst_name;
        $handle->file_new_name_body = $imgName;
        $handle->Process($dir_dest);
    }

    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['pdf_file']['tmp_name'];
    $size = $_FILES['pdf_file']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {

        $result = ["status" => "errro-format"];
        echo json_encode($result);
        exit();
    } else {


        $HOME_WORK->file_name = $imgName . '.pdf';
        $HOME_WORK->title = ucwords($_POST['title']);
        $HOME_WORK->date = $_POST['date'];
        $HOME_WORK->lecture_id = $_POST['lecture_id'];
        $HOME_WORK->class_id = $_POST['class_id'];


        $HOME_WORK->createLecture();
        $result = ["status" => "sucess"];
        echo json_encode($result);
        exit();
    }
}
?> 