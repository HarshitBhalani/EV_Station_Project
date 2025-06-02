<!DOCTYPE html>
<html lang="en">
<head>
    <title>Station Details</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php 
include 'navbar.php';
?>
<div class="container">
    
    <div class="row">
		<div class="col-lg-12">
            <h1 class="page-header">Station Details</h1>
        </div>
    </div>


<table class="table table-bordered">
<thead>
<th>Station Name</th>
<th>Address</th>
<th>Contact Person</th>
<th>Contact Person Mobile No</th>
<th>Vehicle Capacity</th>
<th>Station Open Time</th>
<th>Station Close Time</th>
<th>Zipcode</th>
<th>Location Link</th>
</thead>
<tbody>
    
<?php
include 'connection.php';
$qry="select * from station_details where station_id=".$_GET['id'];
$data=mysqli_query($con,$qry);
$capacity=0;
$sname="";
while($row=$data->fetch_array())
{
echo "<tr>";

echo "<td>";
$sname=$row['station_name'];
echo urldecode($row['station_name']);
echo "</td>";

echo "<td>";
echo urldecode($row['address']);
echo "</td>";

echo "<td>";
echo urldecode($row['contact_person']);
echo "</td>";

echo "<td>";
echo $row['con_per_phone'];
echo "</td>";

echo "<td>";
echo $row['veh_capacity'];
$capacity=$row['veh_capacity'];
echo "</td>";

echo "<td>";
echo $row['station_open_time'];
echo "</td>";

echo "<td>";
echo $row['station_clse_time'];
echo "</td>";

echo "<td>";
echo $row['zipcode'];
echo "</td>";

echo "<td>";
echo "<a href=".urldecode($row['location_link'])."' target='_blank'>
        <i class='fas fa-map-marker-alt fa-2x'></i>
      </a>";
echo "</td>";

echo "</tr>";
}
?>

</tbody>
</table>
<div class="row">
		<div class="col-lg-12">
            <h1 class="page-header">Station Slots</h1>
        </div>
    </div>
<div class="row">
<div class="col-lg-6">
        
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-12">
                            AVAILABLE
                        </div>
                    </div>
                </div> 
            </div>
</div>
<div class="col-lg-6">
                    
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-12">
                            BOOKED
                        </div>
                    </div>
                </div> 
            </div>
            </div>
</div>
<hr>

<div class="row">
<?php
$bookingqry = "SELECT * FROM booking WHERE station_id=".$_GET['id']." AND status='pending'";
$bookedSlots = array();
$d = mysqli_query($con, $bookingqry);
if($d != null && mysqli_num_rows($d) > 0){
   $counter = 1;
   while($row = mysqli_fetch_assoc($d)){
       $bookedSlots[$counter] = array('date' => $row['booking_date']);
       $counter++;
   }
}

$counter = 1;
for($i = 1; $i <= $capacity; $i++){
   if(array_key_exists($i, $bookedSlots)){
       $bookDate = $bookedSlots[$i]['date'];
       echo "<a>";
   } else {
       $bookDate = "";
       ?>
       <a href='booking.php?pump_id=<?php echo $_GET['id']; ?>&name=<?php echo $sname;?>'> 
       <?php 
   }
   ?>
   <div class="col-lg-4">
       <div class="panel panel-<?php echo array_key_exists($i, $bookedSlots)?"warning":"primary"; ?>">
           <div class="panel-heading">
               <div class="row">
                   <div class="col-xs-12">
                       SLOT <?php echo $i; ?>
                       <?php if(!empty($bookDate)) echo "<br> Booked For: ".$bookDate; ?>
                   </div>
               </div>
           </div> 
       </div>
   </div>
   <?php 
   if($counter % 3 == 0) {
       echo '</div><div class="row">';
   }
   $counter++;
} 
if($counter % 3 != 1) {
   echo '</div>';
}
?>  
</div>



</div>


</div>
</body>
</html>
