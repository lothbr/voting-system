<?php
 require('Controllers/position.php');
 require('Controllers/student_poolcontroller.php');
 require('Controllers/contestantcontroller.php');

 if(!isset($_SESSION))
 {
 session_start();
 }
 $auth = new StudentPoolController();
 $check = $auth->check_login();
 if(!$check)
 {
   header('Location:index');
 }
 $position = new PositionController();
 $contestantC = new ContestantController();
 $positions = $position->get_positions();
	
 
 ?>
 <!doctype html>
<html lang="en">

<!-- Mirrored from demos.creative-tim.com/material-bootstrap-wizard/wizard-book-room.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Sep 2018 08:26:00 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>NSU VOTING </title>

	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="images/nsu.png" />

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!-- Canonical SEO -->


	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/material-bootstrap-wizard.css" rel="stylesheet" />
	<link href="assets/css/sweetalert.css" rel="stylesheet" />
	<link href="assets/sweet-alert/sweetalert2.min.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
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
		<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div class="image-container set-full-height" style="background-image: url('images/sumy_bg.jpg')">
	    <!--   Creative Tim Branding   -->
	    <a href="logout" >
	         <div class="logo-container">
	            <div class="logo">
	                <img src="assets/img/new_logo.png">
	            </div>
	            <div style="color:white;">
	                <b>Welcome <?php echo $_SESSION['email'] ?> </b>
	            </div>
	        </div>
		</a>

		
		
	
		<!--  Made With Material Kit  -->
		

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-lg-12">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="red" id="wizard">
		                    <form method="post"  id="vote" >
		                <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->
								<input type="hidden" name="userID" value="<?= $_SESSION['userID'] ?>"/>
		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        		NSU VOTING
		                        	</h3>
									<h5>Note: Every step is compulsory.</h5>
		                    	</div>
								<div class="wizard-navigation" style="display:none;">
									<ul>
										<?php foreach($positions as $position){ ?>
										<li><a href="#<?= $position->id ?>" data-toggle="tab"></a></li>
										<?php } ?>
										<li><a href="#votes" data-toggle="tab"></a></li>

			                        </ul>
								</div>

		                        <div class="tab-content">

		                        	<?php foreach ($positions as $value) {?>
		                            <div class="tab-pane" id="<?php echo $value->id ?>">
		                            	<div class="row">
											<div class="wizard-steps">
										<h4 class="info-text">Who is your <b><?php echo $value->position ?></b>? </h4>
										<div class="col-sm-10 col-sm-offset-1">
										<?php
										
										 $contestants = $contestantC->get_contestant_by_position($value->position);
										// var_dump($contestants);
										
										foreach($contestants as $contestant){ ?>
		                                        <div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip">
		                                                <input type="radio" class="president" name="<?= str_replace(' ','_', $value->position) ?>" value="<?= $contestant->name ?>">
		                                                <div>
															<img class="icon" style="height: 200px; width: 200px;" src="<?php echo $contestant->imagefolder.''.$contestant->imagename ?>"/>
		                                                    
		                                                </div>
		                                                <h6><b><?= $contestant->name ?></b></h6>
		                                            </div>
		                                        </div>
									<?php } ?>
									
									<div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip">
		                                                <input type="radio" class="president" name="<?= str_replace(' ','_', $value->position) ?>" value="no vote">
		                                                <div>
															<img class="icon" style="height: 200px; width: 200px;" src="assets/img/default-avatar.png"/>
		                                                    
		                                                </div>
		                                                <h6><b>No vote</b></h6>
		                                            </div>
		                                        </div>

											
		                                    </div>

		                                	</div>
		                            	</div>
		                            </div>
									<?php } ?>
									
									<div class="tab-pane" id="votes">
		                            	<div class="row">
											<div class="wizard-steps">
										<h4 class="info-text">Confirm your <b>Votes</b> </h4>
										<div class="col-sm-10 col-sm-offset-1">
												                                        <div class="col-sm-12">
													
														<table border="0">
															<tr>
																<!-- <th>POSITION</th>
																<th>CANDIDATE</th> -->
															</tr>
														<?php 
														$sn = 100;
														foreach ($positions as $value) {
															$sn++;?>
														<tr>
															<td style="margin:6px;"><b>
																<!-- <?= $value->position ?> -->
															</b></td>
																<td style="margin:6px;" id="<?= $sn ?> "> </td>
														</tr>
														<?php } ?>
														</table>
		                                            </div>
		                                        </div>
									
											
		                                    </div>

		                                	</div>
		                            </div>

	                        	<div class="wizard-footer">
	                            	<div class="pull-right">
	                                    <input type='button' class='btn btn-next btn-fill btn-danger btn-wd' name='next' onclick="vote_confirm()" value='Next' />
	                                    <input type='button' class='btn btn-finish btn-fill btn-danger btn-wd' name='finish' onclick="vote()" value='Finish' />
	                                </div>
	                                <div class="pull-left">
	                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />

										<div class="footer-checkbox">
											<!-- -->
										</div>
	                                </div>
	                                <div class="clearfix"></div>
	                        	</div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div> <!-- row -->
		</div> <!--  big container -->

	    <div class="footer">
	        <div class="container text-center">
	            
	        </div>
	    </div>

		
