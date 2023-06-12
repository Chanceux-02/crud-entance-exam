<?php
include_once '../classes/Db.class.php';
include_once '../classes/Delete.class.php';

if (isset($_POST['deleteProfile'])) {

//getting data

$uid = $_POST['uid'];

echo $uid;

$delete = new Delete;
$delete->delete($uid);

session_start();
session_unset();
session_destroy();

header("Location: ../pages/login.php?login=successfuly!");

}