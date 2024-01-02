<?php
require '../include/header_c.php';
require '../db/connection.php';

session_start();
$account_id=$_SESSION['id'];
$user = $_SESSION['name'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Booking Status</title>
	<link rel="stylesheet" href="../css/myheader.css">
</head>
<body>
<?php

$alertmsg = isset($_GET['alertmsg'])?$_GET['alertmsg']:'';

if($alertmsg == 1){
echo "<script>alert('Successfully booked.')</script>";

}
?>
</body>
</html>

 
<?php
        //  $query= 'SELECT accounts.id, accounts.name, bookings.person,bookings.people_names, accounts.email, 
        //  accounts.mobile, bookings.date_to_go, bookings.departure_date, accounts.address,  
        //   bookings.price, bookings.country, bookings.status, bookings.account_id
        //  FROM accounts 
        //  INNER JOIN bookings
        //  ON accounts.id=bookings.account_id WHERE bookings.status ="pending"  
        //  ORDER BY bookings.id DESC' ;

        $query="select * from bookings WHERE name ='$user' AND remarks=('' OR 'start') ";
        // $query= "SELECT * FROM `bookings` as bb 
        // INNER JOIN bike_sell as bs on bs.id = bb.bike_id 
        // INNER JOIN information as i on i.id= bb.buyerid where buyerid=$id ORDER BY bb.id_b DESC" ;

        $result = $conn->query($query);
       if($result->num_rows>0){ ?>
       
       <h2 style="margin-left:42px; margin-top:27px; margin-bottom:21px;">User Booked Status</h2>
       <table border="1" width="98%" height=10%; style="margin-left:18px;" cellspacing=0;>
            
                <tr style=" border:1px solid black;">
                <th  style=" border:1px solid black;" >Id</th>
                <th  style=" border:1px solid black;" >Name</th>
                <th  style=" border:1px solid black;"> Category</th> 
                <th  style=" border:1px solid black;"> People names</th> 
                <th  style=" border:1px solid black;">Email</th>
                <th  style=" border:1px solid black;">Mobile</th>
                <th  style=" border:1px solid black;"> Date To Go</th> 
                <th  style=" border:1px solid black;"> Departure Date</th>
                <th  style=" border:1px solid black;"> Address</th>
                <th  style=" border:1px solid black;"> Amount</th>
                <th  style=" border:1px solid black;"> Country</th>
                <th  style=" border:1px solid black;"> Status</th>
                <th  style=" border:1px solid black;"> Remarks</th>
                </tr>
            
           <?php while($row = $result->fetch_assoc()){ ?>
            <tr>
                <td  style=" border:1px solid black;"><?php echo $row['account_id'];?></td>
                <td  style=" border:1px solid black;"><?php echo $row['name'];?></td>
                <td  style=" border:1px solid black;"><?php echo $row['person'];?></td>
                <td style=" border:1px solid black;" ><?php echo $row['people_names'];?></td>
                <td  style=" border:1px solid black;"><?php echo $row['mobile'];?></td>
                <td style=" border:1px solid black;"><?php echo $row['email'];?></td>
                <td style=" border:1px solid black;" ><?php echo $row['date_to_go'];?></td>
                <td style=" border:1px solid black;" ><?php echo $row['departure_date'];?></td>
                <td style=" border:1px solid black;" ><?php echo $row['address'];?></td>
                <td style=" border:1px solid black;" ><?php echo $row['price'];?></td>
                <td style=" border:1px solid black;" ><?php echo $row['country'];?></td>
                <td style=" border:1px solid black;" ><?php echo $row['status'];?></td>
                <td style=" border:1px solid black;" ><?php echo $row['remarks'];?></td>
            </tr>

            <?php  } ?>
           </table>
        <?php }else{ ?>
           <h3>No result found</h3>
        <?php }
      ?>
      <!DOCTYPE html>
      <html lang="en">
      <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Admin</title>
      </head>
      <body>
         
      </body>
      </html>