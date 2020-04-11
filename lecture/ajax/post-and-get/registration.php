<?php

include '../../../class/include.php';
$LECTURE = new Lecture(NULL);

$LECTURE->full_name = $_POST['full_name'];
$LECTURE->nic_number = $_POST['nic_number'];
$LECTURE->phone_number = $_POST['phone_number'];
$LECTURE->address = $_POST['address'];
$LECTURE->district = $_POST['district'];
$LECTURE->city = $_POST['city'];
$LECTURE->email = $_POST['email'];
$LECTURE->subject = $_POST['subject'];
$LECTURE->password = md5($_POST['password']);


$LECTURE->create();
if ($LECTURE->id) {

    $LECTURE->login($LECTURE->email, $_POST['password']);

    $response['status'] = 'success';
    echo json_encode($response);
    exit();
} else {

    $response['status'] = 'error';
    echo json_encode($response);
    exit();
}
 