<?php

include '../../class/include.php';
 
if (isset($_POST['save-post'])) {

    if (empty($_POST['description']) && empty($_POST['post-all-images'])) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    } else {
        $POST = new Post(NULL);
        $POST->student = $_POST['student'];
        $POST->description = $_POST['description'];
        $result = $POST->create();
        if ($result) {

            foreach ($_POST['post-all-images'] as $key => $img) {
                $key++;
                $POST_IMAGE = new PostImage(NULL);
                $POST_IMAGE->post = $result->id;
                $POST_IMAGE->image_name = $img;
                $POST_IMAGE->sort = $key;
                $res = $POST_IMAGE->create();
            }

            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit();
        } else {
            header('Location: ' . $_SERVER['HTTP_REFERER'] . '?message=21');
            exit();
        }
    }
}
