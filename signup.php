<?php
require_once('config/db_connect.php');
session_start();
require_once('queries.php');
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="Materia - Admin Template">
	<meta name="keywords" content="materia, webapp, admin, dashboard, template, ui">
	<meta name="author" content="solutionportal">
	<!-- <base href="/"> -->

	<title>SignUp page</title>
	
	<!-- Icons -->
	<script src="../../../cdn-cgi/apps/head/aWgZFzIn5ln8hauTCmfEvTQEy2Q.js"></script><link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">

	<!-- Plugins -->
	<link rel="stylesheet" href="styles/plugins/waves.css">
	<link rel="stylesheet" href="styles/plugins/perfect-scrollbar.css">
	
	<!-- Css/Less Stylesheets -->
	<link rel="stylesheet" href="styles/bootstrap.min.css">
	<link rel="stylesheet" href="styles/main.min.css">

 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300' rel='stylesheet' type='text/css'>

	<!-- Match Media polyfill for IE9 -->
	<!--[if IE 9]> <script src="scripts/ie/matchMedia.js"></script>  <![endif]-->
	<style>
		.required,.error{
			color: red;
		}
	</style>
</head>
<body id="app" class="app off-canvas body-full">

	<!-- main-container -->
	<div class="main-container clearfix">
		
		<!-- content-here -->
		<div class="content-container" id="content">
			<div class="page page-auth">

				<div class="auth-container">

					<div class="form-head mb20">
						<h1 class="site-logo h2 mb30 mt5 text-center text-uppercase text-bold"><a href="index">SignUp</a></h1>
						<p class="small">Already have an account. <a href="index">Sign In Now</a></p>
					</div>

					<div class="form-container">
						<form id="register" class="form-horizontal" method="post" autocomplete="on">
							<div class="row">
								<div class="col-md-12">
									<?php
									if(isset($alert)){
										echo $alert;
									}
									?>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<label>First Name:</label>
									<input type="text" name="first_name" class="form-control" placeholder="First Name" required>
								</div>
							</div><br/>
							<div class="row">
								<div class="col-md-12">
									<label>Last Name:</label>
									<input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
								</div>
							</div><br/>
							<div class="row">
								<div class="col-md-12">
									<label>Username:</label>
									<input type="email" name="email" class="form-control" placeholder="Email address" required>
								</div>
							</div><br/>
							<div class="row">
								<div class="col-md-12">
									<label>Password</label>
									<input type="password" name="password" class="form-control" placeholder="Password" required>
								</div>
							</div><br/>

							<div class="clearfix">
								<button type="submit" name="submit" class="btn btn-primary right">Sign Up</button>
							</div>	

						</form>

					</div>

				</div>
			</div>

		</div>

	</div>
	<!-- Dev only -->
	<!-- Vendors -->
	<script src="scripts/vendors.js"></script>
	<script src="scripts/additional-method.js"></script>
	<script src="scripts/jquery.validate.js"></script>
	<script src="scripts/validator.js"></script>

</body>

</html>