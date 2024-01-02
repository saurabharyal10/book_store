<?php
    include("../db/connection.php");
    include("../include/header_c.php");
    
    session_start();
    $account_id=$_SESSION['id'];    
    if(isset($_POST)){
   
   $n = $_POST['name'];
   $p = $_POST['person'];
   $pn = $_POST['people_names'];
   $m =  $_POST['mobile'];
   $e =  $_POST['email'];
   $dtg = $_POST['date_to_go'];
   $departure_date = $_POST['departure_date'];
   $loc =  $_POST['location']; 
   $nation =  $_POST['nationality']; 
  //  $image =  $_POST['image'];
   $price = $_POST['amt'];
   $totalAmt = $_POST['tAmt'];
   $status= "pending" ;
   $today = date("  F jS Y h:i:s A");



   if(!isset($_SESSION['book'])){
       $newData = array($n,$p,$pn,$m,$e,$dtg,$departure_date,$loc,$nation,$price,$totalAmt,$status,$today);
       $book = array();
       array_push($book,$newData);
       $_SESSION['book'] = $book;
      //  print_r($_SESSION['book']);

   }else{
       $book = $_SESSION['book'];
       $newData = array($n,$p,$pn,$m,$e,$dtg,$departure_date,$loc,$nation,$price,$totalAmt,$status,$today);
       array_push($book,$newData);
       $_SESSION['book'] = $book;
      //  print_r($_SESSION['book']);
   }

}

?>

<html?>
  <head>
    <title>Booking Page</title>
    <link rel="stylesheet" href="../css/bookpage.css">
    <link rel="stylesheet" href="../css/myheader.css">
    <style>
        .hd{
      font-size: 26px;
      margin-top: 78px;
      text-transform: uppercase;
      color: black;
      margin-left: 66px;
      display: flex;
      text-align: center;
    }
    </style>
  </head>
<body>

<div class="am_heading">
  <h2 class="hd" style="margin:42px;">User Booking Confirmation </h2> 
</div>

<form method="POST">
    <h3 align="left"><span style="margin-left:321px; font-size:23px; position:absolute; top:172px; left:200px;">Name : <?php echo $n; ?></span></h3>
    <h3 align="left"><span style="margin-left:321px; font-size:23px; position:absolute; top:212px; left:200px;">Category : <?php echo $p; ?></span></h3>
    <h3 align="left"><span style="margin-left:321px; font-size:23px; position:absolute; top:252px; left:200px;">Mobile : <?php echo $m;?></span> </h3>
    <h3 align="left"><span style="margin-left:321px; font-size:23px; position:absolute; top:292px; left:200px;">People Names : <?php echo $pn; ?></span></h3>
    <h3 align="left"><span style="margin-left:321px; font-size:23px; position:absolute; top:332px; left:200px;">Email : <?php echo $e;?> </span></h3>
    <h3 align="left"><span style="margin-left:321px; font-size:23px; position:absolute; top:372px; left:200px;">Date To Go : <?php echo $dtg;?> </span></h3>
    <h3 align="left"><span style="margin-left:321px; font-size:23px; position:absolute; top:412px; left:200px;">Departure Date : <?php echo $departure_date;?> </span></h3>
    <h3 align="left"><span style="margin-left:321px; font-size:23px; position:absolute; top:452px; left:200px;">Amount : <?php echo $price;?> </span></h3>
    <h3 align="left"><span style="margin-left:321px; font-size:23px; position:absolute; top:492px; left:200px;">Address : <?php echo $loc;?></span> </h3>
    <h3 align="left"><span style="margin-left:321px; font-size:23px; position:absolute; top:532px; left:200px;">Country : <?php echo $nation;?></span></h3>
  
</form>



<form action="https://uat.esewa.com.np/epay/main" class="foresewa" method="POST">

    <?php 

    $pid = rand();
    $success = 'http://localhost/mis/process/bookingprocess.php';
  ?>

    <input value="Pay With Esewa" type="submit" id="esewa" style="margin-left:550px; margin-top:402px; color:white; background-color:green; height:36px; width: 164px; border-radius: 7px 7px;">
    <input value="0" name="txAmt" type="hidden">
    <input value="<?php echo $price;  ?>" name="amt" type="hidden">
    <input value="<?php echo $totalAmt;  ?>" name="tAmt" type="hidden">
    <input value="0" name="psc" type="hidden">
    <input value="0" name="pdc" type="hidden">
    <input value="EPAYTEST" name="scd" type="hidden">
    <input value="<?php  echo $pid; ?>" name="pid" type="hidden">
    <input value="<?php echo $success ?>" type="hidden" name="su">
    <input value="http://merchant.com.np/page/esewa_payment_failed?q=fu" type="hidden" name="fu">
</form>
</body>
</html>