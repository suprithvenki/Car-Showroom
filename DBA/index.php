<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<title>Car Show Management System </title>
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

		body {
			background: url(C.webp);
			background-repeat: no-repeat;
			background-size: contain;
			background-position: center;
			background-attachment: fixed;

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
					<a class="nav-link" href="signup.php">Register</a>
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
				<li>Opening Timing: 8:00 AM</li>
				<li>Closing Timing: 9:00 PM</li>

			</ul>
			<h5>What we provide ?</h5>
			<ul>
				<li>CAR MAINTAINANCE</li>
				<li>CAR REPAIR</li>
				<li>CAR INSURANCE</li>

			</ul>
		</div>
		<div class="col-md-8" id="main_content">
			<center>
				<h3>User Login Form</h3>
			</center>
			<form action="" method="post">
				<div class="form-group w-50">
					<label for="name">Email ID:</label>
					<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group w-50">
					<label for="name">Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<button type="submit" name="login" class="btn btn-primary">Login</button>
			</form>
			<?php
			session_start();
			if (isset($_POST['login'])) {
				$connection = mysqli_connect("localhost", "root", "");
				$db = mysqli_select_db($connection, "carshow");
				$query = "select * from register where email = '$_POST[email]'";
				$query_run = mysqli_query($connection, $query);
				while ($row = mysqli_fetch_assoc($query_run)) {

					if ($row['email'] == $_POST['email']) {
						if ($row['password'] == $_POST['password']) {
							$_SESSION['name'] = $row['name'];
							$_SESSION['email'] = $row['email'];
							$_SESSION['id'] = $row['id'];
							header("Location:user_dashboard.php");
						} else {
			?>
							<br><br>
							<center><span class="alert-danger">Wrong Password</span></center>
			<?php
						}
					}
				}
			}

			?>


</body>

</html>