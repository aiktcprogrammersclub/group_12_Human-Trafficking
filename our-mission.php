<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>Charity</title>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<!-- google fonts -->
		<link href='http://fonts.googleapis.com/css?family=Lato:400,300italic,300,700%7CPlayfair+Display:400,700italic%7CRoboto:300%7CMontserrat:400,700%7COpen+Sans:400,300%7CLibre+Baskerville:400,400italic' rel='stylesheet' type='text/css'>
		<!-- Bootstrap -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/bootstrap-theme.css" rel="stylesheet">
		<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		<link href="assets/revolution-slider/css/settings.css" rel="stylesheet">
		<link href="assets/css/global.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/responsive.css" rel="stylesheet">
		<link href="assets/css/skin.css" rel="stylesheet">
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>

		<div id="wrapper">
			<!--Header Section Start Here -->
			<?php
			include_once ("includes/header.php");
			?>
			<!-- Header Section End Here -->

			<!-- site content -->
			<div id="main">
				<!--Breadcrumb Section Start Here-->
				<div class="breadcrumb-section">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h1>Our Mission</h1>
								<ul class="breadcrumb">
									<li>
										<a href="index.php">Home</a>
									</li>
									<li class="active">
										Our Mission
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!--Breadcrumb Section End Here-->

				<div class="content-wrapper container" id="page-info">
					
						<div class="row">
							<div class="col-xs-12">
								<header class="service-header section-header">
									<h2>See Services, <strong class="border-none">We are on Mission</strong></h2>
								</header>
							
								<div class="row">
									<p>
Charity is an anti trafficking website striving to end human trafficking. We aim to protect women and children from human trafficking threats by defending their rights and dignity. 
<br>
Vision: Charity.com  wants to see a world where the innocence, weakness, and vulnerability of any human being is not exploited by others for commercial sexual exploitation and trafficking.
Objectives:
<br>
- To create Awareness among the victims of trafficking and commercial sexual exploitation of their human and civil rights and to empower them to lead a normal life.<br>
- To create awarenesss among people about  Legislation, Policy, and Programmes pertaining to trafficking and prostitution domestic, and international so that they can raise their voice when encountering such a situation.<br>
- To run a Network of organizations working for the cause of the VOCSET (Victims of CSE&T) and against Trafficking.<br>
-To provide proper reporting facilities wherein any person who is having a threat of being trafficked can report fearlessly. 
									</p>
								</div>
							</div>
						</div>
					

					<!-- Save Lives Section Start Here-->
					<section class="save-lives text-center parallax">
						<div class="container">
							<div class="row">
								<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
									<header class="page-header">
										<h2>Doante for <strong>Save lives</strong></h2>
										<p>
											Dictumst cras sit amet est eget dui viverra scelerisque duis semper pulvinar in risus ac bibendum aenean hendrerit pharetra
										</p>
									</header>
									<a href="causes.php" class="btn btn-default">See our Causes</a>
									<a data-toggle="modal" href="external.php" data-target=".donate-form" class="btn btn-default">Donate today</a>
								</div>
							</div>
						</div>
					</section>
					<!-- Save Lives Section Start Here-->
				</div>

			</div>
			<!-- site content ends -->

			<!--Footer Section Start Here -->
			<?php
			include_once ("includes/footer.php");
			?>
			<!--Footer Section End Here -->
		</div>

		<!-- donation form popup -->

		<div class="modal donate-form">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<header class="page-header">
							<h2>You are donating to. <strong>Charity</strong></h2>
						</header>
					</div>
					<?php
				$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
					?>
					<div class="modal-body">
						<form action="don.php?url=<?php echo $actual_link; ?>" method="POST" >

							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12 col-sm-6">
										<label>How much would you like to donate ?</label>

										<div class="choose-pricing">
											<div class="btn-group">
												<input type="text" placeholder="Custom" name="custom" class="inpt-first form-control">
											</div>
										</div>
									</div>

								</div>
							</div>

							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12 col-sm-6">
										<label for="name">Name<span>*</span></label>
										<input type="text" name="name" class="form-control" id="name">
									</div>
									<div class="form-group col-xs-12 col-sm-6">
										<label for="last-name">Last Name<span>*</span></label>
										<input type="text" name="lastname" class="form-control" id="last-name">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12 col-sm-6">
										<label for="name">Email<span>*</span></label>
										<input type="text" name="email" class="form-control" id="email">
									</div>
									<div class="form-group col-xs-12 col-sm-6">
										<label for="phone">Phone<span>*</span></label>
										<input type="text" name="contact" class="form-control" id="phone">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12 col-sm-6">
										<label for="message">Address<span>*</span></label>
										<textarea class="form-control" name="add" id="message"></textarea>
									</div>
									<div class="form-group col-xs-12 col-sm-6">
										<label for="add-note">Additional Note</label>
										<textarea class="form-control" name="addnote" id="add-note"></textarea>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12">
										<input type="submit" name = "submit_don" value="DONATE" class="btn btn-default pull-right">
									</div>
								</div>
							</div>

						</form>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div>
		<!-- donation form popup -->
		<script src="assets/js/jquery.min.js"></script>
		<!-- Bootstrap Js--> 
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery.easing.min.js"></script>
		<!--Main Slider Js-->
		<script src="assets/revolution-slider/js/jquery.themepunch.plugins.min.js"></script>
		<script src="assets/revolution-slider/js/jquery.themepunch.revolution.js"></script>
		<!--Main Slider Js End -->
		<script src="assets/js/jquery.flexslider.js"></script>
		<script src="assets/js/site.js"></script>

	</body>
</html>