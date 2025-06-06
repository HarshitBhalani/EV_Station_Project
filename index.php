<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script>
    function checkValidation(){
        var email=document.getElementById("email").value;
        var password=document.getElementById("password").value;
        if(email.length==0){
            alert ("Please Enter Email");
        }else if(password.length==0){
            alert ("Please Enter Password");
        }
    }
</script>
</head>
<body>
	
	
	<div class="container-login100" style="background-image: url('bg.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form method="POST" class="login100-form validate-form">
				<span class="login100-form-title p-b-37">
					Sign In
				</span>

                <div class="wrap-input100 validate-input m-b-20" data-validate="Select Role">
                <label for="role">Select Role</label>
                <select name="role" id="role" class="wrap-input100">
                    <option value="1">ADMIN</option>
                    <option value="2">STATION OWNER</option>
                </select>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter email">
					<input class="input100" type="text" name="email" id="email" placeholder="Enter Email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="password" id="password" placeholder="Enter Password">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
                <input type="submit" onclick="checkValidation();" class="btn btn-primary" name="btnLogin" id="btnLogin" value="Login" />
					<!--button class="login100-form-btn">
						Sign In
					</button-->
				</div>

				<div class="text-center p-t-57 p-b-10">
					<span class="txt1">
						
					</span>
				</div>

				<!--<div class="flex-c p-b-112">
					<a href="#" class="login100-social-item">
						<i class="fa fa-facebook-f"></i>
					</a>

					<a href="#" class="login100-social-item">
						<img src="images/icons/icon-google.png" alt="GOOGLE">
					</a>
				</div>-->

				<!--div class="text-center">
					<a href="#" class="txt2 hov1">
						Sign Up
					</a>
				</div-->
			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

<?php

include 'connection.php';
if(isset($_POST['btnLogin']))
{

    $role=$_POST['role'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);

    
        $qry="select * from tble_user where email='$email' and password='$password' and role_id='$role'";
    
    	$result=mysqli_query($con,$qry);
    	if(mysqli_num_rows($result)>0){
		while($row=$result->fetch_array()){
        $_SESSION['type']=$role;
		$_SESSION['userid']=$row['user_id'];
		$_SESSION['email']=$row['email'];
		

		
        if($role=="1"){
        echo "<script>location.href='home.php';</script>";
            //header("location:home.php");
		}else{
            echo "<script>location.href='branch_home.php';</script>";
            //header("location:branch_home.php");
	        
        }
	}
        echo "Login Sucessfully";
    }else{
        echo "Login Error";
    }

    

	


}
?>
