<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<title>Car Showroom Management System </title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap-4.4.1-dist/js/juqery_latest.js"></script>
	<script type="text/javascript" src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
	<style type="text/css">
		#side_bar {
			background-color: #dee0e0;
			padding: 50px;
			width: 300px;
			height: 450px;

		}
	</style>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Car Showroom Management System</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item">
					<a class="nav-link" href="admin/index.php">Admin Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php">User Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php">Register</a>
				</li>
			</ul>
		</div>
	</nav><br>
	<span>
		<marquee>Book a car between 8:30 am to 10:00 am and GET a discount upto 15% for your first Lamborghini </marquee>
	</span><br><br>
	<div class="row">
		<div class="col-md-4" id="side_bar">
			<h5>SHOWROOM TIMING</h5>
			<ul>
				<li>Opening Time: 8:00 AM</li>
				<li>Closing Time: 9:00 PM</li>

			</ul>
			<h5>What we provide ?</h5>
			<ul>
				<li>CAR MAINTAINANCE</li>
				<li>CAR REPAIR</li>
				<li>CAR INSHURANCE</li>

			</ul>
		</div>
		<div class="col-md-8" id="main_content">
			<center>
				<h3>User Registration form</h3>
			</center>
			<form action="" method="post">
				<div class="form-group">
					<label for="name">Full Name:</label>
					<input type="text" name="name" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Email ID:</label>
					<input type="email" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Mobile Number:</label>
					<input type="mobile" name="mobile" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="name">Address:</label>
					<textarea rows="3" cols="40" class="form-control" name="address"></textarea>
				</div>
				<button type="submit" name="submit" class="btn btn-primary">register</button>
			</form>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
	$connection = mysqli_connect("localhost", "root", "");
	$db = mysqli_select_db($connection, "carshow");
	$query = "insert into register values(null,'$_POST[name]','$_POST[email]','md5($_POST[password])',$_POST[mobile],'$_POST[address]')";
	$query_run = mysqli_query($connection, $query);
?>
	<script type="text/javascript">
		alert("Registration successful....You may login now.")
		window.location.href = "index.php";
	</script>
<?php }
?>