<?php include ("registrationController.php"); ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

<h2>Register</h2>
<p><span class="error">All fields are required.</span></p>
<form method="post" action="user/registration/registrationController.php">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Username: <input type="text" name="name">
  <br><br>
  Password: <input type="password" name="password" />
  <br><br>
  Confirm Password: <input type="password" name="confirmPassword" />
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
