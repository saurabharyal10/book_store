<?php
session_start();

$id=$_GET['id'];
$name=$_POST['name'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$address=$_POST['location'];
$gender=$_POST['gender'];
$country=$_POST['nationality'];
$photo=$_POST['photo'];


	$con=mysqli_connect("localhost","root","") or die("Can not connect to the database");
	mysqli_select_db($con,"main_project");

	
	$query="UPDATE `accounts` SET 
	`name`='$name',
	`password`='$password',
	`mobile`='$mobile',
	`email`='$email',
	`address`='$address',
	`gender`='$gender',
	`country`='$country',
	`photo`='$photo' WHERE id=$id";

	$result=mysqli_query($con,$query) or die(mysqli_error($con));
	require 'account_profiles.php';




?>
