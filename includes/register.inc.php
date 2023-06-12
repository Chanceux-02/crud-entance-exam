<?php
include_once '../classes/Db.class.php';
include_once '../classes/Add.class.php';
include_once '../classes/Show.class.php';
if (isset($_POST['submit'])) {

//getting data

$fullname = strip_tags($_POST['fullname']); 
if(empty($fullname)){
    header("Location: ../pages/register.php?empty=fullname");
}
$address = strip_tags($_POST['address']); 
$birthdate = $_POST['birthdate'];
$age = $_POST['age'];
$gender = strip_tags($_POST['gender']);
$civilStat = strip_tags($_POST['civilstat']);
$contactNum = strip_tags($_POST['contactnum']);
$salary = $_POST['salary'];
$isactive = 1; //default value after registering
$email = strip_tags($_POST['email']);
$pass = strip_tags($_POST['pwd']);
$hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

// echo $fullname .'<br>'. $address.'<br>'. $birthdate.'<br>'. $age.'<br>'. $gender.'<br>'. $civilStat.'<br>'. $contactNum.'<br>'. $salary.'<br>'. $isactive.'<br>'. $email.'<br>'. $pass;

$checkEmail = new Show;
$validate = $checkEmail->checkEmail($email);
// print_r($validate['email']);
// echo '<br>';
if (isset($validate['email'])) {
    header("Location: ../pages/register.php?email-already-exist!");
}else{
    $add = new Add;
    $add->add($fullname, $address, $birthdate, $age, $gender, $civilStat, $contactNum, $salary, $isactive, $email, $hashedPassword); 
    header("Location: ../pages/login.php?register-successful!");
}

}