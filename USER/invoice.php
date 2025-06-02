<!DOCTYPE html>
<html lang="en">
<head>
    <title>INVOICE</title>
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
  var myApp = new function () {
        this.printTable = function () {
            var tab = document.getElementById('invoice');
            var win = window.open('', '', 'height=700,width=1500');
            win.document.write(tab.outerHTML);
            win.document.close();
            win.print();
        }
    }
  </script>
</head>
<body>
<?php 
include 'connection.php';
include 'navbar.php';
?>
<div class="container">
<button id="print" class="btn btn-primary" onclick="myApp.printTable()">Print</button>
<br />
<table id="invoice" border="2" width="60%" height="100%" style="text-align:center">
  <br />
<tbody>
<?php
 $userid=$_SESSION['userid'];
 $booking_id=$_GET['bid'];
 
$qry="select * from booking left join station_details on booking.station_id=station_details.station_id join tble_user on booking.user_id=tble_user.user_id join payment on payment.booking_id=booking.booking_id  where payment.user_id='$userid' and payment.booking_id='$booking_id'";
$ds=mysqli_query($con,$qry);
while($row=$ds->fetch_array()){

    echo "<tr align=center><td colspan=2><h1>";
    echo urldecode($row['station_name']);
    echo "</br>";  
    echo " Invoice </h1></td></tr>";

    echo "<tr>";
    echo "<td><b>Invoice Date</b></td>";
    echo "<td><h5><b>";
    echo $row['date'];
    echo "</b></h5></td>";
     echo "</tr>";

     echo "<tr>";
     echo "<td><b>Invoice Amount</b></td>";
     echo "<td><h5><b>";
     echo $row['amount'];
     echo "</b></h5></td>";
      echo "</tr>";

      echo "<tr>";
      echo "<td><b>Transaction ID</b></td>";
      echo "<td><h5><b>";
      echo $row['payment_id'];
      echo "</b></h5></td>";
       echo "</tr>";

      echo "<tr>";
      echo "<td><b>Token Number</b></td>";
      echo "<td><h5><b>";
      echo $row['token_no'];
      echo "</b></h5></td>";
       echo "</tr>";
    
       echo "<tr>";
       echo "<td><b>Vehicle Number</b></td>";
       echo "<td><h5><b>";
       echo $row['vehicle_no'];
       echo "</b></h5></td>";
        echo "</tr>";


      echo "<tr>";
      echo "<td><b>Payment Type</b></td>";
      echo "<td><h5><b>";
      echo $row['payment_type']=="1"?"CASH":"ONLINE";
      echo "</b></h5></td>";
       echo "</tr>";
     

   echo "<tr>";
   echo "<td><b>Customer Name</b></td>";
   echo "<td><h5><b>";
   echo $row['first_name']." ".$row['last_name'];
   echo "</b></h5></td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td><b>Customer Email</b></td>";
    echo "<td><h5><b>";
    echo $row['email'];
    echo "</b></h5></td>";
     echo "</tr>";

    echo "<tr>";
    echo "<td><b>Mobile Number</b></td>";
    echo "<td><h5><b>";
    echo $row['phone'];
    echo "</b></h5></td>";
     echo "</tr>";

    echo "<tr align=center><td colspan=2><b>Thank you !! Visit Again !!</b></td></tr>";
}
?>
</tbody>
</table>
  </div>
</body>
</html>
