<!doctype html>
<html lang="en">
  <head>
	  <!-- Meta Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '2953131974993892');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=2953131974993892&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
	  
	  <meta name="title" content="More to Plastic">

<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
<meta name="author" content="ASAD ALI">

	  
	  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <?php wp_head(); 
    global $wp;
    ?>
  </head>
  <body class="more-plastic stop-scrolling">
      <div id="wptime-plugin-preloader"></div>
      <div class="outer-wraper">
        <header class="header">
          <div class="container">
           <div class="row">
            <div class="col-md-2 col-sm-4">
              <div class="brand">
              <?php
				 
				  
// check to see if the logo exists and add it to the page
if ( get_theme_mod( 'moretoplastic_logo' ) ) : ?>
 
<a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_theme_mod( 'moretoplastic_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="img-fluid"></a>
<?php // add a fallback if the logo doesn't exist
else : ?>
 
<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
 
<?php endif; ?>
                
              </div>
            </div>
            <div class="col-md-10 col-sm-8">
              <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <?php 
                  // wp_nav_menu(
                  //   array(
                  //     'menu' => 'primary',
                  //     'container' => '',
                  //     'theme_location' => 'primary',
                  //     'items_wrap' => '<ul id="" class="navbar-nav ml-auto">%3$s</ul>'
                  //   )
                  //   );
                ?>

                  <ul class="navbar-nav ml-auto">
                  <?php
                                    $menu_name = 'primary';
                                    $count=0;
                                    $max = 200;
                                    $loop = 0;
                                    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
                                    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                                    $menu_items = wp_get_nav_menu_items($menu->term_id);
                                    foreach ( (array) $menu_items as $key => $menu_item ) {
                                    if($loop == 200) break;
                                    if ($menu_item->menu_item_parent == 0 )
                                    if(home_url( $wp->request ) === get_home_url()) {
                                    //echo  home_url( $wp->request )
                                    ?>
                                    
                                    <?php // echo get_home_url(); ?>
                                    <li  class="<?php echo 'nav-item'; echo (($menu_item->object_id == get_queried_object()->term_id ) ? ' active' : ''); ?>">
                                        <a class="nav-link" href="<?php echo esc_url($menu_item->url); ?>"><?php echo $menu_item->title; ?></a>
                                        <?php
                                        //$nav_menu_items = wp_get_nav_menu_items( $menu_id, array( 'post_status' => 'publish,draft' ) );
                                        //var_dump($menu_item);
                                    ?>
                                </li>
                                    <?php } else {?>
                                      <li  class="<?php echo 'nav-item'; echo (($menu_item->object_id == get_queried_object()->term_id ) ? ' active' : ''); ?>">
                                        <a class="nav-link" href="<?php if($menu_item->title !== 'Blog'){ echo get_home_url(); }  ?><?php echo esc_url($menu_item->url); ?>"><?php echo $menu_item->title; ?></a>
                                        <?php
                                        //$nav_menu_items = wp_get_nav_menu_items( $menu_id, array( 'post_status' => 'publish,draft' ) );
                                        //var_dump($menu_item);
                                    ?>
                                </li>
                                      <?php } ?>
                                <?php $loop++; } } ?>
                  </ul>

                </div>
              </nav>
            </div>
           </div>
          </div>
        </header>
        <section id="contact-us" class="contact withPadding" >
          <div class="contact-close">X</div>
          <div class="container">
            <div class="row">
              <div class="col">
               
                <div class="contact-us-form">
                  <h2 class="title">Contact us</h2>
                  <?php echo do_shortcode('[contact-form-7 id="113" title="Contact form"]') ?>
                  <!-- <form action="">
                    <input type="text" placeholder="Name">
                    <input type="email" placeholder="Email">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
                    <input type="submit" value="Submit" class="btn blue-btn">
                  </form> -->
                </div>
              </div>
            </div>
          </div>
        </section>