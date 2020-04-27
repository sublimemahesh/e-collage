<?php

include '../../../class/include.php';


if ($_POST['option'] == 'delete') {

    $CATEGORY = new Category($_POST['id']);

    $result = $Category->delete();

    if ($result) {
        $data = array("status" => TRUE);
        header('Content-type: application/json');
        echo json_encode($data);
    }
}