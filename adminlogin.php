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
<body style="background-image:url(./images/adminloginbg.jpg);">

	<form class="container rounded shadow p-5 my-5 bg-dark text-white" action="" method="">
		<h4>LOGIN</h4>
		<div class="container">
			<label for="username">Username</label>
		    <input type="text" name="username" placeholder="Username" required="">
		    <br><br>
		    <label for="pass">Password</label>
		    <input type="password" name="pass" placeholder="Password" required="">
		    <br><br>
		    <div class="clearfix">
		        <button type="submit" class="btn btn-primary">Login</button>
		        <button type="button" class="btn btn-danger">Cancel</button>
			</div>
		</div>

	</form>

</body>
</html>