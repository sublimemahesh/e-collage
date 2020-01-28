<?php

include '../../class/include.php';

if ($_POST['action'] == 'CHECKLOGIN') {

    $STUDENT = new Student(NULL);

    $result = $STUDENT->checkLogin($_POST['id']);

    if ($result) {
        $result['status'] = 'true';
        echo json_encode($result);
        header('Content-type: application/json');
        exit();
    } else {
        $result['status'] = 'false';
        echo json_encode($result);
        header('Content-type: application/json');
        exit();
    }
}

//Update Status
if ($_POST['action'] == 'UPDATESTATUS') {

    $STUDENT = new Student($_POST['id']);
    $STUDENT->status = 1;
    $STUDENT->level = 1;
    $result = $STUDENT->updateStatus();
    if ($result) {
        $result['status'] = 'success';
        echo json_encode($result);
        header('Content-type: application/json');
        exit();
    } else {
        $result['status'] = 'error';
        echo json_encode($result);
        header('Content-type: application/json');
        exit();
    }
}
?> 
