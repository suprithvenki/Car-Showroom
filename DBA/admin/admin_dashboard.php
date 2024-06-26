<?php
require('functions.php');




session_start();


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<title>Admin Dashboard </title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
			<font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name']; ?></strong></span></font>
			<font style="color: white"><span><strong>Email: <?php echo $_SESSION['email']; ?></strong></span></font>
			<ul class="nav navbar-nav navbar-right">

				<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
			</ul>
		</div>
	</nav><br>
	<span>
		<marquee>Book a car between 8:30 am to 10:00 am and GET a discount upto 15% for your first Lamborghini</marquee>
	</span><br><br>
	<div class="row">
		<div class="col-md-3">

		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd">
		<div class="container-fluid">
			<ul class="nav navbar-nav navbar-center">
				<li class="nav-item">
					<a href="admin_dashboard.php" class="nav-link">Dashboard</a>
				</li>



				<li class="nav-item">
					<a href="book.php" class="nav-link">Book car</a>
				</li>
		</div>
	</nav>
	<div class="row">
		<div class="col-md-3">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Registered Customers:</div>
				<div class="card-body">
					<p class="card-text">No. of total customers: <?php echo get_user_count(); ?> </p>
					<a href="regusers.php" class="btn btn-danger" target="_blank">View Registered Customers</a>
				</div>
			</div>
		</div>



		<div class="col-md-3">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">CARS Booked:</div>
				<div class="card-body">
					<p class="card-text"> </p>
					<a href="bookedcar.php" class="btn btn-success" target="_blank">View booked cars</a>
				</div>
			</div>
		</div>




		<div class="col-md-3">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">Specs of cars Booked:</div>
				<div class="card-body">
					<p class="card-text"> </p>
					<a href="specscar.php" class="btn btn-success" target="_blank">View Specs of booked cars</a>
				</div>
			</div>
		</div>


		<div class="col-md-3">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header">bill</div>
				<div class="card-body">
					<p class="card-text"> </p>
					<a href="bill.php" class="btn btn-success" target="_blank">View Bill of booked cars</a>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>