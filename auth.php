<?php

if (!isset($_SESSION)) {
    session_start();
} 

//if (isset($_SESSION['id'])) {
//    if (time() - $_SESSION['login_time'] > 10000) {
//        redirect('login.php');
//    }
//}
 
if (!Student::authenticate()) {
    redirect('login.php');
}