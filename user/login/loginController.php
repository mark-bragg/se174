<?php 
echo "in login controller";
##############LOGIN###################
	include('../../connection.php');
	echo 'what the heck';
	$dbHelper = DBHelper::getDBHelperInstance();

	$username = trim(isset($_POST['username']) ? $_POST['username'] : '');
	$password = trim(isset($_POST['password']) ? $_POST['password'] : '');
	$error = trim(isset($GET['error']) ? $_GET['error'] : '');
	echo "where am i";
	if (!empty($username) || !empty($password)) {
		echo "inside first if";
		if ($dbHelper->userAuthentication($username, $password)) {
			echo "inside second if";
			$_SESSION['Authenticated'] = true;
			$_SESSION['Expires'] = time() + 3600;
			$_SESSION['username'] = $username;

			// DIRECT HOME
			header('Location: ../home/homeView.php');
			exit();
		} else {
			$error = 'Invalid username-password combination';
		}
	} else {
		// DIRECT HOME
		header('Location: ../../index.php');
		exit();
	}


 ?>