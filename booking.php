<?php
include 'header.php';
?>

<div id="page-wrapper">

<div class="row">
		<div class="col-lg-12">
            <h1 class="page-header">Pending Booking Details</h1>
        </div>
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
$qry="select * from booking join tble_user on booking.user_id=tble_user.user_id where status='PENDING' and booking.station_id=(select station_id from station_details where station_user=".$_SESSION['userid'].")";
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
echo "<a href=verify.php?userid=".$row['user_id']."&token=".$row['token_no']."><i class='fa fa-hand-o-right'></i></a>";
echo "</td>";

echo "</tr>";
}
?>
</tbody>
</table>

</div>

<?php
include 'footer.php';
?>
