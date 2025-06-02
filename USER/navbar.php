<?php
session_start();
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">EV-CHARGING</a>
    </div>
    <ul class="nav navbar-nav">

      <li class="active"><a href="table.php"><i class="fa fa-fw fa-home"></i><span style="padding-left: 5px;">Home</span></a></li>
      <!--li><a href="booking.php">Booking</a></li-->
    
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
      <li><a href="index_login.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Sign In</a></li>
    <?php } ?>
    </ul>
  </div>
</nav>