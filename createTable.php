<?php

$sqla = "CREATE TABLE  `users` (
  `userID` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Sname` varchar(50) NOT NULL,
  `StNum` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(200) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1";


$createTbl = mysqli_query($conn, $sqla);

if(!$createTbl){
	
	echo "<br>Error " .mysqli_error($conn);
	
} else {
	echo "<br>Table successfully created!";
}
?>