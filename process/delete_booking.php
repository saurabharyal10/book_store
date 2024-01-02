<?php

$id=$_GET['id'];
$con=mysqli_connect("localhost","root","") or die("can not connect to the database");
	mysqli_select_db($con,"main_project");

	$query="delete from bookings where id=$id";

	$result=mysqli_query($con,$query) or die(mysqli_error($con));
	header('location:booking_reports.php');// redirecting to table page.

?>