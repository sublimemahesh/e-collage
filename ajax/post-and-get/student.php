<?php

include '../../class/include.php';


//Update Student Details
if ($_POST['action'] == 'update') {
    $STUDENT = new Student($_POST['id']);

    $dir_dest = '../../upload/student/profile/';


    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        
        if (empty($_POST["oldImageName"])) {
            $handle->image_resize = true;
            $handle->file_new_name_ext = 'jpg';
            $handle->image_ratio_crop = 'C';
            $handle->file_new_name_body = Helper::randamId();
        } else {
            $handle->image_resize = true;
            $handle->file_new_name_body = TRUE;
            $handle->file_overwrite = TRUE;
            $handle->file_new_name_ext = FALSE;
            $handle->image_ratio_crop = 'C';
            $handle->file_new_name_body = $_POST["oldImageName"];
        }
        $handle->image_x = 128;
        $handle->image_y = 128;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $STUDENT->image_name = $imgName;


    $STUDENT->full_name = $_POST['full_name'];
    $STUDENT->nic_number = $_POST['nic_number'];
    $STUDENT->gender = $_POST['gender'];
    $STUDENT->age = $_POST['age'];
    $STUDENT->phone_number = $_POST['phone_number'];
    $STUDENT->address = $_POST['address'];
    $STUDENT->education_level = $_POST['education_level'];
    $STUDENT->email = $_POST['email'];
    $STUDENT->update();


    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}


if ($_POST['action'] == 'UPDATESTUDENTLEVEL') {

    if (isset($_POST['que_1'])) {
        $que_1 = $_POST['que_1'];
    }

    if (isset($_POST['que_2'])) {
        $que_2 = $_POST['que_2'];
    }
    if (isset($_POST['que_3'])) {
        $que_3 = $_POST['que_3'];
    }
    if (isset($_POST['que_4'])) {
        $que_4 = $_POST['que_4'];
    }
    if (isset($_POST['que_5'])) {
        $que_5 = $_POST['que_5'];
    }


    $cal = $que_1 + $que_2 + $que_3 + $que_4 + $que_5;

    $STUDENT = new Student($_POST['id']);

    if ($cal <= 2) {
        $STUDENT->level = 1;
        $STUDENT->status = 1;

        $result = $STUDENT->updateStatus();

        if ($result) {
            $result['status'] = 'beginner';
            echo json_encode($result);
            header('Content-type: application/json');
            exit();
        }
    } elseif ($cal <= 3) {

        $STUDENT->level = 2;
        $STUDENT->status = 1;
        $result = $STUDENT->updateStatus();

        if ($result) {
            $result['status'] = 'intermediate';
            echo json_encode($result);
            header('Content-type: application/json');
            exit();
        }
    } else if ($cal <= 5) {

        $STUDENT->level = 3;
        $STUDENT->status = 1;
        $result = $STUDENT->updateStatus();

        if ($result) {
            $result['status'] = 'advance';
            echo json_encode($result);
            header('Content-type: application/json');
            exit();
        }
    }
}

//Assessment Level
if ($_POST['action'] == 'ASSESSMENT_LEVEL') {

    if (isset($_POST['que_1'])) {
        $que_1 = $_POST['que_1'];
    }

    if (isset($_POST['que_2'])) {
        $que_2 = $_POST['que_2'];
    }
    if (isset($_POST['que_3'])) {
        $que_3 = $_POST['que_3'];
    }
    if (isset($_POST['que_4'])) {
        $que_4 = $_POST['que_4'];
    }
    if (isset($_POST['que_5'])) {
        $que_5 = $_POST['que_5'];
    }


    $cal = $que_1 + $que_2 + $que_3 + $que_4 + $que_5;


    if ($cal <= 2) {


        $result['status'] = 'beginner';
        echo json_encode($result);
        header('Content-type: application/json');
        exit();
    } elseif ($cal <= 3) {

        $result['status'] = 'intermediate';
        echo json_encode($result);
        header('Content-type: application/json');
        exit();
    } else if ($cal <= 5) {


        $result['status'] = 'advance';
        echo json_encode($result);
        header('Content-type: application/json');
        exit();
    }
}
?> 