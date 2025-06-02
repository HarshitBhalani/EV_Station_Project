<?php
include 'header.php';
?>

<div id="page-wrapper">

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
<th>Image</th>
<th>Action</th>
</thead>
<tbody>
<?php
include 'connection.php';
$qry="select * from station_details";

$data=mysqli_query($con,$qry);

while($row=$data->fetch_array())
{
echo "<tr>";

echo "<td>";
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
echo $row['image'];
echo "</td>";


echo "<td>";
echo "<a href=newstation.php?stationid=".$row['station_id']."><i class='fa fa-pencil'></i></a> <a href=delete.php?stationid=".$row['station_id']."><i class='fa fa-trash'></i></a>  <a href=".urldecode($row['location_link'])."><i class='fa fa-map'></i></a>";

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
