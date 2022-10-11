<?php
/**
 * Twenty Twenty-Two functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two
 * @since Twenty Twenty-Two 1.0
 */


if ( ! function_exists( 'twentytwentytwo_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'twentytwentytwo_support' );

if ( ! function_exists( 'twentytwentytwo_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'twentytwentytwo-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'twentytwentytwo-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'twentytwentytwo_styles' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

if ( !function_exists('congbio_thumbnail') ) {
	function lyly_thumbnail($size) {
	  if( !is_single() && has_post_thumbnail() && !post_password_required() || has_post_format('image') ) : ?>
	  <a href="<?php the_permalink(); ?>">
	  <div class="post-thumbnail"><?php the_post_thumbnail( $size ); ?></div>
	  </a>
	  <?php else : ?>
		<a href="<?php the_permalink(); ?>">
	  <div class="post-thumbnail"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxddtPSxt3mS3QjGibU-bVEPkoBgh_852nNRuU2_CuZ2sEEJJD9VEcGBZ9OGmlv_LmGdg&usqp=CAU" alt="image empaty"></div>
	  </a>
	<?php endif;
}
}

// Rút ngắn tiêu Đề của bài post
// ------------
// add_filter( 'the_title', 'shorten_post_title', 10, 2 );
// function shorten_post_title( $title, $id ) {
// if (get_post_type( $id ) === 'post' & !is_single() ) {
// 	return wp_trim_words( $title, 5 ); // thay đổi số từ bạn muốn hiển thị
// } else {
// 	return $title;
// }
// }