<?php
    include("./include/myheader.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            box-sizing: border-box;
        }
        .field{
          display:flex;
          margin-left:21px;
          padding-top: 12px;
        }
        .field_hr{
          display:flex;
          margin-left:21px;
          margin-top: 32px;
        }
        .img_hr{
          height:30px;        
        }
        .pra_hr{
          margin-top:3px;
          font-size: 20px;
          width: 12%;
          font-weight: bold;
          margin-left:12px;
        }
        .pra_hr1{
          margin-top:-5px;
          font-size: 20px;
          width: 12%;
          font-weight: bold;
          margin-left:12px;
        }
        .container{
          margin-top: 27px;
          margin-left: 48px;
        }
        .content{
          margin-top:6px;
          font-size: 18px;
          margin-left:12px;
        }
        .pra{
          margin-top:4px;
          font-size: 20px;
          font-weight: bold;
          margin-left:12px;
        }
        .pras{
          margin-top:5px;
          margin-left: 10px;
        }
        .column {
            float: left;
            width: 33%;
            padding: 10px;
            height: 300px; 
            margin-top: -72px;
            margin-bottom: 280px;
            margin-right: 4px;
        }
        .column2 {
            float: left;
            width: 33%;
            height: 300px; 
            margin-top: -72px;
            margin-right: 4px;
        }
        .row:after{
            content: "";
            display: table;
            clear: both;
        }  
        #facebook-icon,#facebook-icon ~ span {
          display:inline-block;
        }         
    </style>

    <title>Document</title>
    <link rel="stylesheet" href="css/service.css">
</head>
<body>
    <p id="hd">Our Services</p><br>

    <div class="row">
    <div class="column">
      <div class="thumbnail">
        <img src="img\trek.jpg" alt="...">
        <h3>Trekking</h3>
        <div class="caption">
          <p>Due to the located in the hilly region, this place consists of a good trekking place
            of around 5km from the farmhouse which is believed to be a part of a heaven. In the summer, 
            the roads may be slippery but a trekking with family, friends over a period of time 
            will be worth it.</p>  
        </div>
      </div>
    </div>
    <div class="column">
      <div class="thumbnail">
        <img src="img\sites.jpg" alt="...">
        <h3>The Cultural Sites</h3>
        <div class="caption">
        <p>This place is an aesthetically beautiful and quiet village. It has also retained its old temples
          , shrines, sacred caves, innumerable festivals and its architecture.  Its cultural heritage and 
          architecture is the beauty of this place.</p> 
        </div>
      </div>
    </div>
    <div class="column">
      <div class="thumbnail">
        <img src="img\friendly.jpg" alt="...">
        <h3>Friendly Enviroment</h3>
        <div class="caption">
        <p>If you want to travel to a place that heavily appreciates the environment and give you a 
          extraoridinary serene experience then this is the right place for you to spend your holidays.
        The neighbours of this place are welcoming, caring and always carry smile in their face. </p>   
      </div>
      </div>
  </div>
  <div class=" column">
    <div class="thumbnail">
      <img src="img\TT.jpg" alt="...">
      <h3>Sports</h3>
      <div class="caption">
      <p>You can find different kinds of indoor and outdoor sports like table-tennis, batminton, carrom, 
        volleyball and much more. You can have a delightful experience playing varities of games while 
      staying in the granary and mountains.  </p>   
      </div>
    </div>
</div>
<div class=" column">
    <div class="thumbnail">
      <img src="img\learning.jpg" alt="...">
      <h3>Learning Enviroment</h3>
      <div class="caption">
      <p>This place is a perfect place to enjoy a reading experience in calm nature. This place not only has a 
        beautiful learning environment, but also has books of different generes that you can read 
        while you're residing on the farm house.</p>   
      </div>
    </div>
</div>
</div>

<h2 class="hd_f">Facilities of Serenity Oasis</h2>

