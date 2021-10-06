<?php
    include("database.php");

    //Code for posting information
	$sname = $_POST['sname'];
	$fname = $_POST['fname'];
	$oname = $_POST['oname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$birthday = $_POST['birthday'];
	$radio = $_POST['radio'];
	$raddress = $_POST['raddress'];
	$paddress = $_POST['paddress'];
	$residence = $_POST['residence'];
	$nationality = $_POST['nationality'];
	$hometown = $_POST['hometown'];
	$religion = $_POST['religion'];
	$can_number = $_POST['can_number'];
	$year = $_POST['year'];



    $query = "INSERT into 'candidate' (sname, fname, oname, email, phone, birthday, radio, raddress, paddress, residence, nationality, hometown, religion) VALUES ($sname', '$fname',  '$oname', '$email', '$phone', '$birthday', '$radio', '$raddress', '$paddress', '$residence', '$nationality', '$hometown', '$religion', '$can_number', '$year')";
    mysqli_query($conn, $query);

    header("Location: index.php?home=successfully applied");