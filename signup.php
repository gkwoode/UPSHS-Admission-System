<?php 
include "database.php";
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
</head>

<body style="background-image:url(./images/background.jpg);">
	<!-- <div class="header bg-dark">
		
	</div> -->

	<form id="admissions" class="container" action="admissions_inc.php" method="POST">
		<div class="container rounded shadow p-5 my-5 bg-dark text-white" style="margin: auto, ">
			<div class="mx-auto">
				<h1>SIGN UP</h1>
			    <hr>

			    <div class="form-group row">
			    	<label for="name" class="col-sm-1 col-form-label">First name</label><br>
			        <div class="col-sm-2">
			        	<input type="text" class="form-control" placeholder="First name" name="fname" required=""><br>
			        </div>
			    </div>

			    <div class="form-group row">
			    	<label for="name" class="col-sm-1 col-form-label">Surname</label><br>
			        <div class="col-sm-2">
			        	<input type="text" class="form-control" placeholder="Surname" name="sname" required=""><br>
			        </div>
			    </div>

			    <div class="form-group row">
			    	<label for="name" class="col-sm-1 col-form-label">Username</label><br>
			        <div class="col-sm-2">
			        	<input type="text" class="form-control" placeholder="Username" name="username" required=""><br>
			        </div>
			    </div>

			    <div class="form-group row">
			    	<label for="password" class="col-sm-1 col-form-label">Password</label><br>
			        <div class="col-sm-2">
			        	<input type="password" class="form-control" placeholder="Password" name="pass" required=""><br>
			        </div>
			    </div>

			    <div class="clearfix">
				    <button type="submit" class="btn btn-primary">Submit</button>
				    <button type="button" class="btn btn-danger">Cancel</button>
			    </div>
			    <br>
			</div>
		</div>
	</form>

	<!-- <div class="footer bg-dark">
		
	</div> -->
</body>
</html>