<?php
session_start();

include("database.php");
include("functions.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewpoint" content="width=device-width, initialscale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link type="text/css" rel="stylesheet" href="css/login.css"></link>
    <link type="text/css" rel="stylesheet" href="css/index.css"></link>
    <link type="text/css" rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
    <script type="text/javascript" src="bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap/bootstrap.js"></script>
    <script type="text/javascript" src="bootstrap/bootstrap.bundle.js"></script>

    <!-- <title></title> -->
</head>

<body style="background-image:url('./images/upshs.jpg');">

    <div class="header" style="height: 100px;">
        <header>
            <img src="images/upshslogo.png" width="60" height="60">
            <div class="header-right">
                <!-- <a class="active" href="#home">Home</a> -->
                <a href="#contact" style="color: white">Contact</a>
                <a href="#about" style="color: white">About</a>
            </div>
        </header>
    </div>

    <form id="index" class="index.php" method="POST">
        <div class="container">
            <!-- <div class="row">
                <div class="col-sm-12">
                    <img src="images/upbanner.jpg" width="100%" style="box-shadow: 1px 5px 14px #999999">
                </div>
            </div> -->

            <br><br><br><br><br><br>
            <div class="center">
                <div class="container" style="background-image:url('./images/adbg.jpg'), width:200px;"> <br>
                <!-- <div class="jumbotron" style="background-color: whit;"> <br> -->
                    <center>
                        <input type="text" name="username" class="form-control" style="width: 300px" placeholder="Username">
                        <br>
                        <input type="password" name="password" class="form-control" style="width: 300px" placeholder="Password">
                        <br>
                        <button type="submit" class="btn btn-default" style="background-color:#4169e1; color: white">Login</button>
                        <br>
                        <a href="signup.php" style="margin: auto;">Don't have an account? Register here!</a>
                    </center>
                </div>
            </div>
        </div>
    </form>


    <div class="footer">
        <footer class="container-fluid text-center" style="background-color: #3e3f77; padding: 15px; color: white">
            <center>
                <p>University Practice Senior High School</p>
            </center>
        </footer>
    </div>

</body>
</html>


