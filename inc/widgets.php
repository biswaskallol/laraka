<?php

//laraka_widgets
function laraka_widgets(){
    register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'laraka' ),
		'id'            => 'blog-sidebar',
		'description'   => __( 'Widgets in this area will be shown on Blog Sidebar', 'laraka' ),
		'before_widget' => '<div id="%1$s" class="tl-blog-dtls-sidebar %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
    
    register_sidebar( array(
		'name'          => __( 'Footer widget 1', 'laraka' ),
		'id'            => 'footer-widget-1',
		'description'   => __( 'Widgets in this area will be shown on footer', 'laraka' ),
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
    
    register_sidebar( array(
		'name'          => __( 'Footer widget 2', 'laraka' ),
		'id'            => 'footer-widget-2',
		'description'   => __( 'Widgets in this area will be shown on footer', 'laraka' ),
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
    
    register_sidebar( array(
		'name'          => __( 'Footer widget 3', 'laraka' ),
		'id'            => 'footer-widget-3',
		'description'   => __( 'Widgets in this area will be shown on footer', 'laraka' ),
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );
    
    register_sidebar( array(
		'name'          => __( 'Footer widget 4', 'laraka' ),
		'id'            => 'footer-widget-4',
		'description'   => __( 'Widgets in this area will be shown on footer', 'laraka' ),
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );

}

add_action( 'widgets_init','laraka_widgets' );