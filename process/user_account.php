<?php
    include("../db/connection.php");
    include("../include/header_c.php");

  session_start();
  // $id =$_SESSION['user'];
  $u= $_SESSION['user'] ;

 ?>
<html>
 <head>
     <title> Account Profile </title>
     <link rel="stylesheet" href="../css/user_account.css">    
     <link rel="stylesheet" href="../css/myheader.css">  
 </head>
 <body>

<div class="am_heading">
  <h2 class="hd" style="margin:42px;">User Account Information</h2> 
</div>

<div class="rowbar">
  <div class="container">
    <div class="col-md-9">
      <?php

          $query="SELECT * from accounts where name='$u' ";
          $result=mysqli_query($conn,$query) or die(mysqli_error($conn));

         $arr=mysqli_fetch_array($result,MYSQLI_ASSOC);

        ?>
        
      <div class="profile">
      <h3 class="ad"><span style="margin-left:521px; font-size:23px; position:absolute; top:172px; left:60px;">Profile of <?php echo $arr['name']; ?></span> </h3>

        <h3 align="left"><span style="margin-left:321px; font-size:23px; position:absolute; top:242px; left:42px;"> Name : <?php echo $arr['name']; ?></span></h3>
        <h3 align="left"><span style="margin-left:321px; font-size:23px; position:absolute; top:286px; left:42px;">Mobile : <?php echo $arr['mobile'];?></span> </h3>
        <h3 align="left"><span style="margin-left:321px; font-size:23px; position:absolute; top:326px; left:42px;">Email : <?php echo $arr['email'];?> </span></h3>
        <h3 align="left"><span style="margin-left:321px; font-size:23px; position:absolute; top:366px; left:42px;">Date of Birth : <?php echo $arr['date_of_birth'];?> </span></h3>
        <h3 align="left"><span style="margin-left:321px; font-size:23px; position:absolute; top:406px; left:42px;">Address : <?php echo $arr['address'];?></span> </h3>
        <h3 align="left"><span style="margin-left:321px; font-size:23px; position:absolute; top:446px; left:42px;">Gender : <?php echo $arr['gender'];?> </span></h3>
        <h3 align="left"><span style="margin-left:321px; font-size:23px; position:absolute; top:496px; left:42px;">Country : <?php echo $arr['country'];?></span></h3>
      </div>
    </div>

    <div class="col-md-3">  
    <span style="margin-left:921px; font-size:23px; position:absolute; top:242px; right:182px;"><img src="../img/<?php echo $arr['photo']; ?>" height="250px" width="250px" value="photo" class="img" ></span>
    </div>
  </div>
</div>

</body>
</html>