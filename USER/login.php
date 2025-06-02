
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <script>
        $(document).ready(function(){
      
        $("#email").on('change',function(){
                                   var email = $("#email").val();
                                   var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                                   if (!filter.test(email)) {
                                     //alert('Please provide a valid email address');
                                     
                                     alert(email+" is not a valid email");
                                     email.focus;
                                     //return false;
                                  } 
                               });
      
                               $("#phone").on('change',function(){
                                   var email = $("#phone").val();
                                   if (email.length<10) {
                                     //alert('Please provide a valid email address');
                                     email.focus;
                                     $("#phone").val("");
                                     alert("Enter valid phone");
                                     //return false;
                                  } 
                               });
      
      
                   $("#phone").keypress(function (e) {
                               //if the letter is not digit then display error and don't type anything
                               if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                                  //display error message
                                  alert("Digits Only");
                                         return false;
                              }
                             });
                          
      });
      </script>
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Login account</h2>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email" required/>
                            <span toggle="#email" class="zmdi zmdi-email field-icon toggle-email"></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="psw" id="password" placeholder="Password" required/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnsav" id="submit" class="form-submit" value="Sign In"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Register an account ? <a href="index_login.php" class="loginhere-link">Register here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

<?php

include 'connection.php';

if(isset($_POST['btnsav'])){
	
	
	$email=$_POST['email'];
	
	$password=md5($_POST['psw']);
	$role=3;

	
	$qry="select  * from `tble_user` where email='$email' and password='$password'";
  //echo $qry;
	$ans=mysqli_query($con,$qry);
	//if($ans>0)
		//echo "<script>location.href='emp.php';</script>";
	
	if(mysqli_num_rows($ans)>0){
    while($row=$ans->fetch_array()){
      $_SESSION['userid']=$row['user_id'];
      $_SESSION['name']=$row['first_name'];
      $_SESSION['email']=$row['email'];
      echo "<script>location.href='table.php';</script>";  
    }
    }else{
    echo 'fail';
  }
}

?>