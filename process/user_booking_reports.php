<?php
    include("../include/header_c.php");
	session_start();
	$user = $_SESSION['name'];
	
?>

<html>
<head>
    <title>Booking Reports History</title>
	<link rel="stylesheet" href="../css/myheader.css">
</head>

<h2 style=" margin:21px; margin-bottom:42px;"> Booking History</h2>
<table border="1" width="96%" cellspacing="0" style="margin-left:21px;">
	<tr>
        <th>S.No.</th>
		<th>Name</th>
		<th>Person</th>
		<th>People Names</th>
		<th>Mobile</th>
        <th>Email</th>
        <th>Date To Go</th>
        <th>Departure Date</th>
        <th>Address</th>
        <th>Country</th>
        <th>Booking Date</th>
        <th>Price</th>
		<th colspan="3">Action</th>
<?php
// if(!isset($_SESSION['admin'])){
// 	header('location:account_profiles.php');
// }

$conn=mysqli_connect("localhost","root","") or die("can not connect to the database");
	mysqli_select_db($conn,"main_project");

    $query="select * from bookings WHERE name ='$user' AND remarks='complete'   ";
	// $query="select * from bookings where id=$id";

	$result= mysqli_query($conn,$query) or die(mysqli_error($conn));
	
	while($arr=mysqli_fetch_array($result,MYSQLI_ASSOC))
	{
	echo "<tr>";
	$id=$arr['id'];
	$_SESSION['id']=$id;

	
	echo "<td>".$arr['id']."</td>";
	echo "<td>".$arr['name']."</td>";
    echo "<td>".$arr['person']."</td>";
    echo "<td>".$arr['people_names']."</td>";
	echo "<td>".$arr['mobile']."</td>";
	echo "<td>".$arr['email']."</td>";
    echo "<td>".$arr['date_to_go']."</td>";
    echo "<td>".$arr['departure_date']."</td>";
    echo "<td>".$arr['address']."</td>";
    echo "<td>".$arr['country']."</td>";
    echo "<td>".$arr['booking_date']."</td>";
    echo "<td>".$arr['price']."</td>";
	// echo "<td> Edit</td>";
	// echo "<td ><a href='update_form.php?id=$id' style='color:black;'> Edit </a></td>";
	// echo "<td><a href='delete.php?id= $id' style='color:black;' onclick='return confirm(\"are you sure to delete?\");'> Delete </a></td>";
	echo "<td><a href='viewProfile.php?id=$id' style='color:black;'> View </a></td>";
	echo "</tr>";
}


?>
</table>
<br>
</html>