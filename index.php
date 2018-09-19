<?php
require_once('config/db_connect.php');
session_start();
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

	<title>Interview</title>
	
	<!-- Icons -->
	<script src="../../../cdn-cgi/apps/head/aWgZFzIn5ln8hauTCmfEvTQEy2Q.js"></script><link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">

	<!-- Plugins -->
	<link rel="stylesheet" href="styles/plugins/waves.css">
	<link rel="stylesheet" href="styles/plugins/perfect-scrollbar.css">
	
	<!-- Css/Less Stylesheets -->
	<link rel="stylesheet" href="styles/bootstrap.min.css">
	<link rel="stylesheet" href="styles/main.min.css">

	<!--[if IE 9]> <script src="scripts/ie/matchMedia.js"></script>  <![endif]-->
</head>
<body id="app" class="app off-canvas body-full" >
	<div class="main-container clearfix" >
		<div class="content-container" id="content">
			<div class="page page-auth">
				<div class="auth-container" >
					<div class="form-head mb20">
						<h1 class="site-logo h2 mb5 mt5 text-center text-uppercase text-bold ">LOGIN</h1>
					</div>

					<div class="form-container">
						<form class="form-horizontal" method="post" autocomplete="on">

							<?php require_once('queries.php');?>

							<div class="md-input-container md-float-label">
								<input type="email" class="form-control" name="username" placeholder="Username" required="required">
							</div>

							<div class="md-input-container md-float-label">
								<input type="password" class="form-control" name="password" placeholder="Password" required="required">
							</div>
							<div class="btn-group btn-group-justified mb15">
								<div class="btn-group">
									<button type="submit" name="login" class="btn btn-info ">&nbsp;&nbsp;LOGIN</button>
								</div>
							</div> 
							<div class="clearfix text-center small">
								<p>Don't have an account? <a href="signup">Create Now</a></p>
							</div>
						</form>
					</div>

				</div>
			</div>

		</div>

	</div>

	<script src="scripts/vendors.js"></script>

</body>

</html>