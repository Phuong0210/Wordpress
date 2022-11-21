<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
			integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
			crossorigin="anonymous">
		<title>Document</title>
	</head>
	<body>
		<?php
get_header();
?>
		<br>
		<div class="container margin-bottom-20 card py-20">
			<div class="wrap_background_aside margin-bottom-40 page_login">
				<div class="heading-bar">
					<h1 class="title_page mb-0">Đăng nhập tài khoản</h1>
					<p class="mb-0">Bạn chưa có tài khoản ?
						<a href="http://localhost/wordpress/index.php/about/register/"
							class="btn-link-style btn-register" style="text-decoration: underline; ">
							Đăng ký tại đây</a></p>
				</div>
				<div class="row">
					<div class="col-12 col-md-6 offset-md-3 py-3">

						<div class="page-login ">
							<div id="login">
								<form accept-charset="utf-8" action="http://localhost/wordpress/index.php/home/" id="customer_login"
									method="post">
									<input name="FormType" type="hidden" value="customer_login">
									<input name="utf8" type="hidden" value="true">
									<div class="form-signup margin-bottom-15" style="color:red;">

									</div>
									<div class="form-signup clearfix">
										<fieldset class="form-group">
											<label>Email <span class="required">*</span></label>
											<input type="email"
												pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
												class="form-control " value="" name="email" id="customer_email"
												placeholder="Email" required="">
										</fieldset>
										<fieldset class="form-group">
											<label>Mật khẩu <span class="required">*</span> </label>
											<input type="password" class="form-control " value="" name="password"
												id="customer_password" placeholder="Mật khẩu" required="">
											<small class="d-block my-2">Quên mật khẩu? Nhấn vào<a href="#"
													class="btn-link-style text-primary"
													onclick="showRecoverPasswordForm();return false;"> đây </a></small>
										</fieldset>

										<div class="pull-xs-left button_bottom a-center mb-3">
											<button class="btn btn-block btn-style btn-login" type="submit"
												value="Đăng nhập">Đăng nhập</button>

										</div>

									</div>
								</form>
							</div>

							<div id="recover-password" style="display:none;" class="form-signup
								page-login text-center">
								<h2>
									Đặt lại mật khẩu
								</h2>
								<p>
									Chúng tôi sẽ gửi cho bạn một email để kích hoạt việc đặt lại mật khẩu.
								</p>
								<form accept-charset="utf-8" action="/account/recover"
									id="recover_customer_password" method="post">
									<input name="FormType" type="hidden" value="recover_customer_password">
									<input name="utf8" type="hidden" value="true">
									<div class="form-signup" style="color: red;">

									</div>
									<div class="form-signup clearfix">
										<fieldset class="form-group">
											<input type="email"
												pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"
												class="form-control form-control-lg" value="" name="Email"
												id="recover-email" placeholder="Email" required="">
										</fieldset>
									</div>

									<div class="action_bottom my-3">
										<input class="btn btn-style btn-recover btn-block" type="submit"
											value="Lấy lại mật khẩu">
										<a href="#" class="btn btn-style link btn-style-active "
											onclick="hideRecoverPasswordForm();return false;">Quay lại</a>

									</div>
								</form>
							</div>
						</div>
						<div class="block social-login--facebooks margin-top-20 text-center">
							<p class="a-center text-secondary">
								Hoặc đăng nhập bằng
							</p>
							<script>function loginFacebook(){var a={client_id:"947410958642584",redirect_uri:"https://store.mysapo.net/account/facebook_account_callback",state:JSON.stringify({redirect_url:window.location.href}),scope:"email",response_type:"code"},b="https://www.facebook.com/v3.2/dialog/oauth"+encodeURIParams(a,!0);window.location.href=b}function loginGoogle(){var a={client_id:"997675985899-pu3vhvc2rngfcuqgh5ddgt7mpibgrasr.apps.googleusercontent.com",redirect_uri:"https://store.mysapo.net/account/google_account_callback",scope:"email profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile",access_type:"online",state:JSON.stringify({redirect_url:window.location.href}),response_type:"code"},b="https://accounts.google.com/o/oauth2/v2/auth"+encodeURIParams(a,!0);window.location.href=b}function encodeURIParams(a,b){var c=[];for(var d in a)if(a.hasOwnProperty(d)){var e=a[d];null!=e&&c.push(encodeURIComponent(d)+"="+encodeURIComponent(e))}return 0==c.length?"":(b?"?":"")+c.join("&")}</script>
							<a href="javascript:void(0)" class="social-login--facebook"
								onclick="loginFacebook()"><img width="129px" height="37px"
									alt="facebook-login-button"
									src="//bizweb.dktcdn.net/assets/admin/images/login/fb-btn.svg"></a>
							<a href="javascript:void(0)" class="social-login--google"
								onclick="loginGoogle()"><img width="129px" height="37px"
									alt="google-login-button"
									src="//bizweb.dktcdn.net/assets/admin/images/login/gp-btn.svg"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<?php
			get_footer();?>

		</body>
		<script src="./login.js"></script>
	</html>