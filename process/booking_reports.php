<?php
    include("../include/header_a.php");
	// session_start();
?>

<html>
<head>
    <title>Booking Reports</title>
	<link rel="stylesheet" href="../css/myheader.css">
</head>

<h2 style="margin-left:42px; margin-top:27px; margin-bottom:21px;">Booking Reports</h2>
	
<table border="1" width="98%" style="margin-left:10px; " cellspacing=0;>
	<tr>
		<th>S.No</th>
		<th>ID</th>
		<th>Name</th>
		<th>Category</th>
        <th>People Names</th>
		<th>Mobile</th>
		<th>Email</th>
		<th>Date To Go</th>
        <th>Departure Date</th>
		<th>Booking Date</th>
        <th>Address</th>
        <th>Country</th>
        <!-- <th>Photo</th> -->
		<th>Price</th>
		<th colspan="3">Action</th>
<?php
// if(!isset($_SESSION['admin'])){
// 	header('location:booking_reports.php');
// }

$conn=mysqli_connect("localhost","root","") or die("can not connect to the database");
	mysqli_select_db($conn,"main_project");

	$query="select * from bookings WHERE bookings.remarks = 'complete' ORDER BY bookings.id DESC";

	$result= mysqli_query($conn,$query) or die(mysqli_error($conn));
	
	while($arr=mysqli_fetch_array($result,MYSQLI_ASSOC))
	{
	echo "<tr>";
	$id=$arr['id'];

	echo "<td>".$arr['id']."</td>";	
	echo "<td>".$arr['account_id']."</td>";
	echo "<td>".$arr['name']."</td>";
	echo "<td>".$arr['person']."</td>";
	echo "<td>".$arr['people_names']."</td>";
	echo "<td>".$arr['mobile']."</td>";
	echo "<td>".$arr['email']."</td>";
    echo "<td>".$arr['date_to_go']."</td>";
    echo "<td>".$arr['departure_date']."</td>";
    echo "<td>".$arr['booking_date']."</td>";
    echo "<td>".$arr['address']."</td>";
    echo "<td>".$arr['country']."</td>";
    // echo "<td>".$arr['photo']."</td>";
    echo "<td>".$arr['price']."</td>";
	echo "<td ><a href='update_booking.php?id=$id' style='color:black;'> Edit </a></td>";
	echo "<td><a href='delete_booking.php?id= $id' style='color:black;' onclick='return confirm(\"Are you sure to delete your booking?\");'> Delete </a></td>";
	// echo "<td><a href='viewbookinghistory.php?id=$id' style='color:black;'> View </a></td>";
	echo "</tr>";
}


	

?>
</table>
<br>
</html>