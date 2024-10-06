<?php
/**
 * Menu Function
 */
// Main menu
function laraka_manu(){
    wp_nav_menu( 
        array(
            'theme_location' => 'main-menu',
            'menu_class'     => '',
            'menu_id'        => '',
            'fallback_cb'    => 'laraka_Walker_Nav_Menu::fallback',
            'walker'         => new Laraka_Walker_Nav_Menu,
        )
    );
}

/**
 * Footer Social Information
 */
function laraka_social(){
    $laraka_facebook = get_theme_mod( 'laraka_facebook', __('#','laraka') );
    $laraka_twitter = get_theme_mod( 'laraka_twitter', __('#','laraka') );
    $laraka_youtube = get_theme_mod( 'laraka_youtube', __('#','laraka') );
    $laraka_linkedin = get_theme_mod( 'laraka_linkedin', __('#','laraka') );
    $laraka_instagram = get_theme_mod( 'laraka_instagram', __('#','laraka') );
    $laraka_flickr = get_theme_mod( 'laraka_flickr', __('#','laraka') );
    $laraka_vimeo = get_theme_mod( 'laraka_vimeo', __('#','laraka') );
    $laraka_behance = get_theme_mod( 'laraka_behance', __('#','laraka') );

?>
<?php if(!empty($laraka_facebook)) : ?>
<a href="<?php echo esc_url($laraka_facebook); ?>"><i class="bi bi-facebook"></i></a>
<?php endif; ?>
<?php if(!empty($laraka_twitter)) : ?>
<a href="<?php echo esc_url($laraka_twitter); ?>"><i class="bi bi-twitter-x"></i></a>
<?php endif; ?>
<?php if(!empty($laraka_youtube)) : ?>
<a href="<?php echo esc_url($laraka_youtube); ?>"><i class="fab fa-youtube"></i></a>
<?php endif; ?>
<?php if(!empty($laraka_linkedin)) : ?>
<a href="<?php echo esc_url($laraka_linkedin); ?>"><i class="bi bi-linkedin"></i></a>
<?php endif; ?>
<?php if(!empty($laraka_instagram)) : ?>
<a href="<?php echo esc_url($laraka_instagram); ?>"><i class="bi bi-instagram"></i></a>
<?php endif; ?>
<?php if(!empty($laraka_flickr)) : ?>
<a href="<?php echo esc_url($laraka_flickr); ?>"><i class="fab fa-linkedin"></i></a>
<?php endif; ?>
<?php if(!empty($laraka_vimeo)) : ?>
<a href="<?php echo esc_url($laraka_vimeo); ?>"><i class="fab fa-linkedin"></i></a>
<?php endif; ?>
<?php if(!empty($laraka_behance)) : ?>
<a href="<?php echo esc_url($laraka_behance); ?>"><i class="fab fa-linkedin"></i></a>
<?php endif; ?>

<?php
}

// Blog Pagination

function laraka_navigation(){
    $pages = paginate_links(array(
        'type'      => 'array',
        'prev_text' => __('<i class="bi bi-chevron-left"></i>'),
        'next_text' => __('<i class="bi bi-chevron-right"></i>'),
    ));
    if($pages){
        echo'<ul>';
        foreach($pages as $page){
            echo "<li>$page</li>";
        }
        echo'</ul>';
    }
}

// Blog tags

function laraka_blog_tags(){
    $tags = get_tags();
    if($tags){
        foreach($tags as $tag){
            ?>
            <a class="tags" href="<?php echo get_tag_link( $tag );?>"><?php echo $tag->name;?></a><?php echo esc_html__( ',' )?>
            <?php 
        }
    }
    else{
        ?>
            <i><?php echo esc_html__( 'No tags found' )?></i>
        <?php
    }
}

// Add filter to customize search form
function laraka_search_form( $search_form ) {
    $search_form = '<div class="search-widget widget-item">
                    <form action="' . esc_url( home_url( '/' ) ) . '">
                        <input type="search" value="' . get_search_query() . '" name="s"/>
                        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                    </form>
                    </div>';

    return $search_form;
}
add_filter( 'get_search_form', 'laraka_search_form' );





