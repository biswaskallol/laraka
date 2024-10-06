<?php get_header(  );?>
   
<main class="main">
    <!-- Blog Posts Section -->
    <section id="blog-posts" class="blog-posts section">
      <div class="container">
        <div class="row gy-4">
        <?php if(have_posts(  )):?>
            <?php while(have_posts(  )) : the_post(  );?>
                <div class="col-lg-4">
                    <article>
                    <div class="post-img">
                        <?php the_post_thumbnail(  );?>
                    </div>

                <!-- Get Categories function -->
                <?php 
                    // Get the current post ID
                    $current_post_id = get_the_ID(  );

                    // Get the categories of the current post
                    $categories = get_the_category( $current_post_id );
                    
                    // Get the post category URL
                    $category_url = get_category_link($categories[0] -> term_id);

                    // If the post has categories, get related posts on the first category
                    if($categories) :
                        // $category_id = $categories[0] -> term_id;

                        $related_cat = [];
                        foreach($categories as $category){
                            $related_cat[] = $category->term_id;
                        }

                        // Define custom query parameters
                        $args = array(
                            'post_type' => 'post',
                            'post_per_page' => 2,
                            'post__not_in' => array($current_post_id),
                            'category__in' => $related_cat,
                            'orderby' => 'rand',
                        );
                    ?>
                        <p class="post-category"><a href="<?php echo esc_url($category_url);?>"><?php echo esc_html( $categories[0]->name );?></a></p>
                    <?php endif;?>
                    <?php ?>
                    <h2 class="title">
                        <a href="<?php the_permalink(  );?>"><?php the_title(  );?></a>
                    </h2>
                    <div class="d-flex align-items-center">
                        <div class="img-fluid post-author-img flex-shrink-0">
                            <?php echo get_avatar( get_the_author_meta( 'ID' )); ?>
                        </div>
                        <div class="post-meta">
                        <p class="post-author"><?php the_author(  );?></p>
                        <p class="post-date">
                            <time datetime="2022-01-01"><?php echo get_the_date(  );?></time>
                        </p>
                        </div>
                    </div>

                    </article>
                </div>
            <?php endwhile;?>
        <?php endif;?>
          <!-- End post list item -->
        </div>
      </div>
    </section><!-- /Blog Posts Section -->

    <!-- Blog Pagination Section -->
    <section id="blog-pagination" class="blog-pagination section">

      <div class="container">
        <div class="d-flex justify-content-center">
            <?php echo laraka_navigation();?>
        </div>
      </div>

    </section>
    <!-- /Blog Pagination Section -->

</main>



















<?php get_footer(  );?>


      
