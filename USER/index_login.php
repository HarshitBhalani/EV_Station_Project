<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
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
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="fname" id="name" placeholder="First Name" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="lname" id="name" placeholder="Last Name" required/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email" required/>
                            <span toggle="#email" class="zmdi zmdi-email field-icon toggle-email"></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="psw" id="password" placeholder="Password" required/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="text" maxlength="10" class="form-input" name="phone" id="phone" placeholder="Phone" required/>
                            <span toggle="#phone"  class="zmdi zmdi-phone field-icon toggle-phone"></span>
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" name="btnsav" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                    Already have an account ? <a href="login.php" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
<?php

include 'connection.php';


if(isset($_POST['btnsav'])){
	
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$password=md5($_POST['psw']);
	$role=3;

	
	$qry="INSERT INTO `tble_user`(`first_name`, `last_name`, `email`, `phone`, `password`, `role_id`) VALUES 
	('$fname','$lname','$email','$phone','$password','$role')";
  //echo $qry;
	$ans=mysqli_query($con,$qry);
	if($ans>0)
		echo "<script>location.href='login.php';</script>";
	
	
}

?>