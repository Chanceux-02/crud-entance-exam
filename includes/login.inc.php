<?php
include_once '../classes/Db.class.php';
include_once '../classes/Login.class.php';

if (isset($_POST['submit'])) {

//getting data

$email = strip_tags($_POST['email']);
$pass = strip_tags($_POST['pwd']);

// echo $email.'<br>'. $pass;
// print_r($_POST);

$add = new Login;
$add->login($email, $pass);

header("Location: ../index.php?login=successfuly!");

}