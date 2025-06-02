<!DOCTYPE html>
<html lang="en">
<head>
    <title>Charging Stations</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <h1 class="page-header">Charging Stations</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
<form method="post">
  <input type="text" placeholder="Search Charging Station" id="search" name="txtsearch" class="form-control"><br>
  <input type="submit" name="search" value="Search" class="btn btn-primary">
</form>
<hr>
    
<div class="row">
<?php
include_once 'connection.php';
if(isset($_POST['search'])){
    $s=$_POST['txtsearch'];
    $qry="SELECT * FROM station_details where station_name like '$s%' or address like '$s%' or zipcode like '$s%' ";
}else{
    $qry="SELECT * FROM `station_details`";
}
$ds=mysqli_query($con,$qry);
while($row=$ds->fetch_array()){
?>
        <div class="col-lg-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-12">
                            <img src="../image/<?php echo $row['image']; ?>" width="325px" height="250px"  />
                        </div>
                        <div class="col-xs-12 text-center">
                            <?php 
                            
                            echo "<h4>".urldecode($row['station_name'])."</h4>";


                            ?>
                        </div>
                    </div>
                </div>
                <a href="pump_detail.php?id=<?php echo $row['station_id']; ?>">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

        
  
<?php } ?>    
</div>
</div>
</body>
</html>
