<?php
include 'header.php';
include 'connection.php';
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Admin Dashboard</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-book fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php 
                            
                            $qry="select * from tble_user";

                            $data=mysqli_query($con,$qry);

                            echo mysqli_num_rows($data);

                            ?></div>
                            <div>Users</div>
                        </div>
                    </div>
                </div>
                <a href="emp.php">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-building fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">
                            <?php
                             $qry="select * from station_details";

                             $data=mysqli_query($con,$qry);
 
                             echo mysqli_num_rows($data);
 
                            
                            
                            ?></div>
                            <div>Stations</div>
                        </div>
                    </div>
                </div>
                <a href="station.php">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
       
        <!--div class="col-lg-3 col-md-6">
        
        <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-book fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">
                            <?php
                             $qry="select * from booking where status='PENDING'";

                             $data=mysqli_query($con,$qry);
 
                             echo mysqli_num_rows($data);
 
                            
                            
                            ?>
                            </div>
                            <div>Pending Bookings</div>
                        </div>
                    </div>
                </div>
                <a href="booking.php">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>


        </div>
        
        <div class="col-lg-3 col-md-6">
        
        <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-book fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">
                            <?php
                             $qry="select * from booking where status='RUNNING'";

                             $data=mysqli_query($con,$qry);
 
                             echo mysqli_num_rows($data);
 
                            
                            
                            ?>
                            </div>
                            <div>Running Bookings</div>
                        </div>
                    </div>
                </div>
                <a href="running.php">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>


        </div>
        <div class="col-lg-3 col-md-6">
        
        <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-book fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">
                            <?php
                             $qry="select * from booking where status='COMPLETE'";

                             $data=mysqli_query($con,$qry);
 
                             echo mysqli_num_rows($data);
 
                            
                            
                            ?>
                            </div>
                            <div>Complete Bookings</div>
                        </div>
                    </div>
                </div>
                <a href="complete.php">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
</div-->
        <div class="col-lg-3 col-md-6">
            
        </div>
        <div class="col-lg-3 col-md-6">
            
        </div>
        <div class="col-lg-3 col-md-6">
            
        </div>
        <div class="col-lg-3 col-md-6">
            
        </div>
        <div class="col-lg-3 col-md-6">
            
        </div>
        <div class="col-lg-3 col-md-6">
            
        </div>
        <div class="col-lg-3 col-md-6">
            
        </div>
        <div class="col-lg-3 col-md-6">
            
        </div>
        <div class="col-lg-3 col-md-6">
            
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-8">


            <!-- /.panel -->
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">

            <!-- /.panel .chat-panel -->
        </div>
        <!-- /.col-lg-4 -->
    </div>
    <!-- /.row -->
</div>

<?php
include 'footer.php';
?>