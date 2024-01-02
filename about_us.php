<?php
    include("./include/myheader.php");
?>

<html>
 <head>
     <title> About Project </title>
     <link rel="stylesheet" href="css/about_us.css">
     <style>
        * {
            box-sizing: border-box;
        }
        .column {
            float: left;
            /* width: 50%; */
            padding: 21px;
            height: 300px; 
        }
        .left {
            width: 60%;
        }
        .right {
            width: 27%;
        }
        .row:after{
            content: "";
            display: table;
            clear: both;
        }           
    </style>
 </head>
 <body>

<div class="row">
  <div class="container">
    <div class="column left">
      <h2 class="hd">What is Serenity Oasis?</h2>
      <p class="desc" style="font-size: 18px;">
       Serenity Oasis is an online home booking system which motive is to provide
       a meditation and refreshment time overcoming the busy schedules of daily life.
       Serenity Oasis is an affordable place where people or a group of people can visit
        there and enjoy our services in the delightful environment atmosphere following some policies. 
        People can easily book with the help of simple user-interface and improve their lifestyles 
        through this online booking system.   
        <br> <br>
        In this modern time period, high number of people have busy schedules in day-to-day life. 
        They are living the life in quite a tension way. 
        So, to overcome this kind of problems I have created a system that would help to visit 
        home feel place where people can meditate, study, play sports and enjoy their own company 
        in the delightful environment atmosphere. 
    </div>
    <div class="column right">
      <img src="img/abt.jpg" class="ad1" alt="img">
    </div>
  </div>
</div>
</body>
</html>