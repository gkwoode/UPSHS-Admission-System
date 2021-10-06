<?php

// Params to connect to the database
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "upshs";

// Connection to the database
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn){
	die("Connection failed: " . mysqli_connect_error());
}

// if (!mysqli_select_db($conn, 'upshs')) {
// 	echo "Database not selected.";
// }
?>