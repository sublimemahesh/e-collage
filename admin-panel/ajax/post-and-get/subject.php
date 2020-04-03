<?php

include '../../../class/include.php';
 if (isset($_POST['create'])) {

    $SUBJECT = new Subject(NULL);


    $SUBJECT->name = $_POST['name'];
    $SUBJECT->order = $_POST['order'];

    $SUBJECT->create();
    $result = [
        "message" => 'success'
    ];
    echo json_encode($result);
    exit();
}

if (isset($_POST['update'])) {

    $SUBJECT = new Subject($_POST['id']);

    $SUBJECT->name = $_POST['name'];
    $SUBJECT->order = $_POST['order'];
    $SUBJECT->update();
    $result = [
        "message" => 'success'
    ];
    echo json_encode($result);
    exit();
}