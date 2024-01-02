<?php
  include('../db/connection.php');
  include('../include/header_c.php');

session_start(); 

?>

<html>
<head>
  <title>Customer Panel</title>
   <link rel="stylesheet" href="../css/dashboard_c.css">      
   <link rel="stylesheet" href="../css/myheader.css">
</head>
<body>
 

<div class="am_heading">
  <h2 class="hd">Welcome to Serenity Oasis</h2> 
</div>

<div class="rowbar">
  <div class="container">
    <div class="col-md-9">
      <form style="margin-left: -48px;">
        <div class="form-field">
          
        <span style="position:absolute; top:212px; left:221px;"><button type="Submit" class = "submit_btn"><a href="bookpage.php" >Booking Page</a></button><br/></span>
        <span style="position:absolute; top:262px; left:221px;"><button type="Submit" class = "submit_btn"><a href="user_booking_reports.php">Bookings History</a></button><br/></span>
        <span style="position:absolute; top:312px; left:221px;"><button type="Submit" class = "submit_btn"><a href="userStatus.php">User Status</a></button><br/></span>
        <span style="position:absolute; top:362px; left:221px;"><button type="Submit" class = "submit_btn"><a href="user_account.php">Profile</a></button><br/></span>
        <span style="position:absolute; top:412px; left:221px;"><button type="Submit" class = "submit_btn"><a href="feedback.php">Any Feedback</a></button></span>
        <span style="position:absolute; top:462px; left:221px;"><button type="Submit" class = "submit_btn"><a href="logoutprocess.php">Logout</a></button></span>
        </div>
        </form>
    </div>

  </div>
</div>


</body>
</html>