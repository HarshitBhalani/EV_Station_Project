<?php

include 'header.php';
include 'connection.php';

?>
<div id="page-wrapper">

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add New User</h1>
        </div>
</div>
<form method="post">

<?php
if(isset($_GET['userid'])){
$userID=$_GET['userid'];
$qry="select * from tble_user where user_id=".$userID;
$ds=mysqli_query($con,$qry);
while($row=$ds->fetch_array()){
?>
	<div class="form-group">
	<label for="firstname">First Name</label>
	<input type="text" name="firstname" value="<?php echo urldecode($row['first_name']); ?>" class="form-control" required/>	
	</div>

	<div class="form-group">
	<label for="lastname">Last Name</label>
	<input type="text" name="lastname" value="<?php echo urldecode($row['last_name']); ?>" class="form-control" required/>	
	</div>

	<div class="form-group">
	<label for="email">Email</label>
	<input type="email" name="email" id="email" value="<?php echo urldecode($row['email']); ?>" class="form-control" required/>	
	</div>
	
	<div class="form-group">
	<label for="phone">Mobile No</label>
	<input type="text" maxlength="10" id="phone" name="phone" value="<?php echo urldecode($row['phone']); ?>" class="form-control" required/>	
	</div>
	
	<div class="form-group">
	<label for="password">Password</label>
	<input type="password" name="password" value="<?php echo urldecode($row['password']); ?>" class="form-control" required/>	
	</div>
	
	<div class="form-group">
	<label for="password">Role</label>
	<select name="role" class="form-control">
		<option value="1" <?php echo $row['role_id']=="1"?'selected':''; ?>>ADMIN</option>
		<option value="2" <?php echo $row['role_id']=="2"?'selected':''; ?>>STATION OWNER</option>
		<option value="2" <?php echo $row['role_id']=="3"?'selected':''; ?>>CUSTOMER</option>	
	</select>
	</div>
	
	<div class="form-group">
	<input type="submit" name="btnsave" class="btn btn-success" value="Save" />	
	</div>
	
	
<?php }}else{ ?>


	<div class="form-group">
	<label for="firstname">First Name</label>
	<input type="text" name="firstname" value="" class="form-control" required/>	
	</div>

	<div class="form-group">
	<label for="lastname">Last Name</label>
	<input type="text" name="lastname" value="" class="form-control" required/>	
	</div>

	<div class="form-group">
	<label for="email">Email</label>
	<input type="email" name="email" id="email" value="" class="form-control" required/>	
	</div>
	
	<div class="form-group">
	<label for="phone">Mobile No</label>
	<input type="text" maxlength="10" id="phone" name="phone" value="" class="form-control" required/>	
	</div>
	
	<div class="form-group">
	<label for="password">Password</label>
	<input type="password" name="password" value="" class="form-control" required/>	
	</div>
	
	<div class="form-group">
	<label for="password">Role</label>
	<select name="role" class="form-control">
		<option value="1">ADMIN</option>
		<option value="2">STATION OWNER</option>
		<option value="3">CUSTOMER</option>	
	</select>
	</div>
	
	<div class="form-group">
	<input type="submit" name="btnsave" class="btn btn-success" value="Save" />	
	</div>


<?php 
}
?>
</form>
</div>
<?php

include 'footer.php';
?>

<?php

if(isset($_POST['btnsave'])){
	
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$password=md5($_POST['password']);
	$role=$_POST['role'];

	if(isset($_GET['userid'])){
		$qry="update tble_user set first_name='$firstname',last_name='$lastname',email='$email',password='$password',phone='$phone' where user_id=".$_GET['userid'];
	}else{

	$qry="INSERT INTO `tble_user`(`first_name`, `last_name`, `email`, `phone`, `password`, `role_id`) VALUES 
	('$firstname','$lastname','$email','$phone','$password','$role')";
	}	
	$ans=mysqli_query($con,$qry);
	if($ans>0)
		echo "<script>location.href='emp.php';</script>";
	
	
}

?>


