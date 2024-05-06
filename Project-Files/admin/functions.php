<?php
	function get_user_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"carshow");
		$user_count = "";
		$query = "select count(*) as user_count from register";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$user_count = $row['user_count'];
		}
		return($user_count);
	}
?>
<?php
	function get_booked_count(){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"carshow");
		$user_count = "";
		$query = "select count(*) as booked_count from booking";
		$query_run = mysqli_query($connection,$query);
		while($row = mysqli_fetch_assoc($query_run)){
			$user_count = $row['booked_count'];
		}
		return($user_count);
	}
?>
