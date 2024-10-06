<?php

function laraka_breadcrumb(){
    global $post;  
    $breadcrumb_class = '';
    $breadcrumb_show = 1;

    if ( is_front_page() && is_home() ) {
        $title = get_theme_mod('breadcrumb_blog_title', __('Blog','laraka'));
        $breadcrumb_class = 'home_front_page';
    }
    elseif ( is_front_page() ) {
        $title = get_theme_mod('breadcrumb_blog_title', __('Blog','laraka'));
        $breadcrumb_show = 0;
    }
    elseif ( is_home() ) {
        if ( get_option( 'page_for_posts' ) ) {
            $title = get_the_title( get_option( 'page_for_posts') );
        }
    }
    elseif ( is_single() && 'post' == get_post_type() ) {
      $title = get_the_title();
    } 
    elseif ( is_single() && 'service' == get_post_type() ) {
      $title = get_the_title();
    } 
    elseif ( is_single() && 'product' == get_post_type() ) {
        $title = get_theme_mod( 'breadcrumb_product_details', __( 'Shop', 'laraka' ) );
    } 
    elseif ( is_search() ) {
        $title = esc_html__( 'Search Results for : ', 'laraka' ) . get_search_query();
    } 
    elseif ( is_404() ) {
        $title = esc_html__( 'Page not Found', 'laraka' );
    } 
    elseif ( is_archive() ) {
        $title = get_the_archive_title();
    } 
    else {
        $title = get_the_title();
    }


    ?>

<!-- Page Title -->
<div class="page-title dark-background tl-breadcrumb">
    <div class="container position-relative">
        <h1><?php echo wp_kses_post( $title );?></h1>
        <p><?php echo esc_html__( 'Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.','laraka' );?></p>
        <?php if(function_exists('bcn_display')): ?>
            <nav class="breadcrumbs">
                <?php bcn_display();?>
            </nav>
        <?php endif;?>
    </div>
</div>
<!-- End Page Title -->



    




<?php
}