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
	<!-- <div class="header">
		
	</div> -->

	<form id="admissions" class="container rounded shadow p-5 my-5 bg-dark text-white" action="admissions_inc.php" method="POST">
		<div class="container" style="margin: auto">
			<div>
				<h1>ADMISSION FORM</h1>
			    <hr>

			    <div class="form-group row">
			    	<label for="name" class="col-sm-1 col-form-label">Surname</label><br>
			        <div class="col-sm-2">
			        	<input type="text" class="form-control" placeholder="Surname" name="sname" required=""><br>
			        </div>
			    </div>

			    <div class="form-group row">
			    	<label for="name" class="col-sm-1 col-form-label">First Name</label><br>
			        <div class="col-sm-2">
			        	<input type="text" class="form-control" placeholder="First Name" name="fname" required=""><br>
			        </div>
			    </div>

			    <div class="form-group row">
			    	<label for="name" class="col-sm-1 col-form-label">Other Name(s)</label><br>
			        <div class="col-sm-2">
			        	<input type="text" class="form-control" placeholder="Other Name(s)" name="oname" required="false"><br>
			        </div>
			    </div>

			    <div class="form-group row">
			    	<label for="email" class="col-sm-1 col-form-label">Email</label><br>
			        <div class="col-sm-2">
			        	<input type="text" class="form-control" placeholder="Email" name="email" required=""><br>
			        </div>
			    </div>

			    <div class="form-group row">
			    	<label for="Number" class="col-sm-1 col-form-label">Phone Number</label><br>
			        <div class="col-sm-2">
			        	<input type="Number" class="form-control" placeholder="Phone Number" name="phone" required=""><br>
			        </div>
			    </div>

			    <div class="form-group row">
			    	<label for="birthday" class="col-sm-1 col-form-label">Date of Birth</label><br>
			        <div class="col-sm-2">
			        	<input type="date" class="form-control" placeholder="Date of Birth" id="birthday" name="birthday" required=""><br>
			        </div>
			    </div>

			    <label class="container">Male
		            <input type="radio" name="radio">
		            <span class="checkmark"></span>
		        </label><br>

		        <label class="container">Female
		            <input type="radio" name="radio">
		            <span class="checkmark"></span>   
		        </label><br>

		        <div class="form-group row">
		        	<label for="address" class="col-sm-1 col-form-label">Residential Address</label>
		        	<div class="col-sm-2">
		        		<input type="text" class="form-control" placeholder="Residential Address" name="raddress" required=""><br>
		        	</div>
		        </div>

		        <div class="form-group row">
		        	<label for="address" class="col-sm-1 col-form-label">Postal Address</label>
		        	<div class="col-sm-2">
		        		<input type="text" class="form-control" placeholder="Postal Address" name="paddress" required=""><br>
		        	</div>
		        </div>

		        <div class="form-group row">
		        	<label for="address" class="col-sm-1 col-form-label">Place of Residence</label>
		        	<div class="col-sm-2">
		        		<input type="text" class="form-control" placeholder="Place of Residence" name="residence" required=""><br>
		        	</div>
		        </div>

		        <div class="form-group row">
		        	<label class="col-sm-1 col-form-label">Nationality</label>
		        	<div class="col-sm-2">
		        		<select name="nationality" class="form-control selectpicker">
		        		    <option value="">Please select your nationality</option>
		        		    <option>American</option>
		        		    <option>Ghanaian</option>
		        		    <option>Nigerian</option>
		        		</select><br>
		        	</div>
		        </div>

		        <div class="form-group row">
		        	<label for="name" class="col-sm-1 col-form-label">Hometown</label>
		        	<div class="col-sm-2">
		        		<input type="" class="form-control" placeholder="Enter Hometown" name="hometown" required=""><br>
		        	</div>
		        </div>

		        <div class="form-group row">
		        	<label for="name" class="col-sm-1 col-form-label">Religion</label>
		        	<div class="col-sm-2">
		        		<select name="religion" class="form-control selectpicker">
		        		    <option value="">Please select your religion</option>
		        		    <option>Christian</option>
		        		    <option>Muslim</option>
		        		    <option>Traditional</option>
		        		    <option>Others</option>
		        		</select><br>
		        	</div>
		        </div>

		        <div class="form-group row">
		        	<label for="number" class="col-sm-1 col-form-label">Candidate Number</label>
		        	<div class="col-sm-2">
		        		<input type="number" class="form-control" placeholder="Enter your Index Number" name="can_number" required=""><br>
		        	</div>
		        </div>

		        <div class="form-group row">
		        	<label for="number" class="col-sm-1 col-form-label">Year of Examination</label>
		        	<div class="col-sm-2">
		        		<select name="year" class="form-control selectpicker">
		        		    <option value="">Please select year of exams</option>
		        		    <option>2020</option>
		        		    <option>2019</option>
		        		    <option>2018</option>
		        		    <option>2017</option>
		        		</select><br>
		        	</div>
		        </div>

			    <div class="clearfix">
				    <button type="submit" class="btn btn-primary">Submit</button>
				    <button type="button" class="btn btn-danger">Cancel</button>
			    </div>
			</div>
		</div>
	</form>

	<!-- <div class="footer">
		
	</div> -->
</body>
</html>