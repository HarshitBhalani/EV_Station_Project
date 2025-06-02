<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<style>
* {
  box-sizing:border-box;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.container {
  padding: 64px;
}

.container1 {
  padding: 10px 20px;
}

.container1::after, .row::after  {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.row:after {
  content: "";
  display: table;
  clear: both
}

.column {
  float: left;
  width: 25%;
  margin-bottom: 7px;
  padding: 15px 70px;
}

.column-66 {
  float: left;
  width: 66.66666%;
  padding: 70px;
}

.column-33 {
  float: left;
  width: 33.33333%;
  padding: 70px;
}

.large-font {
  font-size: 48px;
}

.xlarge-font {
  font-size: 64px
}

.button {
  border: none;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  background-color: #04AA6D;
}


img {
  display: block;
  height: auto;
  max-width: 100%;
}

@media screen and (max-width: 1000px) {
  .column-66,
  .column-33 {
    width: 100%;
    text-align: center;
  }
  img {
    margin: auto;
  }
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 10px 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.button1 {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button1:hover {
  background-color: #555;
}

</style>
<head>
    <title>EV-CHARGING WEBSITE</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">EV-CHARGING</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="table.php"><i class="fa fa-fw fa-home"></i><span style="padding-left: 5px;">Home</span></a></li>

      <?php
    if(isset($_SESSION['userid'])){
      
    ?>
      <li><a href="my_booking.php"><i class="fa fa-address-book" aria-hidden="true"></i><span style="padding-left: 5px;"> My Booking</span></a></li> 
      
      <?php } ?>
      <li><a href="gallery2.php"><i class="fa fa-picture-o" aria-hidden="true"></i><span style="padding-left: 5px;"> Gallery</span></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">

    <?php 
      if(isset($_SESSION['userid'])){
       echo "<li>";
        echo "<a>".$_SESSION['email']."</a>";
       echo "</li>"; 
       echo "<li>";
        echo "<a href='logout.php'>Logout</a>";
       echo "</li>"; 
         
      }else{
      ?>
      <li><a href="index_login.php"><span class="glyphicon glyphicon-user"></span><span style="padding-left: 5px;"> Sign Up</span></a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span><span style="padding-left: 5px;"> Sign In</span></a></li>
    <?php } ?>
    
    </ul>
  </div>
</nav>

<div style="text-align:center">
  <h2>EV-CHARGING STATIONS SYSTEM</h2>
</div>


<!-- The App Section -->
<div class="container-fluid">
  <div class="row">
    <div class="column-66">
      <h1 class="xlarge-font"><b>Vehicle's Recharge Stations</b></h1>
      <h1 class="large-font" style="color:MediumSeaGreen;"><b>Benefits of Electric Vehicle</b></h1>
      <p><b><h4>An electric vehicle charging station is equipment that connects an electric vehicle (EV) to a source of electricity to recharge electric cars, neighborhood electric vehicles and plug-in hybrids. Change is a part of our life and most of the times, humans work together for a positive change that can benefit society. Talking about the automotive industry one of the biggest transformation that we have experienced in recent times is the introduction of EVs. Electric Vehicles seem to be the perfect future!! </h4></b></p>
      <p><b><h4>Now, Recharge your Vehicle on selected station and go to your favorite holiday destination.</p></b></h4>
      <br />
      <a button class="button" href="table.php">Book Your Slot</button></a>
    </div>
    <div class="column-33">
        <img src="../image/5.jpg" width="700" height="600" >
    </div>
  </div>
</div>

<!-- Clarity Section -->
<div class=".container-fluid" style="background-color:#f1f1f1">
  <div class="row">
    <div class="column-33">
      <img src="../image/12.jpg" alt="App" width="700" height="600">
    </div>
    <div class="column-66">
      <h1 class="xlarge-font"><b>About Us</b></h1>
      <h1 class="large-font" style="color:red;"><b>EV-CHARGING STATIONS SYSTEM</b></h1>
      <p><b><h4> We're implementing a range of initiatives to both meet the needs of an emerging market of electric vehicle (EV) owners, and prepare our networks and business for the potential challenges and opportunities that EV charging will create. The E-Fuel Station System (EFSS) provides a wealth of information and data on alternative and renewable fuels, advanced vehicles, fuel-saving strategies, and emerging transportation technologies. This site features interactive tools and mapping website to aid in the implementation of these fuels, vehicles, and strategies. The EFSS functions as a dynamic online hub, providing information, tools, invoice and resources for transportation decision makers seeking domestic alternatives that diversify energy sources and help businesses make wise economic choices. </p></b></h4>
      <p><b><h4> Contact For Any Help: +91 9547615710</p></b></h4>
      <p><b><h4>If Any Query Email Us: admin@gmail.com</p></b></h4>
    </div>
  </div>
</div>


<div class="row" style="background-color:#d55d5d">

  <div class="column">
    <div class="card">
    <img src="../image/team7.jpg" alt="Mike" style="width:100%">
      <div class="container1" style="background-color:#f1f1f1">
      <h2>Neel Makwana</h2>
        <p class="title"><b>Designer</b></p>
        <p><b>I'm Designing this website and taking the help of founder.</b></p>
        <p><b>Email: neel@gmail.com</b></p>
        <p><button class="button1">Contact: +91 1576432589</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="../image/team5.jpg" alt="Jane" style="width:100%">
      <div class="container1" style="background-color:#f1f1f1">
        <h2>Yukti Jingar</h2>
        <p class="title"><b>CEO & Founder</b></p>
        <p><b>I'm the Founder of this Company also Handle this Website.</b></p>
        <p><b>Email: yukti@gmail.com</b></p>
        <p><button class="button1">Contact: +91 8762486452</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="../image/team6.jpg" alt="Jane" style="width:100%">
      <div class="container1" style="background-color:#f1f1f1">
        <h2>Prachi Nayak</h2>
        <p class="title"><b>Assistant</b></p>
        <p><b>I'm the Assistant of The Company and taking the help of Designer. </b></p>
        <p><b>Email: prachi@gmail.com</b></p>
        <p><button class="button1">Contact: +91 6775196742</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="../image/team1.jpg" alt="Jane" style="width:100%">
      <div class="container1" style="background-color:#f1f1f1">
        <h2>Vandita Panchal</h2>
        <p class="title"><b>Manager</b></p>
        <p><b>I'm the Manager of The Company and giving work to the employees.</b></p>
        <p><b>Email: vandita@gmail.com</b></p>
        <p><button class="button1">Contact: +91 6471365896</button></p>
      </div>
    </div>
  </div>
  

 
</div>

</body>
</html>

