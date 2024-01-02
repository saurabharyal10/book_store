<?php

$id=$_GET['id'];
$con=mysqli_connect("localhost","root","") or die("can not connect to the database");
	mysqli_select_db($con,"main_project");

	$query="delete from accounts where id=$id";

	$result=mysqli_query($con,$query) or die(mysqli_error($con));
	header('location:account_profiles.php');// redirecting to table page.

?>