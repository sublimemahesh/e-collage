<?php

include '../../../class/include.php';

//Create VIDEO 
if (isset($_POST['create_video'])) {

    $LECTURE_VIDEO = new LectureVideo(NULL);

    $LECTURE_VIDEO->url = $_POST['url'];
    $LECTURE_VIDEO->date = $_POST['date'];
    $LECTURE_VIDEO->class_id = $_POST['class_id'];
    $LECTURE_VIDEO->lecture_id = $_POST['lecture_id'];


    $LECTURE_VIDEO->create();
    $result = ["status" => "sucess"];
    echo json_encode($result);
    exit();
}
//Create MCQ 
if (isset($_POST['create-mcq'])) {

    $LECTURE_MCQ = new LectureMcq(NULL);
    $dir_dest = '../../../upload/class/mcq/';
    $filename = $_FILES['pdf_file']['name'];

    $handle = new Upload($_FILES['pdf_file']);
    $imgName = null;

    if ($handle->uploaded) {
        $handle->file_dst_name = Helper::randamId();
        $imgName = $handle->file_dst_name;
        $handle->file_new_name_body = $imgName;
        $handle->Process($dir_dest);
    }

    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['pdf_file']['tmp_name'];
    $size = $_FILES['pdf_file']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {

        $result = ["status" => "errro-format"];
        echo json_encode($result);
        exit();
    } else {

        $LECTURE_MCQ->file_name = $imgName . '.pdf';
        $LECTURE_MCQ->title = ucwords($_POST['title']);
        $LECTURE_MCQ->date = $_POST['date'];
        $LECTURE_MCQ->lecture_id = $_POST['lecture_id'];
        $LECTURE_MCQ->class_id = $_POST['class_id'];


        $LECTURE_MCQ->create();
        $result = ["status" => "sucess"];
        echo json_encode($result);
        exit();
    }
}

//Create Question 
if (isset($_POST['create-question'])) {

    $QUESTION = new LessonQuestion(NULL);
    $QUESTION->question = $_POST['question'];
    $QUESTION->date = $_POST['date'];
    $QUESTION->class = $_POST['class_id'];

    $res = $QUESTION->create();
    if($res) {
        $QUESTION_OPTIONS = new LessonQuestionOption(NULL);
        $QUESTION_OPTIONS->question = $res->id;
        $QUESTION_OPTIONS->option_A = $_POST['option_a'];
        $QUESTION_OPTIONS->option_B = $_POST['option_b'];
        $QUESTION_OPTIONS->option_C = $_POST['option_c'];
        $QUESTION_OPTIONS->option_D = $_POST['option_d'];
        $QUESTION_OPTIONS->option_E = $_POST['option_e'];
        $QUESTION_OPTIONS->correct_answer = $_POST['correct_answer'];
        $res1 = $QUESTION_OPTIONS->create();
    }
    $result = ["status" => "sucess"];
    echo json_encode($result);
    exit();
}
//Edit Question 
if (isset($_POST['edit-question'])) {

    $QUESTION = new LessonQuestion($_POST['id']);
    $QUESTION->question = $_POST['question'];
    $QUESTION->date = $_POST['date'];
    $QUESTION->class = $_POST['class_id'];

    $res = $QUESTION->update();
    
    if($res) {
        $QUESTION_OPTIONS = new LessonQuestionOption($_POST['option_id']);
        $QUESTION_OPTIONS->question = $_POST['id'];
        $QUESTION_OPTIONS->option_A = $_POST['option_a'];
        $QUESTION_OPTIONS->option_B = $_POST['option_b'];
        $QUESTION_OPTIONS->option_C = $_POST['option_c'];
        $QUESTION_OPTIONS->option_D = $_POST['option_d'];
        $QUESTION_OPTIONS->option_E = $_POST['option_e'];
        $QUESTION_OPTIONS->correct_answer = $_POST['correct_answer'];
        
        $res1 = $QUESTION_OPTIONS->update();
    }
    $result = ["status" => "sucess"];
    echo json_encode($result);
    exit();
}

