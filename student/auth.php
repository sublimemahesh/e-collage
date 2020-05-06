<?php

if (!isset($_SESSION)) {
    session_start();
}


if (!StudentSubject::checkStudentSubjects($_SESSION['id'])) {
    redirect('complete-profile.php?message=19');
} else {
    if (!Student::authenticate()) {
        redirect('login.php');
    }
}


if (!Student::authenticate()) {
    redirect('login.php');
}