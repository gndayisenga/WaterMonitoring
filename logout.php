<?php
session_start();
if (isset($_SESSION['id'])){
    unset($_SESSION['id']);
    unset($_SESSION['fname']);
    unset($_SESSION['lname']);

    session_destroy();
    //session_unset();
    header('location: ./login.php');
}else{
    session_abort();
    session_destroy();
    header('location: ./login.php');
}