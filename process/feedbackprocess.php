<?php
session_start();
$account_id=$_SESSION['id'];

if(isset($_POST)){
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$message=$_POST['about'];

include('../db/connection.php');

$sql="INSERT INTO `feedback`( `name`, `email`, `mobile`, `message`,`account_id`) VALUES ('$name','$email','$mobile','$message','$account_id')";

if($conn->query($sql)){
   echo " <script> alert('Your Feedback is sent.');  
   window.location.href='dashboard_c.php?smsg=successfully sent';
   </script> ";
 }else{
    echo $conn->error;
   echo "Error Occured";
 }
}
?>