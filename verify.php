<?php

include 'header.php';
include 'connection.php';

?>
<div id="page-wrapper">

<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Verify Token Number</h1>
        </div>
</div>
<form method="post">


	<div class="form-group">
	<label for="firstname">Verify Token Number</label>
	<input type="text" name="tokenno" value="" class="form-control" required/>	
	</div>

	<div class="form-group">
	<input type="submit" name="btnsave" class="btn btn-success" value="Verify" />	
	</div>
</form>

<?php
if(isset($_POST['btnsave'])){
	$token=$_POST['tokenno'];
	if($token==$_GET['token']){
		$qry="update booking set status='RUNNING' where token_no=".$_GET['token']." and user_id=".$_GET['userid'];
		mysqli_query($con,$qry);
		echo "<script>location.href='running.php';</script>";		
	}else{
		echo "Token Number does not match";
	}
}



?>


</div>
<?php

include 'footer.php';
?>