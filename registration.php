<?php
    include("./include/myheader.php");
?>


<html>
  <head>
    <title>Account Login</title>
    <link rel="stylesheet" href="css/registration.css">
  </head>
  <body>
    <p class="th">Create an Account to Experience an Astonishing </p>

    <form name="myForm" method='POST' onsubmit="return validateForm()" action='process/signupprocess.php'><br><br><br>
      <!-- <div class="form-field"> -->
        <span style="margin-right:420px;"></span>
        <label class="li" style="margin-right:120px; color:white" >Full Name</label>
        <span style="margin-right:32px;"></span>
        <input type="text" name="name" size="32" style="margin-right:20px;"><br><br>
      <!-- </div> -->
      <!-- <div class="form-field">
        <label class="li">Username</label>
        <input type="text" name="uname" size="32">
      </div> -->
      <!-- <div class="form-field"> -->
      <span style="margin-right:420px;"></span>
        <label class="li" style="margin-right:120px; color:white">Password</label>
        <span style="margin-right:39px;"></span>
        <input type="password" name="password" style="margin-right:-20px;"><br><br>
      <!-- </div> -->
      <!-- <div class="form-field"> -->
      <span style="margin-right:420px;"></span>
        <label class="li" style="margin-right:120px; color:white">Mobile</label>
        <span style="margin-right:55px;"></span>
        <input type="text" name="mobile"><br><br>
      <!-- </div> -->
      <!-- <div class="form-field"> -->
      <span style="margin-right:420px;"></span>
        <label class="li" style="margin-right:120px; color:white">Email</label>
        <span style="margin-right:64px;"></span>
        <input type="mail" name="email" ><br><br>
      <!-- </div> -->
      <span style="margin-right:420px;"></span>
        <label class="li" style="margin-right:120px; color:white">Date of Birth</label>
        <span style="margin-right:20px;"></span>
        <input type="date" name="date_of_birth" ><br><br>
      <!-- <div class="form-field">
        <label class="li">Date of Birth</label>
        <input type="date" name="dob">
      </div> -->
      <!-- <div class="form-field"> -->
      <span style="margin-right:420px;"></span>
        <label class="li" style="margin-right:120px; color:white">Address</label>
        <span style="margin-right:52px;"></span>
        <input type="text" name="address" style=" margin-right:-21px;"><br><br>
      <!-- </div> -->
      <!-- <div class="form-field"> -->
      <span style="margin-right:420px;"></span>
        <label class="li"  style=" color:white">Gender</label>
        <!-- <span ></span> -->
        <input type="radio" name="gender" value="Male" style="margin-left:55px; "><span class = "gender" style="margin-left: -112px; color:white;" >Male</span>
        <input type="radio" name="gender" value="Female" style="margin-left: -50px; "><span class = "gender" style="margin-left: -112px; color:white;">Female</span>
        <input type="radio" name="gender" value="Others" style="margin-left: -50px; "><span class = "gender" style="margin-left: -112px; color:white;">Others</span><br><br>
        <!-- </div> -->
    <!-- <div class="form-field"> -->
    <span style="margin-right:420px;"></span>
      <label class="li" style="margin-right:120px; color:white">Country</label>
      <span style="margin-right:45px;"></span>
      <select name="nationality" style="margin-left:9px; width: 264px;" >
        <option value="Nepal">Nepal</option>
        <option value="India">India</option>
        <option value="China">China</option>
        </select><br><br>
    <!-- </div> -->
    <!-- <div class="form-field"> -->
    <span style="margin-right:420px;"></span>
      <label class="li" style="margin-right:120px; color:white">Photo</label>
      <span style="margin-right:70px; "></span>
      <input type="file" name="photo" id="photo" style="color:white;" onchange="return fileValidation()"><br><br>
    <!-- </div> -->
    <!-- <div class="form-field"> -->
    <span style="margin-right:420px;"></span>
      <label class="li" style="margin-right:120px; color:white">Are you older than 18 ?</label>
      <span style="margin-right:-166px; "></span>
      <input type="checkbox" name="age_verification" style="color:white;" value="Yes"><br><br>
    <!-- </div> -->
    <!-- <div class="form-field"> -->
    <span style="margin-right:420px;"></span>
      <label class="li" style="margin-right:120px; color:white">I agree to the Terms of Service</label>
      <span style="margin-right:-210px; "></span>
      <input type="checkbox" name="terms_conditions" style="color:white;" value="Yes"><br><br>

    <span style="margin-right:520px;"></span>
    <input type="submit" style="margin-right:18px; margin-top:18px; color:white; background-color:green; height:38px; width: 160px; border-radius: 7px 7px;">
    <input type="reset" style=" color:white; background-color:black; height:38px; width: 160px; border-radius: 7px 7px;">

  </form>

  
  </body>
<script  type="text/javascript">

  function validateForm() {
  let name = document.forms["myForm"]["name"].value;
  let password = document.forms["myForm"]["password"].value;
  let mobile = document.forms["myForm"]["mobile"].value;
  let email = document.forms["myForm"]["email"].value;
  let date_of_birth = document.forms["myForm"]["date_of_birth"].value;
  let address = document.forms["myForm"]["address"].value;
  let gender = document.forms["myForm"]["gender"].value;
  let country = document.forms["myForm"]["nationality"].value;
  let age_verification = document.forms["myForm"]["age_verification"].value;
  let terms_conditions = document.forms["myForm"]["terms_conditions"].value;

  var fileInput = document.getElementById('photo');
  var filePath = fileInput.value;
  var allowedExtensions = /(\.png|\.jpeg|\.jpg)$/i;

  if (name == "") {
    alert("Name must be filled out");
    return false;
  }
  else if (password == "") {
    alert("Password must be filled out");
    return false;
  }
  else if (mobile == "" ) {
    alert("Mobile Number must be provided");
    return false;
  }
  else if (email == "" ) {
    alert("Email must be filled out in proper structured form");
    return false;
  }
  else if (date_of_birth == "") {
    alert("Date of Birth must be filled out");
    return false;
  }
  else if (address == "") {
    alert("Address must be filled out");
    return false;
  }
  else if (gender == "") {
    alert("Gender must be selected");
    return false;
  }
  else if (country == "") {
    alert("Country must be selected");
    return false;
  }
  else if(!this.myForm.age_verification.checked){
    alert('Must be older than 18 is required');
    return false;
  }
  else if (!allowedExtensions.exec(filePath)) {
    alert('Invalid file type');
    fileInput.value = '';
    return false;
  } 
  else if (!this.myForm.terms_conditions.checked) {
    alert("Agree to terms and conditions is required");
    return false;
  }
}

</script>
</html>