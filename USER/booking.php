<!DOCTYPE html>
<html lang="en">
<head>
    <title>Booking</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <!--link rel="stylesheet" href="https://jonthornton.github.io/jquery-timepicker/jquery.timepicker.css"-->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <!--script src="https://jonthornton.github.io/jquery-timepicker/jquery.timepicker.js"></script-->
  <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
  <script>
  $( function() {
    $("#txtdate").datepicker({
       dateFormat: "yy-mm-dd" , minDate :0 , maxDate :"+3"
            });
        });
  </script>

<script>
  	$(function(){
   $('#time').timepicker({
    timeFormat: 'H:mm p',
    scrollbar: true
   }); 
});
  </script>
</head>
<body>
<?php 
include 'navbar.php';
?>
<div class="container">
  <h2>Vehicle Slot Booking</h2>
  <form method="post">
    <div class="form-group">
      <label for="date">Date</label>
      <input type="text" class="form-control" id="txtdate" placeholder="Select Your Booking Date" name="date" required>
    </div>
    <div class="form-group">
      <label for="time">Time</label>
      <input type="text" id="time" name="time" class="form-control" data-time-format="H:i" data-step="30" data-min-time="00:00" data-max-time="23:59" data-show-2400="true" placeholder="Select Your Booking Time" required/>
      <!--input type="time" class="form-control" id="time" placeholder="Select Your Booking Time" name="time" required-->
    </div>

    <div class="form-group">
      <label for="carno">Vehicle Number</label>
      <input type="text" class="form-control" id="carno" placeholder="Ex:GJ-01-NL-6969" name="carnumber" required>
    </div>

    <div class="form-group">
    <label for="carno">Vehicle Type</label> 
    <select class="form-control" aria-label="Default select example" name="cartype" required>
    <option value="0" selected>--Select Vehicle Type--</option>
    <option value="Two Wheeler">Two Wheeler</option>
    <option value="Three Wheeler">Three Wheeler</option>
    <option value="Four Wheeler">Four Wheeler</option>
    </select>
    </div>

    <div class="form-group">
      <label for="station">Station Details</label>
      <input type="text" class="form-control" id="station"  name="station" value="<?php echo urldecode($_GET['name']); ?>" readonly>
    </div>
    
    <button type="submit" name="btnBooking" class="btn btn-primary">Book</button>
  </form>
</div>

</body>
</html>
<?php
include 'connection.php';
if(isset($_POST['btnBooking'])){


  if(isset($_SESSION['userid'])){
  


          $userid=$_SESSION['userid'];
          $stationid=$_GET['pump_id'];
          $date=$_POST['date'];
          $time=$_POST['time'];
          $number=urlencode($_POST['carnumber']);
          $cartype=urlencode($_POST['cartype']);
          $station=urlencode($_POST['station']);
          $token=date('ymdhis');
          $qry="INSERT INTO `booking`(`booking_date`, `booking_time`, `user_id`, `vehicle_type`, `vehicle_no`, `station_id`, `token_no`, `status`) VALUES 
          ('$date','$time','$userid','$cartype','$number','$stationid','$token','PENDING')";
          $ans=mysqli_query($con,$qry);

          if($ans>0){
            echo "<script>alert('Successfully Slot Booked')</script>";
          }

  }else{
    echo "<script>location.href='index_login.php';</script>";
  }
          

}
?>