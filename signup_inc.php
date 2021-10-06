<?php
    include("database.php");

    //Code for posting information
	$fname = $_POST['fname'];
	$sname = $_POST['sname'];
	$username = $_POST['username'];
	$pass = $_POST['pass'];

    $query = "INSERT into 'users' (fname, sname, username, pass) VALUES ($fname', '$sname',  '$username', '$pass')";
    mysqli_query($conn, $query);

    header("Location: index.php?signup=sucessful");