<?php
session_start();
// $account_id=$_SESSION['id'];
$id = $_SESSION['id'] ;

$id1 = $_GET['id'] ;

   $n = $_POST['name'];
   $p = $_POST['person'];
   $pn = $_POST['people_names'];
   $m =  $_POST['mobile'];
   $e =  $_POST['email'];
   $dtg = $_POST['date_to_go'];
   $departure_date = $_POST['departure_date'];
   $loc =  $_POST['location']; 
   $nation =  $_POST['nationality']; 
   $price = $_POST['amt'];
//    $status= "ride ";
   $today = date(" F jS Y h:i:s A");


	$con=mysqli_connect("localhost","root","") or die("Can not connect to the database");
	mysqli_select_db($con,"main_project");


	$query = "UPDATE `bookings` SET 
	`name`='$n',
	`person`='$p',`people_names`='$pn',
	`mobile`='$m',`email`='$e',
	`date_to_go`='$dtg',`departure_date`='$departure_date',
	`address`='$loc',`country`='$nation' WHERE id= '$id1' ";

	if($con->query($query)){
		echo " <script> alert('Successfully updated booking history');  
		  window.location.href='booking_reports.php?smsg=successfully updated';
		  </script> ";
	  }else{
		echo $conn->error;
		echo "Error Occured";
	  }


?>
