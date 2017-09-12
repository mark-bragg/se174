

<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
  </head>
  <body>
    <form name="F" method="post" action="user/login/loginController.php" >
      Username: <input type="text" name="username" value="" />
      <br><br>
      Password: <input type="password" name="password" />
      <br><br>
      <input type="submit" value="Login" id="submit" />
      <br><br>
      <a href="user/registration/registrationView.php">Not a member yet? Click here to register!</a>

    </form>
  </body>
</html>