//Create Tutorials 
if (isset($_POST['create-tutorials'])) {

    $LECTURE_TUTORIALS = new LectureTutorial(NULL);
    $dir_dest = '../../../upload/class/tutorials/';
    $filename = $_FILES['pdf_file']['name'];

    $handle = new Upload($_FILES['pdf_file']);
    $imgName = null;

    if ($handle->uploaded) {
        $handle->file_dst_name = Helper::randamId();
        $imgName = $handle->file_dst_name;
        $handle->file_new_name_body = $imgName;
        $handle->Process($dir_dest);
    }

    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['pdf_file']['tmp_name'];
    $size = $_FILES['pdf_file']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {

        $result = ["status" => "errro-format"];
        echo json_encode($result);
        exit();
    } else {


        $LECTURE_TUTORIALS->file_name = $imgName . '.pdf';
        $LECTURE_TUTORIALS->title = ucwords($_POST['title']);
        $LECTURE_TUTORIALS->date = $_POST['date'];
        $LECTURE_TUTORIALS->lecture_id = $_POST['lecture_id'];
        $LECTURE_TUTORIALS->class_id = $_POST['class_id'];


        $LECTURE_TUTORIALS->create();
        $result = ["status" => "sucess"];
        echo json_encode($result);
        exit();
    }
}


//Create Assessment 
if (isset($_POST['create-assessment'])) {

    $LECTURE_ASSESSMENT = new LectureAssessment(NULL);
    $dir_dest = '../../../upload/class/assessment/';
    $filename = $_FILES['pdf_file']['name'];

    $handle = new Upload($_FILES['pdf_file']);
    $imgName = null;

    if ($handle->uploaded) {
        $handle->file_dst_name = Helper::randamId();
        $imgName = $handle->file_dst_name;
        $handle->file_new_name_body = $imgName;
        $handle->Process($dir_dest);
    }

    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['pdf_file']['tmp_name'];
    $size = $_FILES['pdf_file']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {

        $result = ["status" => "errro-format"];
        echo json_encode($result);
        exit();
    } else {


        $LECTURE_ASSESSMENT->file_name = $imgName . '.pdf';
        $LECTURE_ASSESSMENT->title = ucwords($_POST['title']);
        $LECTURE_ASSESSMENT->date = $_POST['date'];
        $LECTURE_ASSESSMENT->lecture_id = $_POST['lecture_id'];
        $LECTURE_ASSESSMENT->class_id = $_POST['class_id'];


        $LECTURE_ASSESSMENT->create();
        $result = ["status" => "sucess"];
        echo json_encode($result);
        exit();
    }
}

//Create home work 
if (isset($_POST['create-home-work'])) {

    $HOME_WORK = new HomeWork(NULL);
    $dir_dest = '../../../upload/class/home-work/';
    $filename = $_FILES['pdf_file']['name'];

    $handle = new Upload($_FILES['pdf_file']);
    $imgName = null;

    if ($handle->uploaded) {
        $handle->file_dst_name = Helper::randamId();
        $imgName = $handle->file_dst_name;
        $handle->file_new_name_body = $imgName;
        $handle->Process($dir_dest);
    }

    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['pdf_file']['tmp_name'];
    $size = $_FILES['pdf_file']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {

        $result = ["status" => "errro-format"];
        echo json_encode($result);
        exit();
    } else {


        $HOME_WORK->file_name = $imgName . '.pdf';
        $HOME_WORK->title = ucwords($_POST['title']);
        $HOME_WORK->date = $_POST['date'];
        $HOME_WORK->lecture_id = $_POST['lecture_id'];
        $HOME_WORK->class_id = $_POST['class_id'];


        $HOME_WORK->createLecture();
        $result = ["status" => "sucess"];
        echo json_encode($result);
        exit();
    }
}
