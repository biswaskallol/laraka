<?php
    $logo = get_theme_mod( 'laraka_logo_url', get_template_directory_uri(  ) . '/assets/img/logo.png' );

?>


<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="<?php echo esc_url( home_url( '/' ) );?>" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="<?php echo esc_url( $logo );?>" alt="<?php echo bloginfo(  );?>">
        <!-- <h1 class="sitename">Moderna</h1> -->
      </a>

      <nav id="navmenu" class="navmenu">
        <?php echo laraka_manu();?>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
</header>