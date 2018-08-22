<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?=base_url('assets/login/images/icons/favicon.ico')?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/login/vendor/bootstrap/css/bootstrap.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/vendor/animate/animate.css')?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/vendor/css-hamburgers/hamburgers.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/vendor/animsition/css/animsition.min.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/vendor/select2/select2.min.css')?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/vendor/daterangepicker/daterangepicker.css')?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/css/util.css')?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/login/css/main.css')?>">
<!--===============================================================================================-->

<link rel="stylesheet" href="<?= base_url('assets/css/font-awesome-animation.css') ?>">							
<link rel="stylesheet" href="<?= base_url('assets/css/font-awesome-animation.min.css') ?>">
</head>
<body id="body_body">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" id="frmlog">
					<span class="login100-form-title p-b-43">
						<img src="<?= base_url('assets/img/login-avatar.png')?>" style = "width: 50%; height: 50%;">
					</span>
					<span class="login100-form-title p-b-43">
						Login Your Account
					</span>
					<span>
						<div class = "form-group">
							<select class="form-control" name = "usertype" id = "usertype">
								<option value = "1">Customer</option>
								<option value = "0">Admin</option>
							</select>
						</div>
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz" id = "customer_email">
						<input class="input100" type="text" name="email" id="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz" id = "admin_email">
						<input class="input100" type="text" name="adminemail" id="adminemail" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required" id = "customer_pass">
						<input class="input100" type="password" name="pass" id="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required" id = "admin_pass">
						<input class="input100" type="password" name="adminpass" id="adminpass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								show password
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>
			

					<div class="container-login100-form-btn" id = "cust_btn">
						<button class="login100-form-btn" id="logbtn">
							Login
						</button>
					</div>

					<div class="container-login100-form-btn" id = "admin_btn">
						<button class="login100-form-btn" id="admin_logbtn">
							Login
						</button>
					</div>
					
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							<button data-toggle="modal" data-target="#myModal" id="acct">Create An Account</button>
						</span>
					</div>

					<!-- <div class="login100-form-social flex-c-m">
						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
					</div> -->
				</form>

				<div class="login100-more" style="background-image: url('<?=base_url('assets/img/404-page.gif')?>');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/vendor/jquery/jquery-3.2.1.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/vendor/animsition/js/animsition.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/vendor/bootstrap/js/popper.js')?>"></script>
	<script src="<?= base_url('assets/login/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/vendor/select2/select2.min.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/vendor/daterangepicker/moment.min.js')?>"></script>
	<script src="<?= base_url('assets/login/vendor/daterangepicker/daterangepicker.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/vendor/countdowntime/countdowntime.js')?>"></script>
<!--===============================================================================================-->
	<script src="<?= base_url('assets/login/js/main.js')?>"></script>

<!--===============================================================================================-->
<script src="<?= base_url('assets/login/js/account.js')?>"></script>
<!--===============================================================================================-->
<script src="<?= base_url('assets/js/sweetalert.min.js')?>"></script>

<script src="<?= base_url('assets/js/hp/hideShowPassword.min.js')?>"></script>

<script src="<?= base_url('assets/js/hp/hideShowPassword.js')?>"></script>



</body>
</html>