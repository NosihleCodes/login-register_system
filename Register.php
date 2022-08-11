<?php
session_start();
include "dbconn.php";

$fname = $Sname = $Stnum  = $Email = $Pass = $Pass1 = $output = NULL;
 
 //submit button has been clicked
if(isset($_POST['Reg'])){
	
$fname = $_POST['fname'];
$Sname = $_POST['Sname'];
$Stnum = $_POST['Stnum'];
$Email = $_POST['mail'];
$Pass = $_POST['pwd'];
$Pass1 = $_POST['pwd1'];

//check if user exists
$userCheck = "SELECT * FROM  users WHERE Email LIKE '$Email' OR StNum LIKE '$Stnum' LIMIT 1";
$result = mysqli_query($conn, $userCheck); //
$user = mysqli_fetch_assoc($result); // stores data as array 



//validation begins
if(empty($fname) || empty($Sname) || empty($Stnum) || empty($Email) || empty($Pass) || empty($Pass1)){
	$output = "<br>All fields are required!";
} else if (($user['Email'] === $Email) || ($user['StNum'] === $Stnum)){
	$output = "<br>User already exists!";
}else if($Pass !== $Pass1){
	$output = "<br>Passwords do not match!";
} elseif(strlen($Pass) <5){
	$output = "<br>Passwords is too short!";
}

/*
if($Pass === $Pass1) {
	$hpass = md5($Pass);
} else {
	echo "Passwords do not match!";
}

$sql="INSERT INTO users(Name, Sname, StNum, Email, Password) VALUES 
('$fname', '$Sname','$Stnum','$Email','$hpass')";

			//passes query to RDBMS 
$insert = mysqli_query($conn, $sql);

echo "<br>";

if($insert){
	echo "You have successfully registered!";
	header ('location: login.php');
} else{
	echo "An error occurred!";
} */

}//isset

?>
<!DOCTYPE html>
<html>
<head>
<title> Register </title>
<link rel="stylesheet" href="css/styles.css">
</head>
<body>

<center>
<h1> Register Page </h1><br>
						<!-- action = SENDS DATA TO THE REGISTER PAGE -->
<form method= "POST" action="Register.php" class = "borderReg">

<?php echo $output ?>

  <label for="fname"><br>Name:</label><br>
  <input type="text"  name="fname" ><br>
  <br>
  <label for="Sname">Surname:</label><br>
  <input type="text"  name="Sname" ><br>
  <br>
  <label for="Stnum">Student number:</label><br>
  <input type="text"  name="Stnum" ><br>
  <br>
  <label for="mail">Email:</label><br>
  <input type="email"  name="mail" ><br>
  <br>
  <label for="pwd">Password:</label><br>
  <input type="Password" name="pwd" ><br>
  <br>
  <label for="pwd1">Confirm password:</label><br>
  <input type="Password"  name="pwd1" ><br>
  <br>
  <input type="submit" name="Reg" value="Register">
  <a href="Login.php">Login</a>
  
</form>
</center>



<?php


?>
</body>
</html>