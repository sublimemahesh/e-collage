<?php

if (!isset($_SESSION)) {
    session_start();
} 
 
 
if (!Lecture::authenticate()) {
    redirect('login.php');
}