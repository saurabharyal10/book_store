<?php
    include("../db/connection.php");
    include("../include/header_c.php");
    
    session_start();
?>

<html>
  <head>
    <title>Booking Page</title>
    <link rel="stylesheet" href="../css/bookpage.css">
    <link rel="stylesheet" href="../css/myheader.css">
  </head>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <body>
    <p class="th">Fill the required field in Form Properly </p>

    <form name="bookForm" method='POST' action="esewa.php" onsubmit="return validateForm()" ><br><br><br>
      <!-- <div class="form-field"> -->
        <span style="margin-right:420px;"></span>
        <label class="li" style="margin-right:120px; color:black" >Name</label>
        <span style="margin-right:36px;"></span>
        <input type="text" name="name" size="32" value="<?php echo $_SESSION['user']; ?>" style="margin-right:20px;"><br><br>
      <!-- </div> -->
      <!-- <div class="form-field"> -->
      <span style="margin-right:420px;"></span>
      <label class="li" style="margin-right:121px; color:black">Category</label>
      <span style="margin-right:5px;"></span>
      <select name="person" style="margin-left:9px; width: 264px;" >
        <option value="Solo">Solo</option>
        <option value="Duo">Duo</option>
        <option value="Squad">Squad</option>
        </select><br><br>
      <!-- </div> -->
      <!-- <div class="form-field"> -->
      <span style="margin-right:420px;"></span>
        <label class="li" style="margin-right:90px; color:black">People Names</label>
        <span style="margin-right:12px;"></span>
        <input type="text" name="people_names" style="margin-right:-20px;"><br><br>
      <!-- </div> -->
      <!-- <div class="form-field"> -->
        <span style="margin-right:420px;"></span>
        <label class="li" style="margin-right:120px; color:black">Mobile</label>
        <span style="margin-right:28px;"></span>
        <input type="text" name="mobile"><br><br>
        <!-- </div> -->
      <!-- <div class="form-field"> -->
      <span style="margin-right:420px;"></span>
      <label class="li" style="margin-right:120px; color:black">Email</label>
      <span style="margin-right:36px;"></span>
      <input type="mail" name="email" ><br><br>
        <!-- </div> -->
        <!-- <div class="form-field"> -->
          <span style="margin-right:420px;"></span>
          <label class="li" style="margin-right:120px; color:black">Date to Go</label>
        <span style="margin-right:8px;"></span>
        <input type="date" id="date_to_go" name="date_to_go" onchange="calculate()"><br><br>
        <!-- </div> -->
        <!-- <div class="form-field"> -->
          <span style="margin-right:420px;"></span>
          <label class="li" style="margin-right:120px; color:black">Departure Date</label>
          <span style="margin-right:-21px;"></span>
          <input type="date" id="departure_date" name="departure_date" onchange="calculate()"><br><br>

          <span style="margin-right:420px;"></span>
          <label class="li" style="margin-right:129px; color:black">Price (Rs.)</label>
          <input type="number" name="amt" style="color:black;" id="amt" onfocus="calculate()"><br><br>
          <input type="hidden" name="tAmt" style="color:black;" id="tAmt" onfocus="calculate()">
      <!-- </div> -->
      <!-- <div class="form-field"> -->
      <span style="margin-right:420px;"></span>
        <label class="li" style="margin-right:120px; color:black">Address</label>
        <span style="margin-right:24px;"></span>
        <input type="text" name="location" style=" margin-right:-21px;"><br><br>
      <!-- </div> -->
    <!-- <div class="form-field"> -->
    <span style="margin-right:420px;"></span>
      <label class="li" style="margin-right:120px; color:black">Country</label>
      <span style="margin-right:16px;"></span>
      <select name="nationality" style="margin-left:9px; width: 264px;" >
        <option value="Nepal">Nepal</option>
        <option value="India">India</option>
        <option value="China">China</option>
        <option value="China">U.S.A.</option>
        <option value="China">U.K.</option>
        </select><br><br>
  
      <span style="margin-right:590px;"></span>   

      <input type="submit" value="Procced To Book " style=" color:white; background-color:green; height:36px; width: 164px; border-radius: 7px 7px;">
      <input type="reset" value="Reset" style=" color:white; background-color:black; height:36px; width: 164px; border-radius: 7px 7px;">

   
</form>


</body>
  <script>
          function calculate(){
            var date1=document.getElementById("date_to_go").value;
            var date2=document.getElementById("departure_date").value;
              
             $.post("calculate.php",{date1:date1,date2:date2},function(data,status){
                 document.getElementById("amt").value=data;
                 document.getElementById("tAmt").value=data;
             });
        }

        function validateForm() {
  let name = document.forms["bookForm"]["name"].value;
  let person = document.forms["bookForm"]["person"].value;
  let people_names = document.forms["bookForm"]["people_names"].value;
  let mobile = document.forms["bookForm"]["mobile"].value;
  // var mob = /^[0-9]$/;
  let email = document.forms["bookForm"]["email"].value;
  let date_to_go = document.forms["bookForm"]["date_to_go"].value;
  let departure_date = document.forms["bookForm"]["departure_date"].value;
  let price = document.forms["bookForm"]["amt"].value;
  let location = document.forms["bookForm"]["location"].value;
  let country = document.forms["bookForm"]["nationality"].value;
  // let age_verification = document.forms["bookForm"]["age_verification"].value;
  // let terms_conditions = document.forms["bookForm"]["terms_conditions"].value;

  // var fileInput = document.getElementById('photo');
  // var filePath = fileInput.value;
  // var allowedExtensions = /(\.png|\.jpeg|\.jpg)$/i;

  if (name == "") {
    alert("Name must be filled out");
    return false;
  }
  else if (person == "") {
    alert("Categories must be selected");
    return false;
  }
  else if (people_names == "") {
    alert("People Names must be filled out");
    return false;
  }
  else if (mobile == "" ) {
    alert("Mobile Number must be provided");
    return false;
  }
  // else if (mob.test(mobile.value) == false) {
  //       alert("Please enter valid Mobile Number.");
  //       // mobile.focus();
  //       return false;
  //   }
  else if (email == "" ) {
    alert("Email must be filled out in proper structured form");
    return false;
  }
  else if (date_to_go == "") {
    alert("Date To Go must be selected");
    return false;
  }
  else if (departure_date == "") {
    alert("Departure Date must be selected");
    return false;
  }
  else if (address == "") {
    alert("Address must be filled out");
    return false;
  }
  else if (country == "") {
    alert("Country must be selected");
    return false;
  }
}
    </script>
</html>