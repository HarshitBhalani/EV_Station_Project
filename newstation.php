<?php

include 'header.php';
include 'connection.php'

?>
<div id="page-wrapper">

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add New Station</h1>
        </div>
</div>
<form method="post" enctype="multipart/form-data">

<?php
if(isset($_GET['stationid'])){

$stationID=$_GET['stationid'];
$qry="select * from station_details where station_id=".$stationID;
$ds=mysqli_query($con,$qry);
while($row=$ds->fetch_array()){
?>

	<div class="form-group">
	<label for="stationname">Station Name</label>
	<input type="text" name="stationname" value="<?php echo urldecode($row['station_name']); ?>" class="form-control" required/>	
	</div>

	<div class="form-group">
	<label for="address">Address</label>
	<input type="text" name="address" value="<?php echo urldecode($row['address']); ?>" class="form-control" required/>	
	</div>

	<div class="form-group">
	<label for="link">Location Link</label>
	<input type="text" name="link"  value="<?php echo urldecode($row['location_link']); ?>" class="form-control" required/>	
	</div>

    <div class="form-group">
	<label for="personname">Contact Person Name</label>
	<input type="text" name="personname" value="<?php echo urldecode($row['contact_person']); ?>" class="form-control" required/>	
	</div>
	
	<div class="form-group">
	<label for="phone">Contact Person Mobile</label>
	<input type="text" maxlength="10" id="phone" name="phone" value="<?php echo urldecode($row['con_per_phone']); ?>" class="form-control" required/>	
	</div>
	
	<div class="form-group">
	<label for="capacity">Vehicle Capacity</label>
	<input type="text" maxlength="2" name="capacity" id="custphone" value="<?php echo urldecode($row['veh_capacity']); ?>" class="form-control" required/>	
	</div>

    <div class="form-group">
	<label for="opentime">Station Open Time</label>
	<input type="time" name="opentime" value="<?php echo $row['station_open_time']; ?>" class="form-control" required/>	
	</div>

    <div class="form-group">
	<label for="closetime">Station Close Time</label>
	<input type="time" name="closetime" value="<?php echo urldecode($row['station_clse_time']); ?>" class="form-control" required/>	
	</div>

	<div class="form-group">
	<label for="zipcode">Zipcode</label>
	<input type="text" maxlength="6" name="zipcode" id="zipcode" value="<?php echo urldecode($row['zipcode']); ?>" class="form-control" required/>	
	</div>
	
	
	<div class="form-group">
	<label for="zipcode">File</label>
	<input type="file"  name="img" />	
	</div>
	
	<div class="form-group">
	<input type="submit" name="btnsave" class="btn btn-success" value="Save" />	
	</div>
	
	
<?php }}else{ ?>
    <div class="form-group">
	<label for="stationname">Station Name</label>
	<input type="text" name="stationname" value="" class="form-control" required/>	
	</div>

	<div class="form-group">
	<label for="address">Address</label>
	<input type="text" name="address" value="" class="form-control" required/>	
	</div>

	<div class="form-group">
	<label for="link">Location Link</label>
	<input type="text" name="link"  value="" class="form-control" required/>	
	</div>

    <div class="form-group">
	<label for="personname">Contact Person Name</label>
	<input type="text" name="personname" value="" class="form-control" required/>	
	</div>
	
	<div class="form-group">
	<label for="phone">Contact Person Mobile</label>
	<input type="text" maxlength="10" id="phone" name="phone" value="" class="form-control" required/>	
	</div>
	
	<div class="form-group">
	<label for="capacity">Vehicle Capacity</label>
	<input type="text" maxlength="2" name="capacity" id="custphone" value="" class="form-control" required/>	
	</div>

    <div class="form-group">
	<label for="opentime">Station Open Time</label>
	<input type="time" name="opentime" value="" class="form-control" required/>	
	</div>

    <div class="form-group">
	<label for="closetime">Station Close Time</label>
	<input type="time" name="closetime" value="" class="form-control" required/>	
	</div>
	
	<div class="form-group">
	<label for="zipcode">Zipcode</label>
	<input type="text" maxlength="6" name="zipcode" id="zipcode" value="" class="form-control" required/>	
	</div>
	
		
	<div class="form-group">
	<label for="zipcode">File</label>
	<input type="file"  name="img" />	
	</div>

	<div class="form-group">
	<label for="station_owner">Station Owner</label>
	<select name="station_user">
	<?php
	$qry="select * from tble_user where role_id=2";
	$ds=mysqli_query($con,$qry);
	while($row=$ds->fetch_array()){
		echo "<option";
		echo " value=";
		echo $row['user_id'];
		echo ">".$row['first_name'];
		echo "</option>";
	}
	?>
	</select>
	</div>
	
	
	<div class="form-group">
	<input type="submit" name="btnsave" class="btn btn-success" value="Save" />	
	</div>
	

<?php } ?>
</form>
</div>
<?php

include 'footer.php';
?>

<?php


if(isset($_POST['btnsave'])){
	
	/*$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$password=$_POST['password'];
	$role=$_POST['role'];

	$qry="INSERT INTO `tble_user`(`first_name`, `last_name`, `email`, `phone`, `password`, `role_id`) VALUES 
	('$firstname','$lastname','$email','$phone','$password','$role')";*/

    $stationname=urlencode($_POST['stationname']);
    $address=urlencode($_POST['address']);
    $link=urlencode($_POST['link']);
    $personname=urlencode($_POST['personname']);
    $phone=$_POST['phone'];
    $capacity=$_POST['capacity'];
    $opentime=$_POST['opentime'];
    $closetime=$_POST['closetime'];
	$zipcode=$_POST['zipcode'];
	$img=$_FILES['img']['name'];
	$user=$_POST['station_user'];

	$folder="image/";

	move_uploaded_file($_FILES['img']['tmp_name'],$folder.$img);

    if(isset($_GET['stationid'])){
		if(empty($img)){
			$qry="update station_details set station_name='$stationname',address='$address',location_link='$link',contact_person='$personname',con_per_phone='$phone',veh_capacity='$capacity',station_open_time='$opentime',station_clse_time='$closetime',zipcode='$zipcode' where station_id=".$_GET['stationid'];
		}else
			$qry="update station_details set image='$img',station_name='$stationname',address='$address',location_link='$link',contact_person='$personname',con_per_phone='$phone',veh_capacity='$capacity',station_open_time='$opentime',station_clse_time='$closetime',zipcode='$zipcode' where station_id=".$_GET['stationid'];
	}else{
    $qry="INSERT INTO `station_details`(`station_name`, `address`, `location_link`, `contact_person`, `con_per_phone`, `veh_capacity`, `station_open_time`, `station_clse_time`,zipcode,image,station_user) VALUES 
    ('$stationname','$address','$link','$personname','$phone','$capacity','$opentime','$closetime','$zipcode','$img','$user')";
    }
   //echo $qry;
	$ans=mysqli_query($con,$qry);
	if($ans>0)
		echo "<script>location.href='station.php';</script>";
    
	
}

?>


