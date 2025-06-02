<?php

include 'header.php';
include 'connection.php';

$userid=$_GET['user_id'];
$booking_id=$_GET['booking_id'];
?>
<div id="page-wrapper">

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Payment</h1>
        </div>
</div>
<form method="post">


	<div class="form-group">
	<label for="firstname">Payment</label>
	<input type="text" name="amount" value="" class="form-control" required/>	
	</div>

    <div class="form-group">
	<label for="payment">Select Payment Type</label>
	<select name="payment_type" class="form-control">
		<option value="1">CASH</option>
		<option value="2">ONLINE</option>	
	</select>
	</div>

	<div class="form-group">
	<input type="submit" name="btnsave" class="btn btn-success" value="Save" />	
	</div>
</form>

<?php
if(isset($_POST['btnsave'])){
	$amount=$_POST['amount'];
	$type=$_POST['payment_type'];
	$date=date('Y-m-d');
		$qry="INSERT INTO `payment`(`user_id`, `date`, `amount`, `booking_id`, `payment_type`) VALUES ('$userid','$date','$amount','$booking_id','$type')";
		mysqli_query($con,$qry);

		$qry2="update booking set status='PAYMENT_RECEIVED' where booking_id='$booking_id'";
		mysqli_query($con,$qry2);
		
		if($type=="2"){
			echo "<script>location.href='payment.php?amount=$amount';</script>";
		}else{
			echo "<script>alert('Successfully Payment');</script>";
			echo "<script>location.href='complete.php';</script>";
	}
}




?>


</div>
<?php

include 'footer.php';
?>