<?php

include '../../../class/include.php';

$PAYMENT = new Payment(NULL);

$PAYMENT->student_id = $_POST['student_id'];
$PAYMENT->class_id = $_POST['class_id'];
$PAYMENT->date = $_POST['date'];
$PAYMENT->create(); 

$result = ["status" => "success"];
echo json_encode($result);
exit();
?> 