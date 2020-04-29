<?php

include '../../../class/include.php';

if ($_POST['action'] == 'GET_SUB_CATEGORY_BY_CATEGORY') {

    $CITY = new City(NULL);

    $result = $CITY->GetCitiesByDistrict($_POST["category"]);
    echo json_encode($result);
    header('Content-type: application/json');
    exit();
}

if ($_POST['action'] == 'GET_SUBJECT_BY_SUB_CATEGORY') {

    $EDUCATION_SUBJECT = new EducationSubject(NULL);
    $result = $EDUCATION_SUBJECT->GetCitiesByDistrict($_POST["sub_category"]);
    echo json_encode($result);
    header('Content-type: application/json');
    exit();
}

