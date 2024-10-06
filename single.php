<?php get_header(  ); 
    // Get the current post ID
    $current_post_id = get_the_ID(  );

    // Get the categories of the current post
    $categories = get_the_category( $current_post_id );
?>

<main class="main single-page">
    <!-- Page Title -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <!-- Blog Details Section -->
          <?php if(have_posts(  )):?>
            <?php while(have_posts(  )) : the_post(  );?>
            <section id="blog-details" class="blog-details section test">
                <div class="container">
                <article class="article">
                    <div class="post-img">
                    <?php the_post_thumbnail(  );?>
                    </div>
                    <h2 class="title"><?php the_title(  );?></h2>
                    <div class="meta-top">
                    <ul>
                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo esc_html( get_the_author(  ) );?></a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="<?php echo the_permalink(  );?>"><time datetime="2020-01-01"><?php echo get_the_date(  );?></time></a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html"><?php echo get_comments_number(); ?> Comments</a></li>
                    </ul>
                    </div><!-- End meta top -->
                    <div class="content">
                        <?php the_content(  );?>
                    </div><!-- End post content -->
                    <div class="meta-bottom">
                    <i class="bi bi-folder"></i>
                    <ul class="cats">
                        <li><?php echo esc_html( $categories['0']->name );?></li>
                    </ul>
                    <i class="bi bi-tags"></i>
                        <?php laraka_blog_tags();?>
                    </div><!-- End meta bottom -->
                </article>
                </div>
            </section><!-- /Blog Details Section -->
            <?php endwhile;?>
            <?php endif;?>
            <!-- Blog Comments Section -->
            <section id="comment-form" class="comment-form section">
            <div class="container">
            <?php if(have_posts(  )):?>
                <?php while(have_posts(  )) : the_post(  );?>
                    <?php if(comments_open() || get_comments_number()) : comments_template();?>

                    <?php endif;?>
                <?php endwhile;?>
            <?php endif;?>
            </div>
            </section>
            <!-- /Blog Comments Section -->
            
        </div>
        <div class="col-lg-4 sidebar">
          <div class="widgets-container">
            <?php dynamic_sidebar( 'blog-sidebar' );?>
          </div>
        </div>
      </div>
    </div>
</main>

<?php get_footer( );?>