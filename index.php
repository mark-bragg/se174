

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="styles.css" >
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

		<title>SE174</title>
		<meta http-equiv="Content-Type" content="text/html
		  charset=UTF-8" />
		<meta name="Author" content="Team Potato" />
		<meta name="description" content="class work and projects" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>	
	</head>
	<body>
		<?php
		if (session_status() == PHP_SESSION_NONE) {
			session_name("se174");
		    session_start();
		    if (isset($_SESSION['Authenticated']) && $_SESSION['Authenticated']) {
		    	include 'navBar.php'; 
		    	include 'user/home/homeView.php';
		    } else {
		    	echo "<div id='container'>";
		    	// echo "NO SESSION RIGHT NOW!";
				include 'user/login/loginView.php';
				// include 'user/home/homeView.php';
				echo "</div>";
		    }	
		}
		?>
		

		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	</body>
</html>