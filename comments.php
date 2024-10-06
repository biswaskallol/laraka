<?php
// Check if comments are allowed
if (comments_open()) :
    ?>
    <div id="comments" class="comments-area">
        <?php
        // Display the comments list
        if (have_comments()) :
            ?>
            <h2 class="postbox__comment-title">
                <?php
                $comment_count = get_comments_number();
                echo esc_html($comment_count) . ' ' . _n('Comment', 'Comments', $comment_count, 'laraka');
                ?>
            </h2>

            <ul class="postbox__comment mb-95">
                <?php
                wp_list_comments(array(
                    'style'       => 'ul',
                    'short_ping'  => true,
                    'callback' => 'custom_comment_list'
                ));
                ?>
            </ul>

            <?php
            // Display comment pagination if needed
            the_comments_pagination(array(
                'prev_text' => esc_html__('Previous', 'laraka'),
                'next_text' => esc_html__('Next', 'laraka'),
            ));
        endif;
        
        if ( is_user_logged_in() ) {
            $cl = 'loginformuser';
        } else {
            $cl = '';
        }

        $commenter = wp_get_current_commenter();
        $req = get_option('require_name_email');

        $fields = array(
            'author' => '<div class="col form-group ">
                                <input name="author" id="author" type="text" class="form-control" placeholder="'. esc_attr__( 'Your Name*','laraka' ) .'" value="'.esc_attr( $commenter['comment_author'] ) . '" '. ($req ? 'required' : '') .'>
                            </div>',
            'email' => ' <div class="col form-group">
                                <input name="email" id="email" type="text" class="form-control" placeholder="'. esc_attr__( 'Your Email*','laraka' ) .'" value="'.esc_attr( $commenter['comment_author_email'] ) . '" '. ($req ? 'required' : '') .'>
                            </div>',
            
            'url' => '<div class="row">
                        <div class="col-gl-12 form-group">
                            <input name="url" id="url" type="text" class="form-control" placeholder="'. esc_attr__( 'Your Website','laraka' ) .'" value="'.esc_attr( $commenter['comment_author_url'] ) . '">
                        </div>
                    </div>',
        );


        $defaults = [
            'fields'             => $fields,
            'comment_field' => '<div class="row">
                                    <div class="col form-group">
                                        <textarea name="comment" id="comment" class="form-control" placeholder="'. esc_attr__( 'Your Comment*','laraka' ) .'" required></textarea>
                                    </div>
                                </div>',
            'submit_button' => '<div class="text-center">
                                    <button type="submit" class="btn btn-primary">'. esc_html__( 'Post Comment', 'laraka' ) . '</button>
                                </div>',

            'cookies' => '<div class="col-xxl-12">
                <div class="postbox__comment-agree d-flex align-items-start mb-25">' .
                '<input class="e-check-input" type="checkbox" id="e-agree" name="wp-comment-agree" value="1" checked>' .
                '<label class="e-check-label" for="e-agree">' . esc_html__('Save my name, email, and website in this browser for the next time I comment.', 'laraka') . '</label></div>
            </div>'
        ];
        // Display the comment form
        comment_form($defaults);
        ?>
    </div><!-- .comments-area -->
<?php endif; ?>


<?php
// Move the comment textarea to the bottom
function move_comment_textarea_to_bottom($fields) {
    $comment_field = $fields['comment'];
    unset($fields['comment']);
    $fields['comment'] = $comment_field;

    return $fields;
}

add_action('comment_form_fields', 'move_comment_textarea_to_bottom');
// comments for end 


// custom_comment_list
function custom_comment_list($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;

    if ($comment->comment_type == 'pingback' || $comment->comment_type == 'trackback') {
        // Display pingbacks and trackbacks differently if needed
        ?>
        <li class="pingback">
            <p><?php esc_html_e('Pingback:', 'laraka'); ?> <?php comment_author_link(); ?></p>
        </li>
        <?php
    } else {
        // Display regular comments
        ?>
        <section id="blog-comments" class="blog-comments section">

<div class="container">
  <div id="comment-2" class="comment">
    <div class="d-flex">
      <div class="comment-img"><?php echo get_avatar($comment, 80); ?></div>
      <div>
        <h5><a href=""><?php comment_author(); ?></a></h5>
        <time datetime="2020-01-01"><?php comment_date(); ?></time>
        <?php if ($comment->comment_approved == '0') : ?>
            <p><?php esc_html_e('Your comment is awaiting moderation.', 'laraka'); ?></p>
        <?php endif; ?>
        <p><?php comment_text(); ?></p>
      </div>
    </div>

    <div id="comment-reply-1" class="comment comment-reply">
        <div class="d-flex">
            <a href="#" class="reply"><i class="bi bi-reply-fill"></i> <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?></a>
        </div>
    </div><!-- End comment reply #1-->
  </div>
  <!-- End comment #2-->


</div>

</section>
        <li class="d-none" <?php comment_class('comment'); ?> id="comment-<?php comment_ID(); ?>">
                <div class="postbox__comment-box d-sm-flex align-items-start">
                    <div class="postbox__comment-info">
                        <div class="postbox__comment-avater">
                            <?php echo get_avatar($comment, 80); ?>
                        </div>
                    </div>
                    <div class="postbox__comment-text ">
                        <div class="postbox__comment-name">
                            <span class="post-meta"> <?php comment_date(); ?></span>
                            <h5><?php comment_author(); ?></h5>
                        </div>
                        <?php if ($comment->comment_approved == '0') : ?>
                            <p><?php esc_html_e('Your comment is awaiting moderation.', 'laraka'); ?></p>
                        <?php endif; ?>
                        <?php comment_text(); ?>
                        <div class="postbox__comment-reply">
                        <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
                        </div>
                    </div>
                </div>
        <?php
    }
}
