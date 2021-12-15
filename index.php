<?php
$todaytime=time();
$stopdate= mktime(0,0,0,12,23,2021);
$countdown= $stopdate-$todaytime;
$month= date('m', $countdown);
$days= date('d', $countdown);
$hours= date('h', $countdown);
$secs= date('s', $countdown);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> NSU Election</title>
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
	<link rel="stylesheet" type="text/css" href="login-assets/css/style.css">
<!--===============================================================================================-->
</head>
<body style=" background-repeat: no-repeat; background-attachment:fixed; background-size:100%,100%">
	
	<div class="row-t-10" style="background-color:grey;">
		<img src="images/nsu.png" style= " margin-left:10%; display:inline; height:50px;" />
		<label style="color:#4f4f4f; margin-left:6%;"> NIGERIAN STUDENT UNION </label>
		<label style="color:green; margin-left:16%; display:inline-block;" class="login"> <a href="login" class="">Login</a> / <a href="register_user" class="">Register</a></label>
		<label for="" style="margin-left:5%; color:#25c5c5;">Countdown to end of voting: <?php echo " $days days and $hours hours left..";?></label>
	</div>
	<div class="blog-section">
		<div class="content">
			<div class="title">
				<h2>NSU AWARDS NIGHT</h2>
				<p>Even though we've been through lockdown, Our amazing personalities still remains. So we present the categories...</p>
			</div>
			<div class="cards">
				<div class="card">
					<div class="image-section">
						<img src="images/fashion.jpg" alt="img">
					</div>
					<div class="article">
						<h4>FASHIONISTA OF THE YEAR (MALE)</h4>
						<p>Recognises a male Nigerian student who over the last 12 months has served us looks, 
							drips, fashion and style.</p>
					</div>
					<div class="view">
						<a href="login" class="button">Proceed to Voting</a>
					</div> 
				</div>
				<div class="card">
					<div class="image-section">
						<img src="images/fashion_f.jpeg" alt="img">
					</div>
					<div class="article">
						<h4>FASHIONISTA OF THE YEAR (FEMALE)</h4>
						<p>Recognises a female Nigerian student who over the last 12 months has served us looks, 
							drips, fashion and style.</p>
					</div>
					<div class="view">
						<a href="login" class="button">Proceed to Voting</a>
					</div> 
				</div>
				<div class="card">
					<div class="image-section">
						<img src="images/influence.jpg" alt="img">
					</div>
					<div class="article">
						<h4>MOST INFLUENTIAL PERSON OF THE YEAR </h4>
						<p>Recognises a Nigerian student who has had the greatest impact in NSU.</p>
					</div>
					<div class="view">
						<a href="login" class="button">Proceed to Voting</a>
					</div> 
				</div>
				<div class="card">
					<div class="image-section">
						<img src="images/enter.png" alt="img">
					</div>
					<div class="article">
						<h4>ENTREPRENEUR OF THE YEAR </h4>
						<p>This award celebrates creativity, consistency and resilience in entrepreneurship of any kind.</p>
					</div>
					<div class="view">
						<a href="login" class="button">Proceed to Voting</a>
					</div> 
				</div>
				<div class="card">
					<div class="image-section">
						<img src="images/sport_m.jpg" alt="img">
					</div>
					<div class="article">
						<h4>SPORTSMAN OF THE YEAR </h4>
						<p>Recognises a male Nigerian student who has achieved the most in sports over the last 12 months.</p>
					</div>
					<div class="view">
						<a href="login" class="button">Proceed to Voting</a>
					</div> 
				</div>
				<div class="card">
					<div class="image-section">
						<img src="images/sport_f.jpg" alt="img">
					</div>
					<div class="article">
						<h4>SPORTSWOMAN OF THE YEAR </h4>
						<p>Recognises a female Nigerian student who has achieved the most in sports over the last 12 months.</p>
					</div>
					<div class="view">
						<a href="login" class="button">Proceed to Voting</a>
					</div> 
				</div>
				<div class="card">
					<div class="image-section">
						<img src="images/art.jpg" alt="img">
					</div>
					<div class="article">
						<h4>ARTISTE OF THE YEAR </h4>
						<p>Recognises a Nigerian student who has put in a lot of work as an artiste over the last 12 months.</p>
					</div>
					<div class="view">
						<a href="login" class="button">Proceed to Voting</a>
					</div> 
				</div>
				<div class="card">
					<div class="image-section">
						<img src="images/entre.jpg" alt="img">
					</div>
					<div class="article">
						<h4>ENTERTAINER OF THE YEAR </h4>
						<p>Recognises a Nigerian student who has delivered the most as an entertainer over the last 12 months.</p>
					</div>
					<div class="view">
						<a href="login" class="button">Proceed to Voting</a>
					</div> 
				</div>
				<div class="card">
					<div class="image-section">
						<img src="images/burna.png" alt="img">
					</div>
					<div class="article">
						<h4>SOCIAL MEDIA PERSONALITY OF THE YEAR </h4>
						<p>Recognises a Nigerian student who has had the highest engagements on social media over the last 12 months.</p>
					</div>
					<div class="view">
						<a href="login" class="button">Proceed to Voting</a>
					</div> 
				</div>
				<div class="card">
					<div class="image-section">
						<img src="images/couch.jpg" alt="img">
					</div>
					<div class="article">
						<h4>COUCH POTATO OF THE YEAR </h4>
						<p>Recognises a Nigerian student who has been on the couch the most over the last 12 months. 		
						This award celebrates solitude in a noisy world.</p>
					</div>
					<div class="view">
						<a href="login" class="button">Proceed to Voting</a>
					</div> 
				</div>
				<div class="card">
					<div class="image-section">
						<img src="images/social.jpg" alt="img">
					</div>
					<div class="article">
						<h4>SOCIALITE OF THE YEAR </h4>
						<p>Recognises a Nigerian student who has made a great deal of connections and has attended a considerable number of social events over the last 12 months.</p>
					</div>
					<div class="view">
						<a href="login" class="button">Proceed to Voting</a>
					</div> 
				</div>
				<div class="card">
					<div class="image-section">
						<img src="images/rook.jfif" alt="img">
					</div>
					<div class="article">
						<h4>ROOKIE OF THE YEAR </h4>
						<p>Recognises the most active Nigerian student who just arrived in Sumy in the last 12 months.</p>
					</div>
					<div class="view">
						<a href="login" class="button">Proceed to Voting</a>
					</div> 
				</div>
				<div class="card">
					<div class="image-section">
						<img src="images/book.jpg" alt="img">
					</div>
					<div class="article">
						<h4>BOOKWORM OF THE YEAR</h4>
						<p>Recognises a Nigerian student who has displayed academic excellence over the last 12 months.</p>
					</div>
					<div class="view">
						<a href="login" class="button">Proceed to Voting</a>
					</div> 
				</div>
				
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