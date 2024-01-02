<?php
  include('../db/connection.php');
  include('../include/header_a.php');
  session_start();
//   account_id = $_SESSION[''];

 ?>
<html>
 <head>
 <style>

 </style>
     <title> Booking Request Page </title>     
    <link rel="stylesheet" href="../css/myheader.css">
 </head>

 <body>
      <?php
         $query= 'SELECT accounts.id, accounts.name, accounts.mobile, accounts.address, bookings.person, bookings.people_names, bookings.date_to_go, bookings.departure_date, bookings.booking_date, bookings.id, bookings.price, bookings.account_id
                  FROM accounts 
                  INNER JOIN bookings
                  ON accounts.id=bookings.account_id WHERE bookings.status ="pending" ORDER BY bookings.id DESC' ;
        $result = $conn->query($query);
       if($result->num_rows>0){ ?>
       <h2 style=" margin:21px; margin-bottom:42px;">Booking Requests</h2>
          <table border="1" width="98%" cellspacing="0" style="margin-left:21px;">
             <thead>
                <th>S.No.</th>
                <th>Name</th>
                <th>Category</th>
                <th>People Names</th>
                <th>Contact no.</th>
                <th>User Address</th>
                <th> Date To Go</th>
                <th> Departure Date</th>
                <th> Booking Date</th>
                <th> Amount</th>
                <th colspan="2"> Action</th>
             </thead>
           <?php while($row = $result->fetch_assoc()){ ?>
          
              <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['person'];?></td>
                <td><?php echo $row['people_names'];?></td>
                <td><?php echo $row['mobile'];?></td>
                <td><?php echo $row['address'];?></td>
               <td><?php echo $row['date_to_go'];?></td>
               <td><?php echo $row['departure_date'];?></td>
               <td><?php echo $row['booking_date'];?></td>
               <td><?php echo $row['price'];?></td>
               <?php echo "<td><a onClick=\"javascript: return 
               confirm('Are you sure you want to accept this booking request?')\"href='?approve=".$row['id']."' style='color:black;'>Approve</a></td>"; ?> 
               
               <?php echo "<td><a onClick=\"javascript: return 
               confirm('Are you sure you want to cancel this booking request ?')\"href='?cancel=".$row['id']."' style='color:black;'>Cancel</a></td>"; ?> 
                   
               </tr>
            <?php  } ?>
           </table>
        <?php }else{ ?>
           <h3 style="color:black;">No result found</h3>
        <?php } ?>
        
       
        
      <?php 
       // to approve a ride

      if (isset($_GET['approve'])) {

         $id = $_GET['approve'];
         $note_approve = mysqli_real_escape_string($conn,$_GET['approve']);
         $approve_query = "UPDATE bookings SET status='approve'  WHERE id='$id'";
         $run_approve_query = mysqli_query($conn, $approve_query) or die (mysqli_error($conn));
         if (mysqli_affected_rows($conn) > 0) {
             echo "<script>alert('Request Approved!');
             window.location.href='show_booking_request.php';</script>";
         }
         else {
          echo "<script>alert('Error occured.Try again!');</script>";   
         }
      }
      ?>

<?php 
      // to cancle a bike

      if (isset($_GET['cancel'])) {

         $id = $_GET['cancel'];
         $note_approve = mysqli_real_escape_string($conn,$_GET['cancel']);
         $approve_query = "UPDATE bookings SET status='cancelled'  WHERE id='$id'";
         $run_approve_query = mysqli_query($conn, $approve_query) or die (mysqli_error($conn));
         if (mysqli_affected_rows($conn) > 0) {
             echo "<script>alert('Cancelled Booking Request!');
             window.location.href='show_booking_request.php';</script>";
         }
         else {
       echo "<script>alert('Error occured.Try again!');</script>";   
         }
         }
      
      ?>

  </body>
  </html>
