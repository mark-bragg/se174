<?php 
include('../../connection.php');

$dbHelper = DBHelper::getDBHelperInstance();
$name = trim(isset($_POST['name']) ? $_POST['name'] : '');
$uname = trim(isset($_POST['username']) ? $_POST['username'] : '');
$pword = trim(isset($_POST['password']) ? $_POST['password'] : '');
$email = trim(isset($_POST['email']) ? $_POST['email'] : '');


$dbHelper->registerUser($name, $uname, $pword, $email);

 ?>