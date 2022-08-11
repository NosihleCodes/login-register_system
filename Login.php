<?php
session_start();
include "dbconn.php";
include "createTable.php";

?>

<!DOCTYPE html>
<html>
<head>
<title> Login </title>
<link rel="stylesheet" href="css/styles.css">
</head>
<body>

<center>
<h1> Login Page </h1><br>

<form method= "post" action="Login.php" class = "borderLog">
  <label for="mail">Email:</label><br>
  <input type="email" id="mail" name="mail" ><br>
  <br>
  <label for="pwd">Password:</label><br>
  <input type="Password" id="pwd" name="pwd" ><br>
  <br>

  <a href="index.php"><input type="submit" name="log" value="Login"></a>
  <a href="Register.php">Register</a>
</form>
</center>


</body>
</html>