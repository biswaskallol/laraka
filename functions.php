<?php

// LARAKA THEME SUPPORT
function laraka_theme_support(){

    /** post thumbnail **/
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats', array(    
        'image',  
    ));

    /** automatic feed link*/
    add_theme_support( 'automatic-feed-links' );

    /** tag-title **/
    add_theme_support( 'title-tag' );

    /** HTML5 support **/
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

    /** refresh widgest **/
    add_theme_support( 'customize-selective-refresh-widgets' );

    /** Menu register**/
    // Multipule Menu
    register_nav_menus(
        array(
            'main-menu' => __('Main menu','laraka'),
        )
    );

    // widgets-block-editor_support
    remove_theme_support( 'widgets-block-editor' );

}

add_action("after_setup_theme","laraka_theme_support");

















// FILE CALL
include_once('inc/script.php');
if (class_exists('kirki')){
    include_once('inc/laraka-kirki.php');
}
include_once('inc/template-function.php');
include_once('inc/nav-walker.php');
include_once('inc/widgets.php');
include_once('inc/breadcrumb.php');
include_once('inc/sidebar-re-post-widget.php');
// include_once('inc/portfolio-post.php');