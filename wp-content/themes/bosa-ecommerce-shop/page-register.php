<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bosa Ecommerce Shop 1.0.0
 */

get_header();
?>
<br><div class="container margin-bottom-20 card py-2">
		<div class="wrap_background_aside margin-bottom-40 page_login">
			<div class="heading-bar">
				<h1 class="title_page mb-0">Đăng ký tài khoản</h1>
				<span class="or">Bạn đã có tài khoản ? Đăng nhập
					<a href="/account/login" style="text-decoration: underline;" class="btn-link-style  btn-style margin-right-0">tại đây</a></span>

			</div>
			<div class="row">
				<div class="col-12 col-md-6 offset-md-3 ">
					<div class="page-login py-3 ">
						<div id="login">
							<h2 class="text-center">
								Thông tin cá nhân
							</h2>
							<form accept-charset="utf-8" action="/account/register" id="customer_register" method="post">
<input name="FormType" type="hidden" value="customer_register">
<input name="utf8" type="hidden" value="true"><input type="hidden" id="Token-6d54db25b94a4ae3b467e87f9a886644" name="Token" value="03AEkXODDPU-ozJTi9X3m9GHg3X6uXHXRBz0G-3Hivw1JQhBVkv7tg8_xGjF8zwlYwqesnRs69VT3Eh_EoFRM8o3w6eyg04FDcuKt8_I4a635mn0V-3Chq9qZl7Is1Of7NwgWgkLyOGjfPu3tUBM3TEufGNjxEaLi-tv32sbr95sDOdIRLXgaDYrSsG4_5bImCNjFerXRS7H4SJDeuMJ7reOrYKyj0nc7ssOrk_WlSw7VhKtKaXWjm2mg6auFFhqFbpOBFOcoLeD5gLi4CC1JDMT8qXK20LO0bktsTtBhv-GjBpW389-U2ALyDE5fzF8oSWfLryEA2YQuLAgzhlUJr7p7bJLufGbi3BJJP4LhiO8HQfDFlkxaHzH-h2EWy51dak9874DUHskRcRqXA7f8PNIS-dcz_Nt1y6BD9ekWZxbRLVXrDFoRbCXMINNyNuMeCx-GGJtfnvtj2OfstTgKB0RLTZgwxPkw6xPzspDoRDTGcaQWeq3J0b1Y_ziX9bIZVyNgfTKRDqt3ov88hKCjHZyMSqkQpm3dYKw"><script src="https://www.google.com/recaptcha/api.js?render=6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK"></script>
<script>
grecaptcha.ready(function() {
grecaptcha.execute("6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK", {action: "http://localhost/wordpress/index.php/login/"})
.then(function(token) {
document.getElementById("Token-6d54db25b94a4ae3b467e87f9a886644").value = token
});
});
</script>
							<div class="form-signup " style="color:red;">
								
							</div>
							<div class="form-signup clearfix">
								<div class="row">
									<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
										<fieldset class="form-group">
											<label>Họ <span class="required">*</span></label>
											<input type="text" class="form-control form-control-lg" value="" name="lastName" id="lastName" placeholder="Họ" required="">
										</fieldset>
									</div>
									<div class="col-md-12">
										<fieldset class="form-group">
											<label>Tên <span class="required">*</span></label>
											<input type="text" class="form-control form-control-lg" value="" name="firstName" id="firstName" placeholder="Tên" required="">
										</fieldset>
									</div>
									<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
										<fieldset class="form-group">	
											<label>Số điện thoại <span class="required">*</span></label>
											<input placeholder="Số điện thoại" type="text" pattern="\d+" id="Phone" class="form-control form-control-comment form-control-lg" name="Phone" required="">
										</fieldset>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
										<fieldset class="form-group">
											<label>Email <span class="required">*</span></label>
											<input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" class="form-control form-control-lg" value="" name="email" id="email" placeholder="Email" required="">
										</fieldset>
									</div>
									<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
										<fieldset class="form-group">
											<label>Mật khẩu <span class="required">*</span> </label>
											<input type="password" class="form-control form-control-lg" value="" name="password" id="password" placeholder="Mật khẩu" required="">
										</fieldset>
									</div>
								</div>
								<div class="section margin-top-10 button_bottom mt-3">
                                   <button type="submit" value="Đăng ký" class="btn  btn-style  btn_register btn-block">Đăng ký</button>
									
								</div>
							</div>
							</form>
							<div class="block social-login--facebooks text-center">
								<p class="a-center text-secondary">
									Hoặc đăng nhập bằng
								</p>
								<script>function loginFacebook(){var a={client_id:"947410958642584",redirect_uri:"https://store.mysapo.net/account/facebook_account_callback",state:JSON.stringify({redirect_url:window.location.href}),scope:"email",response_type:"code"},b="https://www.facebook.com/v3.2/dialog/oauth"+encodeURIParams(a,!0);window.location.href=b}function loginGoogle(){var a={client_id:"997675985899-pu3vhvc2rngfcuqgh5ddgt7mpibgrasr.apps.googleusercontent.com",redirect_uri:"https://store.mysapo.net/account/google_account_callback",scope:"email profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile",access_type:"online",state:JSON.stringify({redirect_url:window.location.href}),response_type:"code"},b="https://accounts.google.com/o/oauth2/v2/auth"+encodeURIParams(a,!0);window.location.href=b}function encodeURIParams(a,b){var c=[];for(var d in a)if(a.hasOwnProperty(d)){var e=a[d];null!=e&&c.push(encodeURIComponent(d)+"="+encodeURIComponent(e))}return 0==c.length?"":(b?"?":"")+c.join("&")}</script>
								<a href="javascript:void(0)" class="social-login--facebook" onclick="loginFacebook()"><img width="129px" height="37px" alt="facebook-login-button" src="//bizweb.dktcdn.net/assets/admin/images/login/fb-btn.svg"></a>
								<a href="javascript:void(0)" class="social-login--google" onclick="loginGoogle()"><img width="129px" height="37px" alt="google-login-button" src="//bizweb.dktcdn.net/assets/admin/images/login/gp-btn.svg"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	get_footer();?>

</body>
</html>