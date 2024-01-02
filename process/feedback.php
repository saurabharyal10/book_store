<?php
    include("../db/connection.php");
    include("../include/header_c.php");
 
    session_start();

 ?>
<html>
 <head>
     <title> Contact Us </title>
     <link rel="stylesheet" href="../css/myheader.css">  
     <style>
         .hd{
            font-size: 23px;
            padding: 20px;
            text-transform: uppercase;
            margin-left: 166px;
          }
         
     </style>   
 </head>
 <body>

 <div class="am_heading">
  <h2 class="hd" style="margin:42px;">Feedback Message</h2> 
</div>

  <form action="feedbackprocess.php" method="post" style=" margin-left:-72px;">

        <span style="margin-right:242px;"></span>
        <label class="li">Name</label>
        <input type="text" name="name" style="margin-left:42px;" value="<?php echo $_SESSION['user']; ?>" size="40"><br><br>

        <span style="margin-right:242px;"></span>
        <label class="li">Email</label>
        <input type="mail" name="email" style="margin-left:42px;" size="40"><br><br>

        <span style="margin-right:242px;"></span>
        <label class="li">Mobile</label>
        <input type="text" name="mobile" style="margin-left:36px; width: 305px;"><br><br>

        <span style="margin-right:242px;"></span>
        <label class="li" style="">Message</label>
        <span style="margin-right:28px;"></span>
        <input type="mail" name="dummy" ><br><br>
        <textarea name="about" rows="10" cols="40" style="margin-left:327px; margin-top: -38px;"></textarea><br><br> 

    <span style="margin-right:312px;"></span>
    <input type="submit" style="margin-right:18px; margin-top:18px; color:white; background-color:green; height:38px; width: 160px; border-radius: 7px 7px;">
    <input type="reset" style=" color:white; background-color:black; height:38px; width: 160px; border-radius: 7px 7px;">
  </form>

  <span style="margin-top:104px;"></span>
  <div class="container">
    <h2 style="font-size:23px; width:100%; position: absolute; top:124px; left:999px; text-transform: uppercase; "> For Contact Information</h2>
      <ul style="font-size:23px;  position: absolute; top:164px; left:1054px;">
        <p style="margin-top:18px; font-size:20px;">Name:     Saurabh Aryal</p>
        <p style="margin-top:12px; font-size:20px;">Phone No: 9861435726</p>
        <p style="margin-top:12px; font-size:20px;">Email:    saurabharyal10@gmail.com</p>
        <p style="margin-top:12px; font-size:20px;">Location: Kathmandu, Nepal</p>
      </ul><br><br><br>
  </div>
</div>

</body>
</html>