<?php
include('admin/conn.php');
session_start();
if(isset($_POST['submit']))
{
	include(check.php);
	if(isset($_SESSION['id']))
		header("Location:".$_SERVER['PHP_SELF']);
}
?>

<header id="header" class="header-second">
				<div class="container hidden-xs">
					<div class="row primary-header">
						<div class="col-xs-12 col-sm-4 col-md-4">
							<span class="organization">Welcome to charity organizations</span>
						</div>
                        <div class="social-links col-xs-12 col-sm-8 col-md-8">
                         <?php
                            if(isset($_SESSION['id']))
                            {
                        ?>
                        <a href="#" class="btn btn-default btn-volunteer"><?php echo $_SESSION['id']; ?></a>
                        <a href="logout.php" class="btn btn-default btn-volunteer">Log Out</a>
                        <?php
                                }else{
                                ?>
                        
						
							<a href="volunteer.php" class="btn btn-default btn-volunteer">Become volunteer</a>
							<a data-toggle="modal" href="#log" data-target=".join-now-form1" class="btn btn-default btn-volunteer">Sign In</a>
                           <?php
                            }
?>
							<ul class="social-icons">
								<li>
									<a href="https://www.facebook.com/labornomore"" target="_blank"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="http://twitter.com/labornomore" target="_blank"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a  href="http://plus.google.com/+Stop-child-traffickingOrg" target="_blank"><i class="fa fa-google-plus"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="navbar navbar-default" role="navigation">
					<div class="nav-content">
						<div class="container">
							<a href="index.php" class="brand" title="Welcome to Charity"><img src="assets/img/logo-second.png" alt="Charity"></a>
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                
                                 <?php
                           if(isset($_SESSION['admin']))
                           {
                          ?>
							<ul class="nav navbar-nav">
								<li>
            	<a href="javascript:;" data-toggle="dropdown" class="submenu-icon"><img src="assets/img/setting.png" width="20px" height="20px"> <span class="glyphicon glyphicon-chevron-down"></span> <span class="glyphicon glyphicon-chevron-up"></span> </a>
									<!-- Drop Down  -->
									<div  class="dropdown-menu">
										<ul>
											<li>
												<a data-toggle="modal" href="external.php" data-target=".cp">Change Password</a>
											</li>
											<li>
												<a data-toggle="modal" href="external.php" data-target=".ct">Change Text</a>
											</li>
											<li>
												<a data-toggle="modal" href="external.php" data-target=".ccn">Change Contact Number </a>
											</li>
                                            <li>
												<a data-toggle="modal" href="external.php" data-target=".cn">Change Name</a>
											</li>
											<li>
												<a data-toggle="modal" href="external.php" data-target=".ccnl">Change Contact Number List </a>
											</li>
										</ul>
									</div>
									<!-- end  -->
                                </li>
                                    </ul>
                                <?php
                            }
