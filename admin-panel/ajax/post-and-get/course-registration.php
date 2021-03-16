<?php

include '../../../class/include.php';

$COURSE_REG = new CourseRegistration($_POST['id']);

$COURSE_REG->full_name = $_POST['txtFullName'];
$COURSE_REG->email = $_POST['txtEmail'];
$COURSE_REG->address = $_POST['txtAddress'];
$COURSE_REG->district = $_POST['txtDistrict'];
$COURSE_REG->city = $_POST['txtCity'];
$COURSE_REG->phone_number = $_POST['txtPhone'];
$COURSE_REG->mobile_number = $_POST['txtMobile'];
$COURSE_REG->school = $_POST['txtSchool'];
$COURSE_REG->grade = $_POST['txtGrade'];
$COURSE_REG->dob = $_POST['txtDOB'];
$COURSE_REG->age = $_POST['txtAge'];



$result = $COURSE_REG->update();
if ($result) {
    $res = StudentCourse::DeleteCoursesByRegId($_POST['id']);
    foreach ($_POST['chbCourse'] as $course) {
        $COURSE = new StudentCourse(NULL);
        $COURSE->registration_id = $COURSE_REG->id;
        $COURSE->course = $course;
        $COURSE->create();
    }

    $response['status'] = 'success';
    $response['message'] = 'You have been registered successfully.';
    echo json_encode($response);
    exit();
} else {

    $response['status'] = 'error';
    echo json_encode($response);
    exit();
}
