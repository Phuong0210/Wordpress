
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
					<?php if( !get_theme_mod( 'disable_search_icon', false ) ){ 
						if ( class_exists('WooCommerce' ) && function_exists( 'header_wooCom_cat_search' ) ) {
				    		header_wooCom_cat_search();
			    		}else{
			    			get_search_form();
			    		}
			    	} ?>
					
						<!-- <span class="input-group-btn btn-action">
							<button type="submit" class="btn text-white icon-fallback-text h-100">
								<span class="fa fa-search"></span>
							</button>
						</span> -->
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
						<li class="media">
							<i class="fas fa-user-circle mr-3 align-self-center"></i>
							<div class="media-body d-md-flex flex-column d-none ">
																<a rel="nofollow" href="/account/login" class="d-block" title="Tài khoản">
									Tài khoản
								</a>
								<small>
			
									<a href="http://localhost/wordpress/index.php/login/" title="Đăng nhập" class="font-weight: light">
									
										Đăng nhập
									</a> </small>
								
							</div>
						</li>
						<li class="mini-cart">
						<div class="col-md-3 d-none d-md-block">
					<?php if ( class_exists('WooCommerce' ) ) { ?>
					    <div class="header-right hidden-xs" >
					        <?php

					        if( !get_theme_mod( 'disable_woocommerce_cart', false ) ){bosa_ecommerce_shop_header_cart();
					        }
					        ?>
					    </div>	
					<?php } ?>
				</div>
						</li>

					</ul>
				</div>
			</div>
</div>
<header id="masthead" class="site-header header-four">
	<div class="bottom-header fixed-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 d-none d-lg-flex ">
					<?php if ( !get_theme_mod( 'disable_header_woo_cat_menu', false ) ) {
						if ( has_nav_menu( 'menu-4' ) ) { ?>
							<nav class="header-category-nav">
					            <ul class="nav navbar-nav navbar-left">
					                <li class="menu-item menu-item-has-children">
					                    <a href="#">
					                    	<i class="fas fa-bars"></i>
					                        <?php esc_html_e( 'Categories', 'bosa-ecommerce-shop' ); ?>
					                    </a>
					                    <?php
					                    wp_nav_menu(array(
					                        'container'      => '',
											'theme_location' => 'menu-4',
											'menu_id'        => 'woo-cat-menu',
											'menu_class' => 'dropdown-menu',
					                    ));
					                    ?>
					                </li>
					            </ul>
					        </nav>
	            		<?php } else {
	            			if( class_exists( 'WooCommerce' ) ){ 
	            				$categories = get_categories( 'taxonomy=product_cat' );
            					if( is_array( $categories ) && !empty( $categories ) ){ ?>
					                <nav class="header-category-nav">
					                	<ul class="nav navbar-nav navbar-left">
							                <li class="menu-item menu-item-has-children">
							                    <a href="#">
							                    	<i class="fas fa-bars"></i>
							                        <?php esc_html_e( 'Categories', 'bosa-ecommerce-shop' ); ?>
							                    </a>
							                    <ul class="menu-categories-menu dropdown-menu">
							                        <?php
							                        foreach( $categories as $category ) {
							                            $category_permalink = get_category_link( $category->cat_ID ); ?>
							                            <li class="menu-item <?php echo esc_attr( $category->category_nicename ); ?>">
							                            	<a href="<?php echo esc_url( $category_permalink ); ?>">
							                            		<?php echo esc_html( $category->cat_name ); ?>
							                            	</a>
							                            </li>  
							                        <?php } ?>
							                    </ul>
							                </li>
							            </ul>
					                </nav>
				        		<?php } ?>
				        	<?php } ?>
				        <?php } ?>
			        <?php } ?>
					<nav id="site-navigation" class="main-navigation d-none d-lg-flex">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'bosa-ecommerce-shop' ); ?></button>
						<?php if ( has_nav_menu( 'menu-1' ) ) :
							wp_nav_menu( 
								array(
									'container'      => '',
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
									'menu_class'     => 'menu nav-menu',
								)
							);
						?>
						<?php else :
							wp_page_menu(
								array(
									'menu_class' => 'menu-wrap',
									'before'     => '<ul id="primary-menu" class="menu nav-menu">',
									'after'      => '</ul>',
								)
							);
						?>
						<?php endif; ?>
					</nav><!-- #site-navigation -->	
				</div>			
				</div>
			</div>
		</div>	
		<!-- header search form end-->
		<div class="mobile-menu-container"></div>
	</div>
	<?php get_template_part( 'template-parts/offcanvas', 'menu' ); ?>
</header><!-- #masthead -->
<style>
	/* Phượng */
.img-fluid-one{
  display: flex;
  width: 1000px;
  height: auto;
  margin: auto;
}
.img-fluid-color{
  background: #FBCB0B;
}
.align-items-center{
  display: flex;
  align-items: center;
  align-content: center;
  justify-content: center;
  background: #E85933;
  height: 77px;
}
.img-fluid{
  margin-right: 70px;
}
.input-group-field{
  width: 400px;
  
  margin-right: -2px;
  border-radius: 10px;
}
.text-white {
  background-color: #FBCB0B;
  border-color: #ffff;
  color: #ffff;
  border-bottom-right-radius: 10px;
  border-top-right-radius: 10px;
}
.header-left{
      list-style-type: none;
 
}
.media{
	display: flex;
    /* justify-content: center; */
    align-items: center;
    margin-left: 50px;
}
ul, ol {
  margin: 0 0 0em 0em;
  padding: 0;
}
.header-left{
	display:flex;
}
.mini-cart{
	border:1px soild white;
	jus
	
}
.media span{
	color: white;
}
.media a{
	color: white;
}
.media i {
	color: white;
    font-size: 22px;
}
.header-svg-icon svg{
	color: white;
    font-size: 22px;
}
.amount-cart .hidden-xs{
	color:white;
}
#masthead{
	margin-top: 5px;
	background-color: white;
}

</style>