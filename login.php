<?php
require('Controllers/student_poolcontroller.php');
$auth = new StudentPoolController();
$login_check=$auth->check_login();
error_reporting(E_ALL); 
ini_set('display_errors', 1);
if($login_check)
{
	header('Location:vote');
}


if(isset($_POST['login']))
{
	$login = $auth->login($_POST['email']);
	if ($login==true) {
		header('Location:vote');
	}
	else {
		echo "<script>alert('Wrong email. Please confirm and try again');</script>";
	}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login NSU Election</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/nsu.png"/>
<!--==============================
		}=================================================================-->
	<link rel="stylesheet" type="text/css" href="login-assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login-assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="login-assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/sumy_bg.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form method='POST' class="login100-form validate-form">

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Email is required">
						<input class="input100" type="email" name="email" placeholder="Email.." value="<?php if(isset($_POST['login'])) echo $_POST['email']; ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button name='login' class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center w-full p-t-25 p-b-230">
						<a href="#" class="txt1">
                            <p> Click <a href="register_user.php"> here to register </a> </p>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="login-assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login-assets/vendor/bootstrap/js/popper.js"></script>
	<script src="login-assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login-assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login-assets/js/main.js"></script>

</body>
</html>