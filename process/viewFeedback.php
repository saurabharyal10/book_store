<?php
    include("../include/header_a.php");
	session_start();
?>

<html>
<head>
    <title>User Feedbacks</title>
	<link rel="stylesheet" href="../css/myheader.css">
</head>

<h2 style="margin-left:42px; margin-top:27px; margin-bottom:21px;">User Feedbacks</h2>
	
<table border="1" width="98%" style="margin-left:20px; " cellspacing=0;>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Mobile</th>
		<th>Email</th>
        <th>Message</th>
		<th>Action</th>
<?php
// if(!isset($_SESSION['admin'])){
// 	header('location:booking_reports.php');
// }

$conn=mysqli_connect("localhost","root","") or die("can not connect to the database");
	mysqli_select_db($conn,"main_project");

	$query="SELECT * from feedback ";

	$result= mysqli_query($conn,$query) or die(mysqli_error($conn));
	
	while($arr=mysqli_fetch_array($result,MYSQLI_ASSOC))
	{
	echo "<tr>";
	$id=$arr['id'];
	
	echo "<td>".$arr['id']."</td>";
	echo "<td>".$arr['name']."</td>";
	echo "<td>".$arr['mobile']."</td>";
	echo "<td>".$arr['email']."</td>";
    echo "<td>".$arr['message']."</td>";
	// echo "<td ><a href='update_form.php?id=$id' style='color:black;'> Edit </a></td>";
	echo "<td><a href='delete.php?id= $id' style='color:black;' onclick='return confirm(\"Are you sure to delete your booking?\");'> Delete </a></td>";
	// echo "<td><a href='viewProfile.php?id=$id' style='color:black;'> View </a></td>";
	echo "</tr>";
}

?>
</table>
<br>
</html>