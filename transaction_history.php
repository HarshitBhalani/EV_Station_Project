<?php
include 'header.php';

?>
<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <script>
  $( function() {
    $( "#fromdate" ).datepicker({ dateFormat: 'yy-mm-dd' });
    $( "#todate" ).datepicker({ dateFormat: 'yy-mm-dd' });
    
  } );
  </script>

<div id="page-wrapper">

<div class="row">
		<div class="col-lg-12">
            <h1 class="page-header">Transaction Book Details</h1>
        </div>
</div>
<div class="row">
<form method="post">
    <div class="form-group">
        <label>From Date</label>
        <input type="text" name="fromdate" id="fromdate" class="form-control" required />
    </div>
    <div class="form-group">
        <label>To Date</label>
        <input type="text" name="todate" id="todate" class="form-control" required />
    </div>
    <div class="form-group">
        <input type="submit" name="btnGo" value="Go" class="btn btn-success" required />
    </div>
</form>
</div>

<table class="table table-bordered">
<thead>
<th>Booking Person Name</th>
<th>Mobile No</th>
<th>Booking Date Time</th>
<th>Vehicle Number</th>
<th>Vehicle Type</th>
<th>Token Number</th>
<th>Action</th>
</thead>
<tbody>
<?php
include 'connection.php';
if(isset($_POST['btnGo'])){
    
$fromdate=$_POST['fromdate'];
$todate=$_POST['todate'];
$qry="select * from booking join tble_user on booking.user_id=tble_user.user_id where status='PAYMENT_RECEIVED' and booking.station_id=(select station_id from station_details where station_user=".$_SESSION['userid']." and (booking_date>='$fromdate' and booking_date<='$todate'))";
//echo $qry;
$data=mysqli_query($con,$qry);

while($row=$data->fetch_array())
{
echo "<tr>";

echo "<td>";
echo $row['first_name']." ".$row['last_name'];
echo "</td>";

echo "<td>";
echo $row['phone'];
echo "</td>";

echo "<td>";
echo $row['booking_date']." ".$row['booking_time'];
echo "</td>";

echo "<td>";
echo $row['vehicle_no'];
echo "</td>";

echo "<td>";
echo urldecode($row['vehicle_type']);
echo "</td>";

echo "<td>";
echo $row['token_no'];
echo "</td>";

echo "<td>";
if($row['status']=="PAYMENT_RECEIVED"){
    echo "PAYMENT RECEIVED";
}echo "</td>";

echo "</tr>";
}
}
?>
</tbody>
</table>

</div>



<?php
include 'footer.php';
?>
