<?php
include 'connection.php';

if(isset($_GET['token_no'])){
$qry="update booking set status='COMPLETE' where token_no=".$_GET['token_no'];
mysqli_query($con,$qry);
echo "<script>location.href='complete.php';</script>";
}

