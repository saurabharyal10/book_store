<?php
include('../db/connection.php');
session_start();
$account_id=$_SESSION['id'];
$data = $_SESSION['book'];


foreach($data as $arr){

   $n = $arr[0];
   $p = $arr[1];
   $pn = $arr[2];
   $m =  $arr[3];
   $e =  $arr[4];
   $dtg = $arr[5];
   $departure_date = $arr[6];
   $loc =  $arr[7]; 
   $nation =  $arr[8];
  //  $image =  $_POST['image'];
  $price = $arr[9];
  date_default_timezone_set("Asia/Kathmandu");
   $today = date("  F jS Y h:i:s A");
   $status= "pending" ;


   $sql = "INSERT INTO `bookings`(
      `name`, `person`, `people_names`, `mobile`, `email`, `date_to_go`, `departure_date`, `address`, `country`, `price`, `status`, `account_id`, `booking_date`) 
      VALUES ('$n','$p','$pn','$m','$e','$dtg','$departure_date','$loc','$nation','$price','$status','$account_id','$today')";
  if($conn->query($sql)){
    echo " <script> alert('Successfully request for booking');  
      window.location.href='dashboard_c.php?smsg=successfully requested';
      </script> ";
  }else{
    echo $conn->error;
    echo "Error Occured";
  }
}

?>