<?php
include 'connection.php';

if(isset($_GET['userid'])){
$qry="delete from tble_user where user_id=".$_GET['userid'];
mysqli_query($con,$qry);
echo "<script>location.href='emp.php';</script>";
}

if(isset($_GET['stationid'])){
    $qry="delete from station_details where station_id=".$_GET['stationid'];
    mysqli_query($con,$qry);
    echo "<script>location.href='station.php';</script>";
    }
?>