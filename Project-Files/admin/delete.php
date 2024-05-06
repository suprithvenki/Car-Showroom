<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"carshow");
	$query = "delete from register where id = $_GET[bn]";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("customer Deleted...");
	window.location.href = "regusers.php";
</script>
