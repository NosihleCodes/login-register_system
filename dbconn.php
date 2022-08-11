<?php

$server = 'localhost';
$name = 'root';
$pass = '';
$db = 'ST10130389_POE'; //name of db

//conn string		//establishes a connection to db mysqliconnect--returns true/false
$conn = mysqli_connect ($server, $name, $pass); //connecion w no db 

if(!$conn) {
	die('Could not connect: ' .mysqli_error());
}else{
	echo "You have successfully connected";
}

//select the DB STORED DB IN SELECTDB VAR
$selectDB = mysqli_select_db($conn, $db); //returns TRUE/FALSE

if(!$selectDB){
	
	$sql = "CREATE DATABASE ".$db. ""; //creating db
	$createDB = mysqli_query($conn, $sql); //creates the db 
	echo "<br>";
	echo "Database: $db created successfully!";
	
} else {
	echo "<br>";
	echo "Database: $db already exists!";
}

$conn = mysqli_connect ($server, $name, $pass, $db); //connecion w db 


?>