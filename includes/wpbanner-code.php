<?php
/*
WP Banner Plugin Code.
*/

// HEADER BANNER //


function wpbanner_add_banner()
{

  $options = get_option( 'woobanpage_settings' );

  $custom_text = '';

    if( isset( $options[ 'custom_text' ] ) )
    {
      $custom_text = esc_html( $options['custom_text'] );
    }

    if( is_front_page() )
    {
      ?>
          <div class="header-banner"><?php esc_html_e($custom_text); ?></div>
      <?php
    }

};
add_action('wp_head', 'wpbanner_add_banner');
