<?php

include '../../class/include.php';

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