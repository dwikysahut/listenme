<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<!-- Stylesheets
		============================================= -->
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/login/css/bootstrap.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/login/style.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/login/css/dark.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/login/css/font-icons.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/login/css/animate.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/login/css/magnific-popup.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/login/css/custom.css" type="text/css" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
		============================================= -->
		<title>Listen Me | Login</title>

	</head>

	<body class="stretched">

	<!-- Document Wrapper
		============================================= -->
		<div id="wrapper" class="clearfix">

		<!-- Content
			============================================= -->
			<section id="content">
				<div class="section dark p-0 m-0 h-100 position-absolute"></div>
				<div class="content-wrap">

					<div class="container clearfix">



						<div class="tabs mx-auto mb-0 clearfix" id="tab-login-register" style="max-width: 500px;">

							<li class="inline-block mb-2"><a href="<?php echo base_url() ?>"><i class="icon-line-corner-up-left"></i> Kembali</a></li>




							<ul class="tab-nav tab-nav2 center clearfix">
								<li class="inline-block"><a href="#tab-login">Sign in</a></li>
								<li class="inline-block"><a href="#tab-register">Sign up</a></li>
							</ul>



							<div class="tab-container">

								<div class="tab-content" id="tab-login">
									<div class="card mb-0">
										<div class="card-body" style="padding: 40px;">
										<?php echo form_open('auth/login_proses'); ?>

												<h3>Sign in</h3>
												<?php echo $this->session->flashdata('login_status'); ?>
												<?php echo $this->session->flashdata('register_status'); ?>
												<div class="row">
													<div class="col-12 form-group">
													<?php echo form_error('username'); ?>
														<label for="login-form-username">Email:</label>
														<input type="text" id="username" name="username" value="" class="form-control"   required="autofocus" />
													</div>

													<div class="col-12 form-group">
													<?php echo form_error('password'); ?>
														<label for="login-form-password">Password:</label>
														<input type="password" id="password" name="password" value="" class="form-control" required="autofocus" />
													</div>

													<div class="col-12 form-group">
														<button class="button button-circle button-small font-weight-normal ls1 ml-0 track-list" id="login-form-submit" name="login-form-submit" value="login">Sign in</button>
														<a href="#" class="float-right">Forgot Password ?</a>
													</div>
												</div>

											<!-- </form> -->
											<?php echo form_close(); ?>
										</div>
									</div>
								</div>

								<div class="tab-content" id="tab-register">
									<div class="card mb-0">
										<div class="card-body" style="padding: 40px;">
											<h3>Sign Up</h3>

											

											<?php echo form_open_multipart('auth/register_proses'); ?>
											<?php echo $this->session->flashdata('register_status'); ?>
												<div class="col-12 form-group">
													<label for="register-form-email">Email:</label>
													<input type="email" id="email" name="username" value="" class="form-control" required="" />
												</div>

												<div class="col-12 form-group">
													<label for="register-form-name">Name:</label>
													<input type="text" id="nama" name="name" value="" class="form-control" required="" />
												</div>

												<div class="col-12 form-group">
													<label for="register-form-username">Date of Birth:</label>
													<input type="date" id="tanggal_lahir" name="birth" value="" class="form-control" required="" />
												</div>

												<div class="col-12 form-group">
													<label for="register-form-phone">Phone Number:</label>
													<input type="text" id="no_telfon" name="phone" value="" class="form-control" required="" />
												</div>



												<div class="col-12 form-group">
													<label for="register-form-password">Enter a Password</label>
													<input type="password" id="password" name="password" value="" class="form-control" required="" />
												</div>



												<div class="col-12 form-group">
													<button class="button button-circle button-small font-weight-normal ls1 ml-0 track-list" id="masuk" name="masuk" value="register">Sign up Now</button>
												</div>

											<?php echo form_close(); ?>
										</div>
									</div>
								</div>

							</div>
							<div class="text-center text-muted mt-3"><small>Copyrights &copy; 2021 Listenme. All rights reserved</small></div>
						</div>

					</div>
				</div>
			</section><!-- #content end -->

		</div><!-- #wrapper end -->

	<!-- Go To Top
		============================================= -->
		<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
		============================================= -->
		<script src="<?php echo base_url() ?>assets/login/js/jquery.js"></script>
		<script src="<?php echo base_url() ?>assets/login/js/plugins.min.js"></script>

	<!-- Footer Scripts
		============================================= -->
		<script src="<?php echo base_url() ?>assets/login/js/functions.js"></script>

	</body>
	</html>