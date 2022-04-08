<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login ngampus</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('Logo/logo.png')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('Auth/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('Auth/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('Auth/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('Auth/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('Auth/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('Auth/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('Auth/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('Auth/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('Auth/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('Auth/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-43">
						Login
					</span>
					
					<!-- form login -->
					<form action ="/login" method="post">
						@csrf

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: contoh@abc.xyz">
						<input class="input100" type="email" name="email" required>
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" id="password" required>
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>

					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Ingat Saya
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Lupa Password?
							</a>
						</div>
					</div>
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

                    <div class="text-center p-t-10">
                        <a class="txt2" >Belum Punya Akun?
                            <strong><a  href="/register"> Daftar</a></strong></a>
					</div>
					
					<div class="text-center p-t-20 p-b-20">
						<span class="txt2">
							or sign up using
						</span>
					</div>

					<div class="login100-form-social flex-c-m">
						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg3 m-r-5">
							<i class="fa fa-google" aria-hidden="true"></i>
						</a>
					</div>

                    <div class="text-center p-t-46">
						<span class="txt2">
                            <strong>
                                <a class="landingpage" href="/">Kembali ke landing page</a></strong>
						</span>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('{{asset('Auth/images/bg-01.png')}}');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="{{asset('Auth/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('Auth/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('Auth/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('Auth/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('Auth/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('Auth/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('Auth/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('Auth/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('Auth/js/main.js')}}"></script>

</body>
</html>