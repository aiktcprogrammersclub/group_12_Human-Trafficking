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
								<h1>Our Blog</h1>
								<ul class="breadcrumb">
									<li>
										<a href="index.php">Home</a>
									</li>
									<li class="active">
										Blog
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!--Breadcrumb Section End Here-->
				<div class="content-wrapper container" id="page-info">
					
					<div class="row">
						<!--Article Section Start Here-->
						<div class="col-xs-12">
							<!--block Frist Start Here-->
							<article class="blog">
								<figure>
								<img src="assets/img/Mumbai.jpg" alt="" height="1140" width="100%">
								</figure>
								<div class="row">
									<div class="col-xs-12 col-sm-10 col-sm-offset-1 caption">
										<h2 class="h1">60 trafficked Assam girls brought home from Mumbai factory </h2>
										<ul class="post-in">
											<li>
												Posted In : category
											</li>
											<li>
												30 : comments
											</li>
										</ul>
										<p>
<?php
$string='GUWAHATI: Fatema (name changed), along with some other girls from Assam Sonitpur district, went to Mumbai seven months ago in search of jobs. A man, whom they addressed as mamu (uncle), took them to Taloja in Navi Mumbai where they started working in a fish packaging factory, not realizing that they have fallen prey to a human trafficking racket.
The girls nightmare came to an end a few weeks ago as Maharastra Police, along with the labour department and Mumbai-based NGO My Home India, rescued them from the factory. Altogether 60 minors from Assam were rescued from the factory. 
"We worked from 9 am to 6pm. We used to clean fish and pack them for export. Some of us are suffering from skin problems now," said Fatema at Guwahati railway station. 
"We brought back 36 girls. The other 24 girls have already been handed over to their parents. All of them are between 12 and 17 years of age," said Sukesh Jha, a member of the NGO. A case has been registered against the factory management for violating labour laws, he added. 
There were 29 girls from Sonitpur and six from Baksa in the group. Four boys, who went missing from a railway station in Mumbai, have also been rescued. 
"Some local agents are sending these girls to Mumbai as cheap labourers. These traffickers get Rs 3,000 for each labourer they send," Jha added. Traffickers prefer girls because they usually cannot escape even when they are unhappy with the work. 
"This is not an isolated case. Lack of job opportunities and poor financial condition in rural Assam has resulted in many children falling prey to human trafficking. The government must properly implement rural employment schemes to deal with these issues," said a CID official. 
Expressing concern over growing incidents of trafficking of children and women in the state, chief minister Tarun Gogoi has called for proper mapping of the areas where such incidents are taking place. He has asked the social welfare department to expedite the process of setting up fast track courts and Nibhaya distress cells in each district to deal with child labour cases';
$sto = trim_text($string, 100);
									function trim_text($text, $count){ 
									$text = str_replace("  ", " ", $text); 
									$string = explode(" ", $text); 
									for ( $wordCounter = 0; $wordCounter <= $count; $wordCounter++ ){ 
										$trimed .= $string[$wordCounter]; 
										if ( $wordCounter < $count ){ $trimed .= " "; } 
										else { $trimed .= "..."; } 
									} 
									$trimed = trim($trimed); 
									return $trimed; 
									}

echo $sto;
?>
										</p>
										<p>
											<a href="blog-full-width-details.php" class="btn btn-default" role="button">READ MORE</a>
										</p>
									</div>
								</div>
							</article>
							<!--block Frist End Here-->
							<!--block Second Start Here-->
							<article class="blog">
								<figure>
										<img src="assets/img/image.jpg" height="1140" width="100%" alt="">
								</figure>
								<div class="row">
									<div class="col-xs-12 col-sm-10 col-sm-offset-1 caption">
										<h2 class="h1">Police investigating possible human trafficking case </h2>
										<ul class="post-in">
											<li>
												Posted In : category
											</li>
											<li>
												50 : comments
											</li>
										</ul>
										<p>
 Police are investigating the latest case of possible human trafficking. A teenager was arrested last night accused of soliciting prostitution on the internet. Police believe someone brought the teen from Houston.

A 15-year old Houston teen was arrested by the CCPD for prostitution. This after they received a call from the Houston Police Department asking for help locating the teen. 

"He found an add of her soliticing in the Corpus Christi area at a particular address," said CCPD Senior officer Marc Harrod. 

The Houston Police Department detectives asked CCPD to look into the case. Turns out the 15-year-old had been a runaway reported in Houston

"A couple of text messages were sent back and forth between the 15-year-old and one of our detectives. Until she would finally confirm she would meet with an officer out on SPID," said Harrod. 

Detectives met the teen here at the Days Inn off of SPID near Weber. Once they confirmed it was the teen they were looking for, police arrested the young girl for prostitution. CCPD is still trying to find out who brought the teen Corpus Christi. 

"Who financed her? Who got the hotel? They are looking into possible human trafficking and sex trafficking into this case," said Harrod. 

The investigation ongoing, police did detain a man. The hotel room was under his name but no charges have been filed....
</p>
										<p>
											<a href="blog-full-width-details.php" class="btn btn-default" role="button">READ MORE</a>
										</p>
									</div>
								</div>
							</article>
							<!--block Second End Here-->
							<!--block Third Start Here-->
							<article class="blog">
								<figure>
													<img  src="assets/img/image3.jpg" height="1140" width="100%" alt="Click to play" data-video="http://www.youtube.com/embed/wN3gueLT0D8?autoplay=1"/>
												</figure>
								<div class="row">
									<div class="col-xs-12 col-sm-10 col-sm-offset-1 caption">
										<h2 class="h1">Toronto man facing 44 charges in human trafficking case: police</h2>
										<ul class="post-in">
											<li>
												Posted In : category
											</li>
											<li>
												20 : comments
											</li>
										</ul>
										<p>
AURORA, Ont. -- A Toronto man is facing 44 charges in connection with a human trafficking investigation.
York Regional Police say they began the investigation in November after they were contacted by a female who said she wanted help to get out of the sex trade.
Rory Thomas Mitchell, 29, faces charges including human trafficking, procuring to become a prostitute, sexual assault, exercising control, forcible confinement and drug trafficking and firearms offences.
He scheduled to appear before the Ontario Court of Justice in Newmarket on March 11.
Police say they believe the accused -- who also uses the alias "Chris" -- may be involved with other vulnerable young women and they are asking anyone with information to contact investigators.										</p>
										<p>
											<a href="blog-full-width-details.php" class="btn btn-default" role="button">READ MORE</a>
										</p>
									</div>
								</div>
							</article>
							<!--block Third End Here-->

						</div>
					<!--Article Section End Here-->
					</div>
				
				</div>
			</div>
			<!-- site content ends -->

			<!--Footer Section Start Here -->
			<?php
			include_once ("includes/footer.php");
			?>
			<!--Footer Section End Here -->
		</div>
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