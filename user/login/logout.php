<?php 
echo "potato yo boy yo!";
if (session_status() == PHP_SESSION_NONE) {
	session_name("se174");
    session_start();
}
$_SESSION['Authenticated'] = false;
$_SESSION['Expires'] = time();
$_SESSION['username'] = '';
session_destroy();

header('Location: ../../index.php');
exit();
 ?>