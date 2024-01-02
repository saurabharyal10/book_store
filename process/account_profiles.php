<?php
    include("../include/header_a.php");
	session_start();
?>

<html>
<head>
    <title>Account Profiles</title>
	<link rel="stylesheet" href="../css/myheader.css">
</head>

<h2 style="margin-left:42px; margin-top:27px; margin-bottom:21px;">User Accounts</h2>
<table border="1" width="98%" height=10%; style="margin-left:18px;" cellspacing=0;>
	<tr>
        <th>ID</th>
		<th>Name</th>
		<th>Password</th>
		<th>Mobile</th>
		<th>Email</th>
		<th>Date of Birth</th>
        <th>Address</th>
        <th>Gender</th>
        <th>Country</th>
        <th>Photo</th>
		<th colspan="2">Action</th>

<?php
// if(!isset($_SESSION['admin'])){
// 	header('location:account_profiles.php');
// }

$conn=mysqli_connect("localhost","root","") or die("can not connect to the database");
	mysqli_select_db($conn,"main_project");

	$query="select * from accounts ORDER BY accounts.id DESC";

	$result= mysqli_query($conn,$query) or die(mysqli_error($conn));
	
	while($arr=mysqli_fetch_array($result,MYSQLI_ASSOC))
	{
	echo "<tr>";
	$id=$arr['id'];
	
	echo "<td>".$arr['id']."</td>";
	echo "<td>".$arr['name']."</td>";
	echo "<td>".$arr['password']."</td>";
	echo "<td>".$arr['mobile']."</td>";
	echo "<td>".$arr['email']."</td>";
	echo "<td>".$arr['date_of_birth']."</td>";
    echo "<td>".$arr['address']."</td>";
    echo "<td>".$arr['gender']."</td>";
    echo "<td>".$arr['country']."</td>";
    echo "<td>".$arr['photo']."</td>";
	// echo "<td> Edit</td>";
	// echo "<td ><a href='update_form.php?id=$id' style='color:black;'> Edit </a></td>";
	echo "<td><a href='delete_account.php?id= $id' style='color:black;' onclick='return confirm(\"Are you sure to delete your account?\");'> Delete </a></td>";
	echo "<td><a href='viewProfile.php?id=$id' style='color:black;'> View </a></td>";
	echo "</tr>";
}


?>
</table>
<br>
</html>