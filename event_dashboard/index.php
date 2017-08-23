<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
	
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Jazba 2k16</title>
	<!-- ====Google Font CSS==== -->
	<link href='https://fonts.googleapis.com/css?family=Roboto:100,200,300,500,700,900' rel='stylesheet' type='text/css'>
	<!-- ====Font Awesome CSS==== -->
	<link href='css/font-awesome.min.css' rel='stylesheet' type='text/css'>
	<!-- ====Favicons==== -->
	<link href="img/favicon.png" rel="shortcut icon" type="image/x-icon">
	<link href="img/favicon.png" rel="icon" type="image/x-icon">
	<!-- ====Bootstrap Core CSS==== -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type='text/css'>
	<!-- ====Material Design Lite Core CSS==== -->
	<link href="css/material.min.css" rel="stylesheet" type='text/css'>
	<!-- ====Core CSS==== -->
	<link href="style.css" rel="stylesheet" type='text/css'>
	<!-- ====Main Color Scheme CSS==== -->
	<link href="css/main-color-1.css" rel="stylesheet" type='text/css' id="mainColorScheme">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<!-- Top Navigation Bar Start -->
	<nav id="topNav2" class="navbar">
		<div class="container">
            <!-- Logo Start -->
            <!--<a class="navbar-brand" href="index.php">
				<img src="img/logo.png" alt="">
			</a>-->
            <!-- Logo End -->
		</div>
	</nav>
	<!-- Top Navigation Bar End -->

	<!-- Banner Area Start -->
	<div id="banner" data-img-src="img/banner-bg.jpg">
		<div class="vc-parent">
			<div class="vc-child">
				<div class="banner-content">
			        <div class="container">
			            <div class="row">
			                <div class="col-md-12">
			                    <div class="slider-2-content text-center">
			                        <h2 class="mdl-typography--display-2 mdl-typography--text-capitalize">JAZBA 2016</h2>
			                        <h4 class="mdl-typography--text-capitalize">Online Events Registration</h4>
			                        <a href="#" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" data-toggle="modal" data-target="#loginFormModal"><i class="fa fa-user"></i> Login</a>
			                        <a href="#" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" data-toggle="modal" data-target="#signupFormModal"><i class="fa fa-user-plus"></i> Singup</a>
			                        <a href="#" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" data-toggle="modal" data-target="#forgotFormModal"><i class="fa fa-lock"></i> Forgot</a>
			                    </div>
			                </div>
			            </div>
			        </div>
		        </div>
			</div>
		</div>
	</div>
	<!-- Banner Area End -->
	
	<!-- Login Form Start -->
	<div class="modal fade" id="loginFormModal" tabindex="-1" role="dialog" aria-labelledby="loginForm">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<div class="loginForm">
					<div class="mdl-card mdl-shadow--2dp">
						<div class="mdl-card__title mdl-card--expand">
							<div class="modal--logo">
								<img src="img/logo.png" alt="">
							</div>
						</div>
						<div class="mdl-card__supporting-text">
							<form action="checklogin.php<?php echo $url?>" method="post" id="loginForm">
								<div class="mdl-textfield mdl-js-textfield">
									<input class="mdl-textfield__input" type="text" name="loginUsername" id="loginUsername">
									<label class="mdl-textfield__label" for="loginUsername">Username</label>
								</div>
								<div class="mdl-textfield mdl-js-textfield">
									<input class="mdl-textfield__input" type="password" name="loginPassword" id="loginPassword">
									<label class="mdl-textfield__label" for="loginPassword">Password</label>
								</div>
								
								<button type="submit" class="login-form-submit-btn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Login</button>
							</form>
						</div>
						<div class="mdl-card__actions mdl-card--border clearfix">
							<a href="#" class="pull-left mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" data-toggle="modal" data-target="#forgotFormModal" data-dismiss="modal">
								Forgot Password?
							</a>
							<a href="#" class="pull-right mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" data-toggle="modal" data-target="#signupFormModal" data-dismiss="modal">
								Create An Account
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Login Form End -->
	
	<!-- Signup Form Start -->
	<div class="modal fade" id="signupFormModal" tabindex="-1" role="dialog" aria-labelledby="signupFormModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<div class="signupForm">
					<div class="mdl-card mdl-shadow--2dp">
						<div class="mdl-card__title mdl-card--expand">
							<div class="modal--logo">
								<img src="img/logo.png" alt="">
							</div>
						</div>
						<div class="mdl-card__supporting-text">
							<form action="register.php" method="post" id="signupForm">
								<div class="mdl-textfield mdl-js-textfield">
									<input class="mdl-textfield__input" type="text" name="singupFirstName" id="singupFirstName">
									<label class="mdl-textfield__label" for="singupFirstName">First Name</label>
								</div>
								<div class="mdl-textfield mdl-js-textfield">
									<input class="mdl-textfield__input" type="text" name="singupLastName" id="singupLastName">
									<label class="mdl-textfield__label" for="singupLastName">Last Name</label>
								</div>
								<div class="mdl-textfield mdl-js-textfield">
									<input class="mdl-textfield__input" type="text" name="singupEnrolmentNo" id="singupEnrolmentNo">
									<label class="mdl-textfield__label" for="singupEnrolmentNo">Enrolment Number</label>
								</div>
								<div class="mdl-textfield mdl-js-textfield">
									<input class="mdl-textfield__input" type="text" name="singupCEnrolmentNo" id="singupCEnrolmentNo">
									<label class="mdl-textfield__label" for="singupCEnrolmentNo">Confirm Enrolment Number</label>
								</div>
								<div class="mdl-textfield mdl-js-textfield">
									<input class="mdl-textfield__input" type="text" name="singupContactNo" id="singupContactNo">
									<label class="mdl-textfield__label" for="singupContactNo">Contact Number</label>
								</div>
								<button type="submit" class="singup-form-submit-btn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="register">SignUp</button>
							</form>
						</div>
						<div class="mdl-card__actions mdl-card--border clearfix">
							<p class="pull-left">Already Have An Account?</p>
							<a href="#" class="pull-right mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" data-toggle="modal" data-target="#loginFormModal" data-dismiss="modal">
								Login
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Signup Form End -->
	
	<!-- Forgot Form Start -->
	<div class="modal fade" id="forgotFormModal" tabindex="-1" role="dialog" aria-labelledby="signupFormModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<div class="forgotForm">
					<div class="mdl-card mdl-shadow--2dp">
						<div class="mdl-card__title mdl-card--expand">
							<div class="modal--logo">
								<img src="img/logo.png" alt="">
							</div>
						</div>
						<div class="mdl-card__supporting-text">
							<form action="forgotpassword.php" method="post" id="forgotForm">
								<div class="mdl-textfield mdl-js-textfield">
									<input class="mdl-textfield__input" type="text" name="forgotEmail" id="forgotEmail">
									<label class="mdl-textfield__label" for="forgotEmail">E-mail Address</label>
								</div>
								
								<button type="submit" class="forgot-form-submit-btn mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Recover</button>
							</form>
						</div>
						<div class="mdl-card__actions mdl-card--border clearfix">
							<p class="pull-left">No Account?</p>
							<a href="#" class="pull-right mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" data-toggle="modal" data-target="#signupFormModal" data-dismiss="modal">
								Create An Account
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ====jQuery Core JavaScript==== -->
	<script src="js/jquery-2.2.2.min.js"></script>

	<!-- ====Bootstrap Core JavaScript==== -->
	<script src="js/bootstrap.min.js"></script>

	<!-- ====Material Design Lite Core JavaScript==== -->
	<script src="js/material.min.js"></script>
	
    <!-- ====jQuery Validation JavaScript==== -->
    <script src="js/jquery.validate.min.js"></script>

	<!-- ====Core JavaScript==== -->
	<script src="js/main1.js"></script>
	<script type="text/javascript">
		var input = document.getElementsByName('singupCEnrolmentNo')[0];
		if (input)
   			input.onpaste = function(){return false;};
	</script>
</body>
</html>