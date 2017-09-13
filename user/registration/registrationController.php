<?php 
include('../../connection.php');

$pwordConfirm = trim(isset($_POST['confirmPassword']) ? $_POST['confirmPassword'] : '');
$pword = trim(isset($_POST['password']) ? $_POST['password'] : '');
if ($pword != $pwordConfirm) {
	echo "pword and confirm are not the same";
	// DIRECT BACK TO REGISTRATION VIEW
	header('Location: registrationView.php');
	exit();
}
$pwordHash = password_hash("{$pword}", PASSWORD_DEFAULT);
echo "pword and confirm are the same";

$dbHelper = DBHelper::getDBHelperInstance();
$name = trim(isset($_POST['name']) ? $_POST['name'] : '');
$uname = trim(isset($_POST['username']) ? $_POST['username'] : '');
$email = trim(isset($_POST['email']) ? $_POST['email'] : '');

echo "{$name} {$uname} {$pword} {$email}";

$dbHelper->registerUser($name, $uname, $pwordHash, $email);

// DIRECT HOME
header('Location: ../../index.php');
exit();

 ?>