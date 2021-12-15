
<!doctype html>
<html lang="en">

<!-- Mirrored from demos.creative-tim.com/material-bootstrap-wizard/wizard-build-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Sep 2018 08:26:12 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>NSU VOTING</title>

	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="images/nsu.png" />

	<!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/material-bootstrap-wizard"/>

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/material-bootstrap-wizard.css" rel="stylesheet" />

	<!--  Just for demo purpose, do not include in your project     -->
	<link href="assets/css/demo.css" rel="stylesheet" />
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
	<!-- End Google Tag Manager -->
	</head>

	<body>
		<style>
/* width */
::-webkit-scrollbar {
    width: 7px;
}

/* Track */
::-webkit-scrollbar-track {
    background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #555; 
}
</style>
		<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div class="image-container set-full-height" style="background-image: url('images/sumy_mp.jpg')">

	    <!--   Big container   -->
		<div id="result">
	    <div class="container" id="container">
	        <div class="row">
		        <div class="col-sm-12">
		            <!--      Wizard container        -->
		           <div class="wizard-card" style="overflow:hidden;">
				   <?php
require('Controllers/resultController.php');
$result = new resultController();
$data = $result->display_result();
$position = new PositionController();
$positions = $position->get_positions();
#var_dump($data);
foreach ($positions as $value) {?>
	<div class="col-sm-6" style="float:left; background-color:white; height:300px; overflow-y: scroll;
    scroll-behavior: smooth; margin-bottom:10px;">
  <h5>POST : <?= strtoupper($value->position) ?></h5>
	<?php foreach ($data as $contestant) {
		if(strtolower($value->position)!== strtolower($contestant->position))
		{
			continue;
		}?>
		  <strong><?= $contestant->name ?></strong> <span class="pull-right">Number of votes: <?= $contestant->no_of_votes ?></span>
  <div class="progress">
      <div class="progress-bar"  role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax-"100" style="width: <?= $contestant->percentage_votes ?>%;">
	  <?= number_format($contestant->percentage_votes, 2) ?>%
	  </div>
  </div>
        
        
        <?php
        

    } ?>
    </div>
<?php }


?>


</div>
				   </div>
				</div>
			</div>
		</div>
		</div>
	</div>
<div id="test">

</div>
</body>
	<!--   Core JS Files   -->
    <script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/demo.js" type="text/javascript"></script>
	<script src="assets/js/material-bootstrap-wizard.js" type="text/javascript"></script>

    <!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
	<script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>
	<script>
		setInterval(function(){
  			$('#result').load("result.php #container");
		}, 2000);
	</script>
<!-- Mirrored from demos.creative-tim.com/material-bootstrap-wizard/wizard-build-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Sep 2018 08:26:13 GMT -->
</html>
