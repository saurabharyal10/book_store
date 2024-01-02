<?php
session_start();

$id=$_GET['id'];

$con=mysqli_connect("localhost","root","") or die("can not connect to the database");
	mysqli_select_db($con,"main_project");

	$query="select * from accounts where id=$id";

	$result=mysqli_query($con,$query) or die(mysqli_error($con));
	
	$arr=mysqli_fetch_array($result,MYSQLI_ASSOC);

	?>


<html>
<head>
    <title>Update Account</title>
    <link rel="stylesheet" href="../css/registration.css">
  </head>
  <body>
    <p class="th">Update Account  </p>
</body>
</html>
    


<form method='POST' action="update_accountprocess.php?id=<?php echo $id; ?>"><br><br><br>

      <span style="margin-right:420px;"></span>
      <label class="li" style="margin-right:120px; color:white" >Name</label>
      <span style="margin-right:34px;"></span>
      <input type="text" name="name" size="32" style="margin-right:20px;" value="<?php echo $arr['name']; ?>"><br><br>
      <!-- </div> -->
      <!-- <div class="form-field"> -->
      <span style="margin-right:420px;"></span>
      <label class="li" style="margin-right:121px; color:white">Category</label>
      <span style="margin-right:5px;"></span>
      <select name="person" style="margin-left:9px; width: 264px;" >
        <option value="Solo" <?php if($arr['person']=='Solo'){echo 'selected';}?>>Solo</option>
        <option value="Duo" <?php if($arr['person']=='Duo'){echo 'selected';}?>>Duo</option>
        <option value="Squad" <?php if($arr['person']=='Squad'){echo 'selected';}?>>Squad</option>
        </select><br><br>
      <!-- </div> -->
      <!-- <div class="form-field"> -->
      <span style="margin-right:420px;"></span>
        <label class="li" style="margin-right:90px; color:white">People Names</label>
        <span style="margin-right:12px;"></span>
        <input type="text" name="people_names" style="margin-right:-20px;" value="<?php echo $arr['people_names']; ?>"><br><br>
      <!-- </div> -->
      <!-- <div class="form-field"> -->
      <span style="margin-right:420px;"></span>
        <label class="li" style="margin-right:120px; color:white">Mobile</label>
        <span style="margin-right:28px;"></span>
        <input type="text" name="mobile" value="<?php echo $arr['mobile']; ?>"><br><br>
      <!-- </div> -->
      <!-- <div class="form-field"> -->
      <span style="margin-right:420px;"></span>
        <label class="li" style="margin-right:120px; color:white">Email</label>
        <span style="margin-right:36px;"></span>
        <input type="mail" name="email" value="<?php echo $arr['email']; ?>"><br><br>
      <!-- </div> -->
      <!-- <div class="form-field"> -->
      <span style="margin-right:420px;"></span>
          <label class="li" style="margin-right:120px; color:white">Date to Go</label>
        <span style="margin-right:8px;"></span>
        <input type="date" id="date_to_go" name="date_to_go" value="<?php echo $arr['date_to_go']; ?>" onchange="calculate()"><br><br>
        <!-- </div> -->
        <!-- <div class="form-field"> -->
      <span style="margin-right:420px;"></span>
        <label class="li" style="margin-right:120px; color:white">Departure Date</label>
        <span style="margin-right:-21px;"></span>
        <input type="date" id="departure_date" name="departure_date" value="<?php echo $arr['departure_date']; ?>" onchange="calculate()"><br><br>

        <span style="margin-right:420px;"></span>
        <label class="li" style="margin-right:129px; color:white">Price (Rs.)</label>
        <input type="number" name="amt" style="color:black;" value="<?php echo $arr['price']; ?>" id="amt" onfocus="calculate()"><br><br>
        <input type="hidden" name="tAmt" style="color:black;" id="tAmt" onfocus="calculate()">
      <!-- </div> -->
      <!-- <div class="form-field"> -->
      <span style="margin-right:420px;"></span>
        <label class="li" style="margin-right:120px; color:white">Address</label>
        <span style="margin-right:24px;"></span>
        <input type="text" name="location" style=" margin-right:-21px;" value="<?php echo $arr['address']; ?>"><br><br>
      <!-- </div> -->
      <!-- <div class="form-field"> -->
    <span style="margin-right:420px;"></span>
      <label class="li" style="margin-right:120px; color:white">Country</label>
      <span style="margin-right:18px;"></span>
      <select name="nationality" style="margin-left:9px; width: 264px;" >
        <option value="Nepal" <?php if($arr['country']=='Nepal'){echo 'selected';}?>>Nepal</option>
        <option value="India" <?php if($arr['country']=='India'){echo 'selected';}?>>India</option>
        <option value="China" <?php if($arr['country']=='China'){echo 'selected';}?>>China</option>
        </select><br><br>
    <!-- </div> -->
   
        <span style="margin-right:490px;"></span>
        <input type="submit" value="Update" style="margin-right:18px; color:white; background-color:green; height:36px; width: 164px; border-radius: 7px 7px;">
        <input type="reset" style=" color:white; background-color:black; height:36px; width: 164px; border-radius: 7px 7px;">

      </form>
