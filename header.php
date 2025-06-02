<?php
session_start();
?>
<html lang="en">
<head>
  <title>EV-CHARGING STATIONS SYSTEM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrator</title>

        <!-- Bootstrap Core CSS -->
        <link  rel="stylesheet" href="assets/css/bootstrap.min.css"/>

        <!-- MetisMenu CSS -->
        <link href="assets/js/metisMenu/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="assets/css/sb-admin-2.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="assets/js/jquery.min.js" type="text/javascript"></script>
        
      <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
            <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

</head>
<body>


<?php
        
           $CURRENT_PAGE=basename($_SERVER['PHP_SELF']);
		   if($_SESSION['type']=="1"){
        ?>
        <div id="wrapper">

            <!-- Navigation -->
           <?php if($CURRENT_PAGE != 'index.php'){ ?>
                <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="">ADMIN(<?php echo $_SESSION['email']; ?>)</a>
                    </div>
                    <!-- /.navbar-header -->

                    <ul class="nav navbar-top-links navbar-right">
                        <!-- /.dropdown -->

                        <!-- /.dropdown -->
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i></a>
                            <ul class="dropdown-menu dropdown-user">
                                <!--li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a></li>
                                <li class="divider"></li-->
                                <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                            </ul>
                            <!-- /.dropdown-user -->
                        </li>
                        <!-- /.dropdown -->
                    </ul>
                    <!-- /.navbar-top-links -->

                    <div class="navbar-default sidebar" role="navigation">
                        <div class="sidebar-nav navbar-collapse">
                            <ul class="nav" id="side-menu">
                             
                                <li<?php echo ($CURRENT_PAGE == 'home.php') ? ' class="active"' : ''; ?>><a href="home.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>
                                <li<?php echo ($CURRENT_PAGE == 'emp.php' || $CURRENT_PAGE == 'add_emp.php') ? ' class="active"' : ''; ?>>
                                     <a href="#"><i class="fa fa-book fa-fw"></i> Users<i class="fa arrow"></i></a>
                                    <ul class="nav nav-second-level">
                                        <li><a href="emp.php"><i class="fa fa-list fa-fw"></i> List All User</a>
                                        
                                        </li>
                                        <li><a href="add_emp.php"><i class="fa fa-list fa-fw"></i> Add New User</a>
                                        
                                        </li>

                            
                                    </ul>            
                                        
                                </li>

                                <li<?php echo ($CURRENT_PAGE == 'station.php' || $CURRENT_PAGE == 'newstation.php') ? ' class="active"' : ''; ?>>
                                     <a href="#"><i class="fa fa-building-o fa-fw"></i>Stations<i class="fa arrow"></i></a>
                                    <ul class="nav nav-second-level">
                                     
                                        <li><a href="station.php"><i class="fa fa-list fa-fw"></i> List All Station</a>
                                        
                                        </li>

                                        <li><a href="newstation.php"><i class="fa fa-list fa-fw"></i> Add New Station</a>
                                        
                                        </li>
                                   
                                    </ul>            
                                        
                                </li>

								
								
                          </ul>
                        </div>
                        <!-- /.sidebar-collapse -->
                    </div>
                    <!-- /.navbar-static-side -->
                </nav>
		   <?php }
		   }else{ ?>
           
 <div id="wrapper">

            <!-- Navigation -->
           <?php if($CURRENT_PAGE != 'index.php'){ ?>
                <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="">Station Owner(<?php echo $_SESSION['email']; ?>)</a>
                    </div>
                    <!-- /.navbar-header -->

                    <ul class="nav navbar-top-links navbar-right">
                        <!-- /.dropdown -->

                        <!-- /.dropdown -->
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i></a>
                            <ul class="dropdown-menu dropdown-user">
                                <!--li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a></li>
                                <li class="divider"></li-->
                                <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                            </ul>
                            <!-- /.dropdown-user -->
                        </li>
                        <!-- /.dropdown -->
                    </ul>
                    <!-- /.navbar-top-links -->

                    <div class="navbar-default sidebar" role="navigation">
                        <div class="sidebar-nav navbar-collapse">
                            <ul class="nav" id="side-menu">
                             
                                <li<?php echo ($CURRENT_PAGE == 'branch_home.php') ? ' class="active"' : ''; ?>><a href="branch_home.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>     
                                <li<?php echo ($CURRENT_PAGE == 'booking.php') ? ' class="active"' : ''; ?>><a href="booking.php"><i class="fa fa-car fa-fw"></i> Pending Bookings</a></li>     
                                <li<?php echo ($CURRENT_PAGE == 'running.php') ? ' class="active"' : ''; ?>><a href="running.php"><i class="fa fa-hourglass-half fa-fw"></i> Running Booking</a></li>     
                                <li<?php echo ($CURRENT_PAGE == 'complete.php') ? ' class="active"' : ''; ?>><a href="complete.php"><i class="fa fa-book fa-fw"></i> Complete Booking</a></li>     
                                <li<?php echo ($CURRENT_PAGE == 'transaction_history.php') ? ' class="active"' : ''; ?>><a href="transaction_history.php"><i class="fa fa-list-alt fa-fw"></i> Transaction Book</a></li>
                                    
                    
                          </ul>
                        </div>
                        <!-- /.sidebar-collapse -->
                    </div>
                    <!-- /.navbar-static-side -->
                </nav>
		   <?php } } ?>