<div class="frow">
  <div class="column2">

    <div class="field">
      <img src="icons/parking.png"> <p class="pra">  Parking </p>
    </div>
    </break>
    <div class="field">
      <img src="icons/tick.png"><p class="pras">  Parking Available</p><br>
    </div>
    </break>

    <div class="field">
      <img src="icons/wifi.png"> <p class="pra">  Internet </p>
    </div>
    </break>
    <div class="field">
      <p class="pras">No Internet Access Available</p><br>
    </div>
    </break>

    <div class="field">
      <img src="icons/kitchen.png"> <p class="pra">  Kitchen </p>
    </div>
    </break>
    <div class="field">
      <img src="icons/tick.png"><p class="pras"> Kitchenware</p><br>
    </div>
    </break>
  </div>


  <div class="column2">
  <div class="field">
      <img src="icons/park.png"> <p class="pra">  Outdoors </p>
    </div>
    </break>
    <div class="field">
      <img src="icons/tick.png"><p class="pras"> Garden</p><br>
    </div>
    </break>

    <div class="field">
      <img src="icons/exclamation.png"> <p class="pra">  General </p>
    </div>
    </break>
    <div class="field">
      <img src="icons/tick.png"><p class="pras"> Smoke-free Property</p><br>
    </div>
    </break>
  </div>


  <div class="column2">
  <div class="field">
  <img src="icons/view.png"> <p class="pra">  View </p>
    </div>
    </break>
    <div class="field">
      <img src="icons/tick.png"><p class="pras"> Mountains Range View</p><br>
    </div>
    </break>

    <div class="field">
      <img src="icons/linguistics.png"> <p class="pra">  Languages Spoken </p>
    </div>
    </break>
    <div class="field">
      <img src="icons/tick.png"><p class="pras"> Nepali</p><br>
      <img src="icons/tick.png"><p class="pras"> English</p><br>
    </div>
    </break>
  </div>
</div>

<h2 class="hd_f">House Rules</h2>
<div class="houserules">
  <div class="container">
    <div class="field_hr">
      <img class="img_hr" src="icons/calendar.png"> <p class="pra_hr">  Check-in </p>
      <p class="content"> Customers can check in between 3pm to 6pm. </p>
    </div>
    <div class="field_hr">
      <img class="img_hr" src="icons/calendar.png"> <p class="pra_hr">  Check-out </p>
      <p class="content"> Customers can check out between 5am to 6pm. </p>
    </div>
    <div class="field_hr">
      <img class="img_hr" src="icons/exclamation_hr.png"> <p class="pra_hr1">  Cancellation/ <br> Prepayment </p>
      <p class="content"> Cancellation and Prepayment policies vary according to accomodations type and situations.  </p>
    </div>
    <!-- <div class="field_hr">
      <img class="img_hr" src="icons/children.png"> <p class="pra_hr">  Children </p>
    </div> -->
    <div class="field_hr">
      <img class="img_hr" src="icons/user.png"> <p class="pra_hr">  Age Restrication  </p>
      <p class="content">No age restriction for check-in. (Only children 9 and up are allowed)</p>
    </div>
    <div class="field_hr">
      <img class="img_hr" src="icons/credit-card.png"> <p class="pra_hr">  Cash only </p>
      <p class="content"> This property only accepts cash-payments. </p>
    </div>
    <div class="field_hr">
      <img class="img_hr" src="icons/no-smoking.png"> <p class="pra_hr">  Smoking </p>
      <p class="content"> Smoking is not allowed. </p>
    </div>
    <div class="field_hr">
      <img class="img_hr" src="icons/dancing.png"> <p class="pra_hr">  Parties </p>
      <p class="content"> Parties/ Events not allowed </p>
    </div>
    <div class="field_hr">
      <img class="img_hr" src="icons/pets.png"> <p class="pra_hr">  Pets </p>
      <p class="content"> Pets are not allowed. </p>
    </div>
  </div>
</div>
</body>
</html>