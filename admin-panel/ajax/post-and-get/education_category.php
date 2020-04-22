<?php

include '../../../class/include.php';

//create catetgory
if (isset($_POST['create'])) {

    $EDUCATION_CATEGORY = new EducationCategory(NULL);

    $EDUCATION_CATEGORY->name = $_POST['name'];

    if (isset($_POST['status'])) {
        $EDUCATION_CATEGORY->status = $_POST['status'];
    }

//    $dir_dest = '../../../upload/category/';
//
//    $handle = new Upload($_FILES['image_name']);
//
//    $imgName = null;
//
//    if ($handle->uploaded) {
//        $handle->image_resize = true;
//        $handle->file_new_name_ext = 'jpg';
//        $handle->image_ratio_crop = 'C';
//        $handle->file_new_name_body = Helper::randamId();
//        $handle->image_x = 150;
//        $handle->image_y = 150;
//
//        $handle->Process($dir_dest);
//
//        if ($handle->processed) {
//            $info = getimagesize($handle->file_dst_pathname);
//            $imgName = $handle->file_dst_name;
//        }
//    }
//
//    $EDUCATION_CATEGORY->image_name = $imgName;

    $EDUCATION_CATEGORY->create();
    $result = [
        "message" => 'success'
    ];
    echo json_encode($result);
    exit();
}

if (isset($_POST['update'])) {

    $EDUCATION_CATEGORY = new EducationCategory($_POST['id']);

//    $dir_dest = '../../../upload/category/';
//
//    $handle = new Upload($_FILES['image_name']);
//
//    $imgName = null;
//
//    if ($handle->uploaded) {
//        $handle->image_resize = true;
//        $handle->file_new_name_body = TRUE;
//        $handle->file_overwrite = TRUE;
//        $handle->file_new_name_ext = FALSE;
//        $handle->image_ratio_crop = 'C';
//        $handle->file_new_name_body = $_POST ["oldImageName"];
//        $handle->image_x = 150;
//        $handle->image_y = 150;
//
//        $handle->Process($dir_dest);
//
//        if ($handle->processed) {
//            $info = getimagesize($handle->file_dst_pathname);
//            $imgName = $handle->file_dst_name;
//        }
//    }
//
//    $EDUCATION_CATEGORY->image_name = $_POST ["oldImageName"];
    $EDUCATION_CATEGORY->name = $_POST['name'];
    if (empty($_POST['status'])) {
        $EDUCATION_CATEGORY->status = 0;
    } else {
        $EDUCATION_CATEGORY->status = $_POST['status'];
    }

    $EDUCATION_CATEGORY->update();
    $result = [
        "message" => 'success'
    ];
    echo json_encode($result);
    exit();
}
?> 