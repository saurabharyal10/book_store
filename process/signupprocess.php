<?php

 if(isset($_POST)){
  
   $n = $_POST['name'];
   $p  = $_POST['password'];
   $m =  $_POST['mobile'];
   $e =  $_POST['email'];
   $date_of_birth =  $_POST['date_of_birth']; 
   $loc =  $_POST['address']; 
   $g =  $_POST['gender']; 
   $nationality =  $_POST['nationality'];
   $photo =$_POST['photo']; 
   $age_verification =$_POST['age_verification'];
   $terms_conditions =$_POST['terms_conditions'];
   $usertype = "User";
 
  
   include('../db/connection.php');

  $sql ="INSERT INTO accounts(name,password,mobile,email,date_of_birth,address,gender,country,photo,age_verification,terms_conditions,usertype) VALUES ('$n','$p','$m','$e','$date_of_birth','$loc','$g','$nationality','$photo','$age_verification','$terms_conditions','$usertype')";
   
  if($conn->query($sql)){
    echo " <script> alert('Registration Successful');  
    window.location.href='../login.php?smsg=successfully created account';
    </script> ";
    // header("Location:../login.php");
  }else{
    echo $conn->error;
  }
 }

//   if($conn->query($sql)){
//     header('Location:../login.php?msg=successfully inserted.');
//    }else{
//       echo $conn->error;
//       echo "Error Occured";
//     }
//     // else{
//     //   echo "Wrong Request";
//     //  }
//  }


// //images upload
// $target_dir = "process/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//   if($check !== false) {
//     echo "File is an image - " . $check["mime"] . ".";
//     $uploadOk = 1;
//   } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
//   }
// }

// // Check if file already exists
// if (file_exists($target_file)) {
//   echo "Sorry, file already exists.";
//   $uploadOk = 0;
// }

// // Check file size
// if ($_FILES["fileToUpload"]["size"] > 500000) {
//   echo "Sorry, your file is too large.";
//   $uploadOk = 0;
// }

// // Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//   $uploadOk = 0;
// }

// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//   echo "Sorry, your file was not uploaded.";
// // if everything is ok, try to upload file
// } else {
//   if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//     echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
//   } else {
//     echo "Sorry, there was an error uploading your file.";
//   }
// }
?>
