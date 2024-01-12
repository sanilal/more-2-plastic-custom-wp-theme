<footer class="footer general">
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="footer-social">
                  <h3>Follow us for
                    more updates</h3>

                    <ul>
                    <?php
                      $menu_name = 'social';
                      if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
                      $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                      $menu_items = wp_get_nav_menu_items($menu->term_id);
                      foreach ( (array) $menu_items as $key => $menu_item ) {
                      if ($menu_item->menu_item_parent != 0 ) continue;
                      $title = strtolower($menu_item->title);
                      $url = $menu_item->url;
                      if( $title == "facebook") { ?>
                          <li><a href="<?php echo esc_url($url); ?>" target="_blank"><i class="fa-brands fa-square-facebook"></i></a></li>
                      <?php } 
                      elseif( $title == "instagram") { ?>
                          <li><a href="<?php echo esc_url($url); ?>" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                      <?php }
                          elseif ( $title == "youtube") {
                      ?>
                      <li><a href="<?php echo esc_url($url); ?>"  target="_blank" ><i class="fa-brands fa-youtube"></i></a></li>        
                      <?php }
                      elseif ( $title == "tiktok") {
                        ?>
                      <li><a href="<?php echo esc_url($url); ?>"  target="_blank" ><i class="tiktok-icon"></i></a></li>        
                        <?php }
                        elseif ( $title == "twitter") {
                          ?>
                        <li><a href="<?php echo esc_url($url); ?>"  target="_blank" ><i class="fa-brands fa-square-twitter"></i></a></li>        
                          <?php }
                      }} 
                    ?> 
                     
                    </ul>
                </div>
              </div>
              <div class="col">
                <div class="footer-brand">
                <?php
// check to see if the logo exists and add it to the page
if ( get_theme_mod( 'moretoplastic_footer_logo' ) ) : ?>

<img src="<?php echo get_theme_mod( 'moretoplastic_footer_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="img-fluid">
<?php // add a fallback if the logo doesn't exist
else : ?>
 
<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
 
<?php endif; ?>
                
                 
                </div>
              </div>
            </div>
            <div class="row text-right">
              <div class="col"><p class="copyright">All Rights Reserved.</p></div>
            </div>
          </div>
        </footer>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<?php wp_footer(); ?>
  </body>
</html>
