<?php
session_start();
require_once('Controllers/student_poolcontroller.php');
$auth = new StudentPoolController;
$email = $_SESSION['email'];
$logout = $auth->logout($email);
//var_dump($_SESSION);
?>