<!-- Team Section -->
<section id="team" class="team section">
      <div class="container">
        <div class="row gy-5">
          <div class="member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="<?php echo esc_url( $settings['tl_team_image']['url'] );?>" class="img-fluid" alt="">
              <div class="social">
                <?php foreach($settings['tl_team_rep_list'] as $item) : ?>
                <a href="<?php echo esc_url( $item['tl_icon_box_link'] );?>"><?php \Elementor\Icons_Manager::render_icon( $item['tl_icon_box_icon'], [ 'aria-hidden' => 'true' ] ); ?></a>
                <?php endforeach;?>
              </div>
            </div>
            <div class="member-info text-center">
              <h4><?php echo esc_html( $settings['tl_team_name'] );?></h4>
              <span><?php echo esc_html( $settings['tl_team_desig'] );?></span>
              <p><?php echo esc_html( $settings['tl_team_content'] );?></p>
            </div>
          </div><!-- End Team Member -->
        </div>
      </div>
    </section><!-- /Team Section -->
