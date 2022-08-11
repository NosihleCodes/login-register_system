<?php

session_start(); //start a session 

if(!isset($_SESSION['mail'])){ //if user has not logged in it'll direct them to the LOGIN PAGE
	header('location:  Login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
<title> Welcome </title>
<link rel="stylesheet" href="css/styles.css">
<body>

<center>
<h1> Welcome !</h1>
</center>



</body>
</html>