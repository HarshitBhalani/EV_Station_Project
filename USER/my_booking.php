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
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#date" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );
  </script>
</head>
<body>
<?php 
include 'connection.php';
include 'navbar.php';
?>
<div class="container">
  <h2>My Booking</h2>
  <table class="table table-bordered">
<thead>
<th>Station Name</th>
<th>Booking Date</th>
<th>Booking Time</th>
<th>Vehicle Detail</th>
<th>Token Number</th>
<th>Status</th>
<th>Invoice</th>

</thead>
<tbody>
<?php
 $userid=$_SESSION['userid'];
 
$qry="select * from booking left join station_details on booking.station_id=station_details.station_id  where user_id='$userid'";
$ds=mysqli_query($con,$qry);
while($row=$ds->fetch_array()){
    if($row['status']=="PENDING")
        $color="red";
    else 
    $color="green";
    echo "<tr style='background-color:$color;color:white'>";
    
    echo "<td>";
    echo urldecode($row['station_name']);
    echo "</td>";

    echo "<td>";
    echo urldecode($row['booking_date']);
    echo "</td>";

    echo "<td>";
    echo urldecode($row['booking_time']);
    echo "</td>";

    echo "<td>";
    echo urldecode($row['vehicle_type'])." ".$row['vehicle_no'];
    echo "</td>";

    echo "<td>";
    echo urldecode($row['token_no']);
    echo "</td>";

    echo "<td>";
    echo urldecode($row['status']);
    echo "</td>";

    echo "<td>";
    if(urldecode($row['status'])=="PAYMENT_RECEIVED")
      echo "<a href=invoice.php?bid=".$row['booking_id']." style='color:white;cursor:hand;'>View Invoice</a>";
    else
      echo "---";
    echo "</td>";


    echo "</tr>";
}
?>
</tbody>
</table>
  </div>
</body>
</html>
