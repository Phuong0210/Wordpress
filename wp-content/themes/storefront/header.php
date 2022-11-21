
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="profile" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<?php include('styleStorefont.css') ?>
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>
   <div class="img-fluid-color"><img height="65" width="1140" class="img-fluid-one" src="//bizweb.dktcdn.net/100/411/009/themes/877814/assets/top_banner.jpg?1664156331037" alt=""></div>
			<div class="row align-items-center">
				<div>
					<div>
						<span class="bar"></span>
						<span class="bar"></span>
						<span class="bar"></span>
					</div>
				</div>
				<div >
					<a href="/" class="logo-wrapper ">
						<img width="110" height="57" class="img-fluid" src="//bizweb.dktcdn.net/100/411/009/themes/877814/assets/logo.png?1664156331037" alt="logo EGA Market">
					</a>
					
				</div>
				<div >
					<form action="/search" method="get" class="input-group search-bar custom-input-group " role="search">
						<input type="text" name="query" value="" autocomplete="off" placeholder="Tìm kiếm sản phẩm..." class="input-group-field auto-search form-control " required="">
						<input type="hidden" name="type" value="product">
						<span class="input-group-btn btn-action">
							<button type="submit" class="btn text-white icon-fallback-text h-100">
								<span class="fa fa-search"></span>
							</button>
						</span>
					</form>
				</div>
				<div>
					<ul class="header-left">
						<li class="media">
							<img class="align-self-center mr-3" src="//bizweb.dktcdn.net/100/411/009/themes/877814/assets/phone-call.png?1664156331037" width="24" alt="phone">

							<div class="media-body d-md-flex flex-column d-none ">
								<span>Hỗ trợ khách hàng</span>
								<a class="font-weight-bold d-block" href="tel:19006750" title="19006750">
									19006750
								</a>
							</div>
						</li>
						<li>
							<i class="fas fa-user-circle mr-3 align-self-center"></i>
							<div class="media-body d-md-flex flex-column d-none ">
																<a rel="nofollow" href="/account/login" class="d-block" title="Tài khoản">
									Tài khoản
								</a>
								<small>
									<a href="/account/login" title="Đăng nhập" class="font-weight: light">
										Đăng nhập
									</a> </small>
								
							</div>
						</li>
						<li class="cartgroup  ml-0 mr-2 mr-md-0">
							<div class="mini-cart text-xs-center">
								<a class="img_hover_cart" href="/cart" title="Giỏ hàng">
									<i class="fas fa-shopping-bag"></i>
									<span class="mx-2 d-md-block d-none">Giỏ hàng</span>
									<span class="count_item count_item_pr">0</span>
								</a>
								<div class="top-cart-content card ">
									<ul id="cart-sidebar" class="mini-products-list count_li list-unstyled"><div class="no-item"><p>Không có sản phẩm nào.</p></div></ul>
								</div>
							</div>
						</li>

					</ul>
				</div>
			</div>
   <header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">
	
	
		<?php
		
		do_action( 'storefront_header' );

		?>

	</header>

	<?php
	do_action( 'storefront_before_content' );
	?>

	<div id="content" class="site-content" tabindex="-1">
	
		<div class="col-full">
		
		<?php
		do_action( 'storefront_content_top' );
