<?php
include_once '../classes/Db.class.php';
include_once '../classes/Update.class.php';

if (isset($_POST['submit'])) {

//getting data

$uid = $_POST['uid']; 
$fullname = strip_tags($_POST['fullname']); 
$address = strip_tags($_POST['address']); 
$birthdate = $_POST['birthdate'];
$age = $_POST['age'];
$gender = strip_tags($_POST['gender']);
$civilStat = strip_tags($_POST['civilstat']);
$contactNum = $_POST['contactnum'];
$salary = $_POST['salary'];

$isactive = $_POST['empstat'];
if (isset($isactive)) {
    $isactive = 1;
} else {
    $isactive = 0;
}

$email = strip_tags($_POST['email']);
$pass = strip_tags($_POST['pwd']);
$hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

// echo $isactive;
// print_r($_POST);
$delete = new Update;
$delete->update($fullname, $address, $birthdate, $age, $gender, $civilStat, $contactNum, $salary, $isactive, $email, $hashedPassword, $uid);

header("Location: ../pages/profile.php?page=profile&profile-updated-successful!");

}