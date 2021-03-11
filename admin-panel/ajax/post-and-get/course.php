<?php

include '../../../class/include.php';

//create class Type
if (isset($_POST['create'])) {

    $COURSE = new Course(NULL);


    $COURSE->name = $_POST['name'];
    $COURSE->create();

    $result = [
        "message" => 'success'
    ];
    echo json_encode($result);
    exit();
}

if (isset($_POST['update'])) {

    $COURSE = new Course($_POST['id']);

    $COURSE->name = $_POST['name'];
    $COURSE->update();
    $result = [
        "message" => 'success'
    ];
    echo json_encode($result);
    exit();
}