<?php
include '../../../class/include.php';

$final_arr = array();
foreach (LessonQuestion::getQuestionsByClassId($_POST['class_id'], $_POST['date']) as $key => $question) {
    $key++;
    $options = LessonQuestionOption::getOptionsByQuestionId($question['id']);
    $answer = StudentAnswers::getStudentAnswersByQuestionId($_POST['student'], $question['id']);

    $arr = array();
    $arr['question'] = $question['id'];
    $arr['is_correct'] = $answer['is_correct'];
    $arr['correct_answer'] = $options['correct_answer'];
    $arr['answer'] = $answer['answer'];

    array_push($final_arr, $arr);
}
echo json_encode($final_arr);
exit();
