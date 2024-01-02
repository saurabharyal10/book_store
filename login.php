<?php
    include("./include/myheader.php");
?>

<html>
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login </title>  
    <link rel="stylesheet" href="css/login.css">
    
 </head>
 <body>
 <?php

$alertmsg = isset($_GET['alertmsg'])?$_GET['alertmsg']:'';

if($alertmsg == 1){
echo "<script>alert('Sorry, the credentials do not match.')</script>";

}

?>
<div class="am_heading">
  <h2 class="hd" style="text-align: center; margin-left:37px; color:green;">Login To Your Account</h2> 
</div>

<div class="rowbar">
  <div class="container"  style="text-align: center;  margin-top: 40px;">
      <form method="POST" action="process/loginprocess.php">
        <div class="form-field">
          <label class="li">Name</label>
          <input type="text" name="name" id="name" class="form-control"  style="margin-left: -121px;" size="32">
        </div>
        <div class="form-field">
          <label class="li">Password</label>
          <input type="password" id="password" name="password" class="form-control" style="margin-left: -141px;" size="32">
        </div>
        <div class="form-field">
        <label class="li" style="margin-left:3px;" >Select UserType :</label>
        <span style="margin-right:-190px;"></span>
            <select name="usertype" style="width: 258px">
              <option value="User">User</option>
              <option value="Admin">Admin</option>
            </select><br>
          </div>

        <button type="Submit" class = "submit_btn" name="Submit" >Submit</button>
        <button type="Reset" class = "reset_btn" name="Reset" >Reset</button>
        </form>
    </div>
</div>

<h2 class="footer"><marquee>If You Don't Have an Account , then Create it First</marquee></h2>    
</body>
</html>