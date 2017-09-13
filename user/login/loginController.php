<div>
<?php 
echo "in login controller";
##############LOGIN###################
	include('../../connection.php');

	$dbHelper = DBHelper::getDBHelperInstance();

	$username = trim(isset($_POST['username']) ? $_POST['username'] : '');
	$password = trim(isset($_POST['password']) ? $_POST['password'] : '');
	$error = trim(isset($GET['error']) ? $_GET['error'] : '');

	if (!empty($username) || !empty($password)) {
		echo "begin authentication";
		if ($dbHelper->userAuthentication($username, $password)) {

			if (session_status() == PHP_SESSION_NONE) {
				session_name("se174");
			    session_start();
			}
			$_SESSION['Authenticated'] = true;
			echo "authentication successful {$_SESSION['Authenticated']}";
			$_SESSION['Expires'] = time() + 3600;
			$_SESSION['username'] = $username;
			
		} else {
			$error = 'Invalid username-password combination';
			echo "authentication failed \nERROR: {$error}";
		}
	}

	// DIRECT BACK TO ROOT
	header('Location: ../../index.php');
	exit();


 ?>	
</div>
