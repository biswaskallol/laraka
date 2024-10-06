<?php
    $copyright = get_theme_mod( 'laraka_editor_setting', '© Copyright Moderna All Rights Reserved Designed by <a href="#">Laraka Theme</a>' );
    $social_info = get_theme_mod( 'laraka_editor_setting', '© Copyright Moderna All Rights Reserved Designed by <a href="#">Laraka Theme</a>' );

?>
<footer id="footer" class="footer dark-background">
    <?php if(is_active_sidebar( 'footer-widget-1' ) or is_active_sidebar( 'footer-widget-2' ) or is_active_sidebar( 'footer-widget-3' ) or is_active_sidebar( 'footer-widget-4' ) ) : ?>
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <?php dynamic_sidebar( 'footer-widget-1' );?>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
            <?php dynamic_sidebar( 'footer-widget-2' );?>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
            <?php dynamic_sidebar( 'footer-widget-3' );?>
        </div>

        <div class="col-lg-4 col-md-12">
            <?php dynamic_sidebar( 'footer-widget-4' );?>
          <div class="social-links d-flex">
            <?php echo laraka_social();?>
          </div>
        </div>
      </div>
    </div>
    <?php endif;?>

    <div class="container copyright text-center mt-4">
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        <?php echo wp_kses_post( $copyright );?>
      </div>
    </div>
</footer>