<?php

class Custom_Latest_Posts_Widget extends WP_Widget {

    // Constructor to initialize the widget
    public function __construct() {
        parent::__construct(
            'custom_latest_posts_widget',
            __( 'Laraka Custom Latest Posts', 'laraka' ),
            array( 'description' => __( 'A widget that displays the latest posts with a customizable number of posts and title.', 'laraka' ) )
        );
    }

    // Frontend display of the widget
    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
        $posts_per_page = ! empty( $instance['posts_per_page'] ) ? $instance['posts_per_page'] : 5;

        echo $args['before_widget'];

        // Widget title
        if ( ! empty( $title ) ) {
            echo $args['before_title'] . $title . $args['after_title'];
        }

        // Query latest posts
        $latest_posts = new WP_Query( array(
            'post_type'      => 'post',
            'posts_per_page' => $posts_per_page,  // Number of posts to display from the widget settings
            'post_status'    => 'publish',
        ) );

        if ( $latest_posts->have_posts() ) {
            echo '<div class="custom-latest-posts-wrapper">';
            while ( $latest_posts->have_posts() ) {
                $latest_posts->the_post();
                ?>
                
                <div class="rc__post d-flex">
                    <div class="rc__post-thumb">
                        <a href="<?php the_permalink(); ?>">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail( 'thumbnail' ); ?>
                            <?php else : ?>
                                <img src="path/to/default-image.jpg" alt="<?php the_title(); ?>">
                            <?php endif; ?>
                        </a>
                    </div>
                    <div class="rc__post-content">
                        <h4 class="rc__post-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h4>
                        <div class="rc__meta">
                            <span>
                                <?php echo get_the_date(); ?>
                            </span>
                        </div>
                    </div>
                </div>
                
                <?php
            }
            echo '</div>';
            wp_reset_postdata();
        } else {
            echo '<p>No posts found.</p>';
        }

        echo $args['after_widget'];
    }

    // Backend widget form (for settings)
    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'Latest Posts', 'laraka' );
        $posts_per_page = ! empty( $instance['posts_per_page'] ) ? $instance['posts_per_page'] : 5;
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'posts_per_page' ); ?>"><?php _e( 'Number of posts to show:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'posts_per_page' ); ?>" name="<?php echo $this->get_field_name( 'posts_per_page' ); ?>" type="number" value="<?php echo esc_attr( $posts_per_page ); ?>" />
        </p>
        <?php
    }

    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['posts_per_page'] = ( ! empty( $new_instance['posts_per_page'] ) ) ? strip_tags( $new_instance['posts_per_page'] ) : '';
        return $instance;
    }
}

// Register the widget
function register_custom_latest_posts_widget() {
    register_widget( 'Custom_Latest_Posts_Widget' );
}
add_action( 'widgets_init', 'register_custom_latest_posts_widget' );
