<?php

require_once('connection.php');
require('Controllers/student_poolcontroller.php');
$ip_ref = new StudentPoolController();
$ip = $ip_ref->get_client_ip();
	
	error_reporting(E_ALL); 
	ini_set('display_errors', 1);
  	//Process
  	if (isset($_POST['add']))
  	{
  		$fullname = addslashes( $_POST['fullname'] ); //prevents types of SQL injection
  		$email = $_POST['email'];
		$sql = $mysqli->query("SELECT email FROM student_pool WHERE email = '$email'")or die(mysqli_error());
		$sql1 = $mysqli->query("SELECT ip FROM student_pool WHERE ip = '$ip'")or  die(mysqli_error());
		
		if ($sql) {
			if (mysqli_num_rows($sql) > 0) {
				echo "This Email is registered, please Click <a href ='login.php'> here to login ! </a>";
			}
		}
		else if ($sql1){
			if (mysqli_num_rows($sql1) > 0) {
				echo "This device has registered for voting, please Click <a href ='login.php'> here to login ! </a>";
			}
		} else{
		
			$sql = $mysqli->query( "INSERT INTO student_pool (name, email,ip) VALUES ('$fullname', '$email', '$ip')" )
			  or die( mysqli_error() );

			 header('Location:login');
		}
  		
  	}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register NSU Election</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/nsu.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="register-assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="register-assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="register-assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="register-assets/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="register-assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="register-assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="register-assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="register-assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="register-assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="register-assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="register-assets/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/sumy_mp.jpg');"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form method= 'POST' class="login100-form validate-form" action="register_user.php">

					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">User Name</span>
						<input class="input100" type="text" name="fullname" placeholder="username...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Email is required">
						<span class="label-input100">Email </span>
						<input class="input100 form-control form-control-sm" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>


					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="add" style="margin-left:auto; margin-right:auto;">
								Sign Up
							</button>
						</div>
					</div>
					  <a href="login.php"style="margin-top:15px; font-familt:cursive; margin-left: 35px;"> Click here to Login </a> </p>
					
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="register-assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="register-assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="register-assets/vendor/bootstrap/js/popper.js"></script>
	<script src="register-assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="register-assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="register-assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="register-assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="register-assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="register-assets/js/main.js"></script>

</body>
</html>