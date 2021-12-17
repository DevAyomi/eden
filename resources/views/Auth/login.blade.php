<!DOCTYPE html>
<html lang="en">
<head>
	<title>Eden Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="ed/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ed/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ed/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ed/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ed/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="ed/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ed/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ed/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="ed/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ed/css/util.css">
	<link rel="stylesheet" type="text/css" href="ed/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('ed/images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="{{ route('/login-check') }}">
					@csrf
					<button class="btn btn-info"><a class="text-light" href="{{ url('/') }}">Back To Home</a></button>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					@if ( Session::has('success') )
						<strong class="bg-success mb-3 p-3">{{ Session::get('success') }}</strong>
					@endif

					@if ( Session::has('fail') )
						<strong class="bg-danger mb-3 p-3">{{ Session::get('fail') }}</strong>
					@endif
					<br>
					<br>
					<div class="wrap-input100 validate-input" data-validate = "Enter email">
						<input class="input100" type="email" name="email" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
						<br>
						<br>
						<a class="txt1" href="{{ route('/register') }}">
							Dont have an account? Register
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="ed/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="ed/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="ed/vendor/bootstrap/js/popper.js"></script>
	<script src="ed/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="ed/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="ed/vendor/daterangepicker/moment.min.js"></script>
	<script src="ed/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="ed/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="ed/js/main.js"></script>

</body>
</html>