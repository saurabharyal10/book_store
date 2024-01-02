<?php
  include('../db/connection.php');
  include('../include/header_a.php');
  session_start();
    
?>
<html>
 <head>
 <style>

 </style>
     <title> Booked Running </title> 
     <link rel="stylesheet" href="../css/myheader.css">    
 </head>

 <body> 
  <?php
         $query= "SELECT accounts.id, accounts.name, accounts.mobile, accounts.address, bookings.people_names, bookings.date_to_go, bookings.departure_date, bookings.booking_date, bookings.id, bookings.price, bookings.account_id
                  FROM accounts 
                  INNER JOIN bookings
                  ON accounts.id=bookings.account_id WHERE bookings.remarks != 'complete' AND bookings.status='approve' ";
        $result = $conn->query($query);
       if($result-> num_rows > 0){ ?>
       <h2  style=" margin:21px; margin-bottom:42px;">Booked Running</h2>
       <table border="1" width="98%" cellspacing="0" style="margin-left:21px;">
             <thead>
                <th>Account Id</th>
                <th>Name</th>
                <th>People Names</th>
                <th>Contact no.</th>
                <th>User Address</th>
                <th> Date To Go</th>
                <th> Departure Date</th>
                <th> Booking Date</th>
                <th> Amount</th>
                <th> Action</th>
             </thead>
           <?php while($row = $result->fetch_assoc()){ ?>
            
              <tr>
                <td><?php echo $row['account_id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['people_names'];?></td>
                <td><?php echo $row['mobile'];?></td>
                <td><?php echo $row['address'];?></td>
               <td><?php echo $row['date_to_go'];?></td>
               <td><?php echo $row['departure_date'];?></td>
               <td><?php echo $row['booking_date'];?></td>
               <td><?php echo $row['price'];?></td>
               <?php echo "<td><a onClick=\"javascript: return confirm('Are you sure complete this booked reservation?')\"href='?complete=".$row['id']."' style='color:black;'>Complete</a></td>"; ?> 
               
                   </tr>
            <?php  } ?>
           </table>
        <?php }else{ ?>
           <h3>No result found</h3>
        <?php }
      ?>
       <?php 
      // to approve a ride

      if (isset($_GET['complete'])) {

         $id = $_GET['complete'];
         $note_complete = mysqli_real_escape_string($conn,$_GET['complete']);
         $complete_query = "UPDATE bookings  SET remarks='complete'  WHERE id='$id'";
         $run_complete_query = mysqli_query($conn, $complete_query) or die (mysqli_error($conn));
         if (mysqli_affected_rows($conn) > 0) {
             echo "<script>alert('Booking Reservation Complete!');
             window.location.href='bookedrunning.php';</script>";
         }
         else {
          echo "<script>alert('Error occured.Try again!');</script>";   
         }
         }
      
      ?>

     
  </body>


  
    
         
     