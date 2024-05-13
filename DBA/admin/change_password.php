<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<title>User Dashboard </title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<!-- CSS only -->
	<!-- <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1-dist/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1-dist/js/bootstrap.min.js"></script> -->
	<style type="text/css">
		#side_bar {
			background-color: #dee0e0;
			padding: 50px;
			width: 300px;
			height: 500px;

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
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="view_profile.php">View Profile</a>
						<a class="dropdown-item" href="edit_profile.php"> Edit Profile</a>
						<a class="dropdown-item" href="change_password.php">Change Password</a>
					</div>
				</li>
				<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
			</ul>
		</div>
	</nav><br>
	<span>
		<marquee>Book a car between 8:30 am to 10:00 am and GET a discount upto 15% for your first Lamborghini</marquee>
	</span><br><br>
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form action="" method="post">
				<div class="form-group">
					<label>Enter Email:</label>
					<input type="email" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label>Enter New Password:</label>
					<input type="password" name="pwd" class="form-control">
				</div>
				<div class="form-group">
					<label>Repeat New Password:</label>
					<input type="password" name="cpwd" class="form-control">
				</div>

				<button type="submit" name="submit" class="btn btn-primary">Update Password</button>
			</form>
		</div>

		<div class="col-md-4"></div>



		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<!-- JavaScript Bundle with Popper -->
</body>

</html>

<?php
include_once('db.php');
if (isset($_REQUEST['submit'])) {
	$email = $_REQUEST['email'];
	$pwd = md5($_REQUEST['pwd']);
	$cpwd = md5($_REQUEST['cpwd']);

	$check_email = mysqli_query($conn, "SELECT * FROM register WHERE email='$email'");


	if (mysqli_num_rows($check_email) > 0) {
		if ($pwd == $cpwd) {
			$reset_pwd = mysqli_query($conn, "UPDATE register SET password='$pwd' WHERE email='$email'");
			if ($reset_pwd) {
				echo '<script>alert("Your password updated successfully. Click OK to login."); 
                window.location.href = "user_dashboard.php";
                </script>';
			} else {
				echo '<script>alert("Error while updating password.");
                window.location.href = "change_password.php";
                </script>';
			}
		} else {
			echo '<script>alert("Password and Confirm Password do not match.");
            window.location.href = "change_password.php";
            </script>';
		}
	} else {
		echo '<script>alert("Invalid email address. Please enter a valid registered email.");</script>';
	}
} ?>