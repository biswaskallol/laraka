<?php

// LARAKA CSS, JS ENQUEUE
function laraka_add_theme_scripts() {
	
    // CSS CALL
    wp_enqueue_style( 'harry-fonts', laraka_fonts_url(), array(), '1.0.0', 'all' );
    wp_enqueue_style( 'aos', get_template_directory_uri() . '/assets/vendor/css/aos.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/vendor/css/bootstrap.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bootstrap-icons', get_template_directory_uri() . '/assets/vendor/css/bootstrap-icons.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'glightbox', get_template_directory_uri() . '/assets/vendor/css/glightbox.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/vendor/css/slick.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'swiper-bundle', get_template_directory_uri() . '/assets/vendor/css/swiper-bundle.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'laraka-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    

    // JS CALL
	wp_enqueue_script( 'aos', get_template_directory_uri() . '/assets/vendor/js/aos.js', array( 'jquery' ), 1.0, true );
	wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/assets/vendor/js/bootstrap-bundle.js', array(  ), 1.0, true );
	wp_enqueue_script( 'glightbox', get_template_directory_uri() . '/assets/vendor/js/glightbox.js', array(  ), 1.0, true );
	wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/assets/vendor/js/imagesloaded-pkgd.min.js', array( 'imagesloaded' ), 1.0, true );
	wp_enqueue_script( 'isotope-pkgd', get_template_directory_uri() . '/assets/vendor/js/isotope-pkgd.js', array(  ), 1.0, true );
	wp_enqueue_script( 'noframework-waypoints', get_template_directory_uri() . '/assets/vendor/js/noframework-waypoints.js', array(  ), 1.0, true );
	wp_enqueue_script( 'purecounter-vanilla', get_template_directory_uri() . '/assets/vendor/js/purecounter-vanilla.js', array(  ), 1.0, true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/vendor/js/slick.js', array(  ), 1.0, true );
	wp_enqueue_script( 'swiper-bundle', get_template_directory_uri() . '/assets/vendor/js/swiper-bundle.min.js', array(  ), 1.0, true );
	wp_enqueue_script( 'validate', get_template_directory_uri() . '/assets/vendor/js/validate.js', array(  ), 1.0, true );
	wp_enqueue_script( 'laraka-main', get_template_directory_uri() . '/assets/js/main.js', array(  ), 1.0, true );

    // FORM COMMENT
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'laraka_add_theme_scripts' );

/**
 * REGISTER FONTS
 */

 function laraka_fonts_url(){
    $font_url = '';

    if ( 'off' !== _x( 'on', 'Google font: on or off', 'laraka' ) ) {
        $font_url = 'https://fonts.googleapis.com/css2?'. urlencode('family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    }
    return $font_url;
 }