?>
                                
								<form class="navbar-form navbar-right search-form" role="search">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Search Here">
									</div>
									<button type="button">
										<i class="icon-search fa fa-search"></i>
									</button>
								</form>
                                
								<nav>
							<ul class="nav navbar-nav">
								<li>
									<a href="index.php">Home </a>	
                                </li>

								<li>
									<a href="causes.php">Causes </a>
								</li>
								<li>
									<a href="javascript:;" data-toggle="dropdown" class="submenu-icon">features <span class="glyphicon glyphicon-chevron-down"></span> <span class="glyphicon glyphicon-chevron-up"></span> </a>
									<!-- Drop Down  -->
									<div  class="dropdown-menu">
										<ul>
											<li>
												<a href="our-story.php">Victim Story</a>
											</li>
											<li>
												<a href="our-mission.php">Our Mission</a>
											</li>
											<li>
												<a href="faq.php">Faq </a>
											</li>
										</ul>
									</div>
									<!-- end  -->

								</li>								
								<li>
									<a href="portfolio.php">Gallery</a>
								</li>
								<li>
									<a href="blog-full-width.php">Blog </a>
								</li>
								<li>
									<a href="contact-us.php">contact us</a>
								</li>

							</ul>
							</nav>
							
							</div>
						</div>
					</div>
				</div>

			</header>

                    <!-- join now form popup -->
				<?php
				$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
					?>
	<form action="log.php?url=<?php echo $actual_link; ?>" method="POST" >
		<div class="modal join-now-form1" id="log">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<header class="page-header">
							<h2>Sign To <strong>User</strong></h2>
						</header>
					</div>
					<div class="modal-body">
						
							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12 col-sm-12">
										<label for="name-join">User Name<span>*</span></label>
										<input type="text" class="form-control" name="username" id="name-join">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12 col-sm-12">
										<label for="email-join">Password<span>*</span></label>
										<input type="password" class="form-control" name="password" id="email-join">
									</div>
								</div>
							</div>
                            
							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12">
										<button type="submit" class="btn btn-default pull-right" name="submit_log">
											Submit
										</button>

									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12">
										<p class="forms-notes">
											Note: Do Not Share your Password
										</p>
									</div>
								</div>
							</div>

						
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div>
		</form>
		<!-- join now form popup -->
		<script src="assets/js/jquery.min.js"></script>
		<!-- Switcher Style End Js -->



                    <!-- join now form popup -->
		<div class="modal cp">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<header class="page-header">
							<h2>Change <strong>Password</strong></h2>
						</header>
					</div>
					<div class="modal-body">
						<form role="form">
							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12 col-sm-12">
										<label for="name-join">Old Password<span>*</span></label>
										<input type="password" class="form-control" name="password" id="name-join">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12 col-sm-12">
										<label for="email-join">New Password<span>*</span></label>
										<input type="password" class="form-control" name="npassword" id="email-join">
									</div>
								</div>
							</div>
                            
                            <div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12 col-sm-12">
										<label for="email-join">Re-enter Password<span>*</span></label>
										<input type="password" class="form-control" name="rnpassword" id="email-join">
									</div>
								</div>
							</div>
                            
							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12">
										<button type="button" class="btn btn-default pull-right">
											Submit
										</button>

									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12">
										<p class="forms-notes">
											Note: Old Password & New Password should not be same
										</p>
									</div>
								</div>
							</div>

						</form>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div>
		<!-- join now form popup -->
		<script src="assets/js/jquery.min.js"></script>
		<!-- Switcher Style End Js -->



                    <!-- join now form popup -->
		<div class="modal ct">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<header class="page-header">
							<h2>Change <strong>Help Message</strong></h2>
						</header>
					</div>
					<div class="modal-body">
						<form role="form">
							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12 col-sm-12">
										<label for="name-join">Old Message<span>*</span></label>
										<input type="text" class="form-control" name="oldmessage" id="name-join">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12 col-sm-12">
										<label for="email-join">New Message<span>*</span></label>
										<input type="text" class="form-control" name="message" id="email-join">
									</div>
								</div>
							</div>
                            
							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12">
										<button type="button" class="btn btn-default pull-right">
											Submit
										</button>

									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12">
										<p class="forms-notes">
											Note: Message is for your Safty
										</p>
									</div>
								</div>
							</div>

						</form>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div>
		<!-- join now form popup -->
		<script src="assets/js/jquery.min.js"></script>
		<!-- Switcher Style End Js -->



        <!-- join now form popup -->
		<div class="modal ccn">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<header class="page-header">
							<h2>Change User <strong>Contact Number</strong></h2>
						</header>
					</div>
					<div class="modal-body">
						<form role="form">
							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12 col-sm-12">
										<label for="name-join">Old Contact Number<span>*</span></label>
										<input type="text" class="form-control" name="onumber" id="name-join">
									</div>
								</div>
							</div>
                            
                            <div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12 col-sm-12">
										<label for="name-join">New Contact Number<span>*</span></label>
										<input type="text" class="form-control" name="nnumber" id="name-join">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12">
										<button type="button" class="btn btn-default pull-right">
											Submit
										</button>

									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12">
										<p class="forms-notes">
											Note: The HELP Message is send from this number
										</p>
									</div>
								</div>
							</div>

						</form>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div>
		<!-- join now form popup -->
		<script src="assets/js/jquery.min.js"></script>
		<!-- Switcher Style End Js -->


                    <!-- join now form popup -->
		<div class="modal cn">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<header class="page-header">
							<h2>Change User <strong>Name</strong></h2>
						</header>
					</div>
					<div class="modal-body">
						<form role="form">
							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12 col-sm-12">
										<label for="name-join">First Name<span>*</span></label>
										<input type="text" class="form-control" name="fname" id="name-join">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12 col-sm-12">
										<label for="name-join">Last Name<span>*</span></label>
										<input type="text" class="form-control" name="lname" id="name-join">
									</div>
								</div>
							</div>
                            
							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12">
										<button type="button" class="btn btn-default pull-right">
											Submit
										</button>

									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12">
										<p class="forms-notes">
											Note: Display Name
										</p>
									</div>
								</div>
							</div>

						</form>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div>
		<!-- join now form popup -->
		<script src="assets/js/jquery.min.js"></script>
		<!-- Switcher Style End Js -->



                    <!-- join now form popup -->
		<div class="modal ccnl">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<header class="page-header">
							<h2>Change Users <strong>Contact Number List</strong></h2>
						</header>
					</div>
					<div class="modal-body">
						<form role="form">
							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12 col-sm-12">
										<label for="name-join">Contact Number<span>*</span></label>
										<input type="text" class="form-control" name="numbers" id="name-join">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12 col-sm-12">
										<label for="email-join">Contact Number<span>*</span></label>
										<input type="text" class="form-control" name="numbers" id="email-join">
									</div>
								</div>
							</div>
                            
                            <div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12 col-sm-12">
										<label for="email-join">Contact Number<span>*</span></label>
										<input type="text" class="form-control" name="numbers" id="email-join">
									</div>
								</div>
							</div>
                            
                            <div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12 col-sm-12">
										<label for="email-join">Contact Number<span>*</span></label>
										<input type="text" class="form-control" name="numbers" id="email-join">
									</div>
								</div>
							</div>
                                                
                            <div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12 col-sm-12">
										<label for="email-join">Contact Number<span>*</span></label>
										<input type="text" class="form-control" name="numbers" id="email-join">
									</div>
								</div>
							</div>
                            
                            
							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12">
										<button type="button" class="btn btn-default pull-right">
											Submit
										</button>

									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12">
									<div class="form-group col-xs-12">
										<p class="forms-notes">
											Note: The HELP Message is send to these numbers
										</p>
									</div>
								</div>
							</div>

						</form>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div>
		<!-- join now form popup -->
		<script src="assets/js/jquery.min.js"></script>
		<!-- Switcher Style End Js -->