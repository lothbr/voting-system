<?php

require('Controllers/contestantcontroller.php');
require('Controllers/position.php');
$position = new PositionController();
$get_data = $position->get_positions(); 
$test = new ContestantController();
if(isset($_POST['register'])){
//$add = $test->add_contestant($_POST['name'],$_POST['matric_no'],$_POST['level'],$_POST['position']);
$add = $test->add_contestant_arr($_POST, $_FILES['myimage']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
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
	<style type="text/css">
		.label-input100
		{
			color: white;
		}
	</style>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/sumy_bg.jpg');">
			<div class="wrap-login100 p-t-50 p-b-50">
				<form method='POST' class="login100-form validate-form" enctype="multipart/form-data">
<h3 style="margin-bottom: 30px;margin-top: 0px;">ADD CONTESTANTS</h3>
					<div class="wrap-input100 validate-input" data-validate="Name is required">
						<span class="label-input100">Full Name</span>
						<input class="input100" type="text" name="name" placeholder="Name...">
						<span class="focus-input100"></span>
					</div>

					

					<div class="wrap-input100 validate-input" data-validate="Position is required">
						<span class="label-input100">Position</span>
						<select class='input100' name="position" id="">
							<option selected value="">SELECT</option>
		<?php foreach ($get_data as $value) {?>
		<option value="<?php echo strtoupper($value->position) ?>"><?php echo strtoupper($value->position) ?></option>
		<?php } ?>
						</select>
						<span class="focus-input100"></span>
					</div>

				
					<div class="wrap-input100">
						<span class="label-input100">Image</span>
					<input class="input100" type="file" name="myimage">
				</div>

				

					<div class="container-login100-form-btn p-t-10">
						<button name='register' class="login100-form-btn">
							Register
						</button>
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
<script src="login-assets/js/validate.js"></script>
	<script src="login-assets/js/main.js"></script>
</body>
</html>