<!-- Required modal -->

	<div class="modal" id="required" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div style="width:300px;" class="modal-body">
                    <i class="fa fa-laptop"></i><h3 align="center">Select a candidate</h3>
            </div>
        </div>
    </div>
</div>


	</div>
	<div class="modal animated bounceIn" id="add-success" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div style="width:300px;" class="modal-body">
                <div class='text-center'>
                    <div class="swal2-icon swal2-success swal2-animate-success-icon" style="display: block;">
                        <div class="swal2-success-circular-line-left" style="//background: rgb(255, 255, 255);"></div><span
                            class="swal2-success-line-tip swal2-animate-success-line-tip"></span> <span class="swal2-success-line-long swal2-animate-success-line-long"></span>
                        <div class="swal2-success-ring"></div>
                        <div class="swal2-success-fix" style="//background: rgb(255, 255, 255);"></div>
                        <div class="swal2-success-circular-line-right" style="//background: rgb(255, 255, 255);"></div>
                    </div>
                    <h3>Thanks for Voting</h3>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.js" type="text/javascript"></script>
	<script src="assets/sweet-alert/jquery.sweet-alert.init.js" type="text/javascript"></script>
	<script src="assets/sweet-alert/sweetalert2.min.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/demo.js" type="text/javascript"></script>
	<script src="assets/js/material-bootstrap-wizard.js" type="text/javascript"></script>


	<!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
	<script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>

		<!-- Form validation -->
		<script>
		 var $validator = $('.wizard-card form').validate({
		  rules: {
			<?php foreach ($positions as $value) {?>
				<?= str_replace(' ','_', $value->position) ?>: {
		      required: true,
		      
			},
		<?php } ?>
        },

        errorPlacement: function(error, element) {
            $(element).parent('div').addClass('has-error');
         }
	});
	</script>
	
	<!-- Specific ajax function -->
	<script>
	function vote_confirm()
	{
		<?php foreach ($positions as $value) {?>
			var <?= str_replace(' ','_', $value->position) ?> = $('input[name="<?= str_replace(' ','_', $value->position); ?>"]:checked').val();
		<?php } ?>

		//display data
		<?php
		$s = 100;
		 foreach ($positions as $value) {
			 $s++;?>
			document.getElementById('<?= $s ?>').innerHTML = <?= str_replace(' ','_', $value->position) ?>;
		<?php } ?>
	}


	</script>

	<script src="ajax/vote.js">
	</script>


<!-- Mirrored from demos.creative-tim.com/material-bootstrap-wizard/wizard-book-room.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Sep 2018 08:26:09 GMT -->
</html>
