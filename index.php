<?php get_header();
global $post;
?>

<section class="slider">
          <?php  echo do_shortcode('[rev_slider alias="slider-1"][/rev_slider]') ?>
           <!-- <img src="<?php  echo get_template_directory_uri(); ?>/assets/img/slide1.jpg" alt="Slide" class="img-fluid"> -->
            <!-- <p>There’s More to Plastic is an initiative born in the UAE that aims towards a greener and more sustainable future! 
              We believe that there’s more to what we currently perceive about plastic. Through our journey with you, we will 
              together explore the various types of plastic out there. We will unveil the sociological recycling behaviors conducted 
              in the region. We will also make sure you have an understating of the most interesting facts about the industry and 
              finally we will give you hand-on tips and tricks for a better utilization and handling of those plastic bottles and 
              bags around you that everyone is worried about.</p> -->
          <div class="scroll-down">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/scroll.svg" alt="Scroll down">
            <span>SCROLL DOWN <br>
              TO KNOW MORE</span>
          </div>
        </section>
        <section id="the-initiative" class="initiative general withPadding">
          <div class="container initiative-wraper pl-2r">
            <div class="row">
              <div class="col">
              <?php if( get_field('initiative_title') ): ?>
                <h1 class="title" data-aos="fade-left"><?php echo the_field('initiative_title');?> </h1>
            <?php endif; ?>
               
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-12 col-sm-12" data-aos="fade-right">
              <?php if( get_field('initiative_text') ): ?>
                <p><?php echo the_field('initiative_text');?></p>
                <?php endif; ?>
                <?php if( get_field('initiative_bold_text') ): ?>
                <p class="lead blue"><?php echo the_field('initiative_bold_text');?></p>
                <?php endif; ?>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12" data-aos="fade-up" data-aos-duration="1300">
                <div class="initiative-img">
                <?php if( get_field('initiative_image') ): ?>
                  <img src="<?php echo the_field('initiative_image'); ?>" alt="" class="img-fluid">
                  <?php endif; ?>
                </div>
                
              </div>
            </div>
          </div>
        </section>
        <section id="break-the-myth" class="break-the-myth withPadding" data-aos="fade-down">
          <div id="myth">
              <div class="container pl-2r">
                <div class="maxContent">
                  <div class="row">
                    <div class="col">
                    <?php if( get_field('myth_section_title') ): ?>
                      <h2 class="title white" data-aos="fade-left"><?php echo the_field('myth_section_title');?></h2>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col myth-wraper">
                      <div class="myth pl-2r">
                        <h3 class="white mythtitle" data-aos="fade-right"></h3>
                        <div class="mythbtns" data-aos="fade-left">
                          <button class="mythbtn" data-result="true">MYTH</button>
                          <button class="mythbtn" data-result="false">FACT</button>
                        </div>
                      </div>
                      <div class="next" data-aos="fade-right">
                        <span class="nextbtn">></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <div id="fact">
              <div class="container pl-2r">
                <div class="row">
                  <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="true-false">
                      <span class="fact-heading"></span>
                    </div>
                    <div class="answer">
                      <p class="fact-answer"></p>
                    </div>
                  </div>
                  <div class="col-lg-5 col-md-12 col-md-12 col-sm-12">
                    <div class="fact-img">
                      <img src="" alt="Myth1" class="myth-image img-fluid">
                    </div>
                  </div>
                </div>
              </div>
          </div> 
          <script>

        
         
            const myths = {
                <?php
                    // Check rows exists.
                    if( have_rows('myths') ):
                    // Loop through rows.
                    $id = 0;
                    while( have_rows('myths') ) : the_row();
                    $id++
                    ?>
              myth<?php echo $id; ?> : { 
                id: '<?php echo $id; ?>',
                question: '<?php echo get_sub_field('myth') ?>',
                answer: '<?php echo get_sub_field('answer') ?>',
                image : '<?php echo get_sub_field('myth_image') ?>'
              },
              <?php 
                      endwhile; 
                      endif;                     
                    ?>
            }
            // const count = Object.keys(myths).length;
            
          
          
                    </script>
        </section>
        <section id="rethink-plastic" class="rethink-plastic withPadding">
          <div class="container pl-2r">
            <div class="row">
              <div class="col">
                <div class="rethink-container">
                  <div class="rethink-text" data-aos="fade-right">
                  <?php if( get_field('rethink_section_title') ): ?>
                    <h2 class="title"><?php echo the_field('rethink_section_title');?></h2>
                    <?php endif; ?>
                     <?php if( get_field('rethink_section_content') ): ?>
                    <p><?php echo the_field('rethink_section_content');?> </p>
                      <?php endif; ?>
                       <?php if( get_field('rethink_section_bold') ): ?>
                      <p class="special-txt">
                      <?php echo the_field('rethink_section_bold');?> 
                      </p>
                      <?php endif; ?>
                  </div>
                  <div class="rethink-slider" id="rethink-slider" data-aos="fade-left" data-aos-delay="500" data-aos-duration="800">
                  <?php
                    // Check rows exists.
                    if( have_rows('rethink_carousel') ):
                    // Loop through rows.
                    $id = 0;
                    while( have_rows('rethink_carousel') ) : the_row();
                    $id++
                    ?>
                    <div class="slide-item" id="slide<?php echo $id; ?>">
                      <div class="slide-caption">
                      <?php if( get_field('rethink_section_bold') ): ?>
                        <h2> <?php echo get_sub_field('rethink_carousel_caption') ?>
                        </h2>
                        <?php endif; ?>
                      </div>
                      <?php if( get_sub_field('rethink_carousel_image') ): ?>
                      <div class="rethink-img"><img src="<?php echo get_sub_field('rethink_carousel_image') ?>" alt="" class="img-fluid slide-img " ></div>
                      <?php endif; ?>
                      
                    </div>
                    <?php 
                      endwhile; 
                      endif;                     
                    ?>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section id="take-a-pledge" class="pledge withPadding" >
          <div class="pledgeSubmissions">
            <?php echo do_shortcode("[cf7-views id=73]") ?>
          </div>
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="pledge-container">
                  <div class="responsible">
                    <h2> <span class="blue">use plastic</span>  <br>
                      responsibly</h2>
                  </div>
                  <div class="take-pledge">
                    <h2>1892</h2>
                    <h3>People took the pledge</h3>
                    <button class="btn blue-btn" id="take-pledge-btn">take pledge</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="pledgeform" id="pledge-form">
          <div class="pledgeClose">
            X
          </div>
          <div class="container">
                    <div class="row">
                      <div class="col">
                        <div class="pledge-form-wraper">
                          <div id="take-pledge-form">
                            <h2 class="title">Take pledge</h2>
                            <?php echo do_shortcode('[contact-form-7 id="65" title="Take a Pledge"]') ?>
                          </div>
                          <div class="pledge-badge">
                            <h2 class="title">Thank you for taking a stand and joining us
  towards a more sustainable and green future!</h2>
                        <div class="download-badge">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/badge.png" alt="" class="share-image">
                          <a href="<?php echo get_template_directory_uri(); ?>/assets/img/i-am-a-planet-saver-badge.pdf" class="btn blue-btn" download="">Download badge</a>
                          <div class="share-badge">
                          <h3 class="text-center">Share the badge</h3>
                            <ul>
                              <li><a href="http://www.facebook.com/share.php?u=https://moretoplastic.comv/wp-content/themes/moretoplastic/assets/img/badge.png" target="_blank"><i class="fa-brands fa-square-facebook"></i></a></li>
                              <!-- <li><script src="https://platform.linkedin.com/in.js" type="text/javascript">lang: en_US</script>
<script type="IN/Share" data-url="https://moretoplastic.com/v1/wp-content/themes/moretoplastic/assets/img/badge.png"></script></li> -->
<li><a href="http://www.linkedin.com/shareArticle?mini=true&url=https://moretoplastic.com/wp-content/themes/moretoplastic/assets/img/badge.png&title=Share%20badge%20on%20linkedin&source=moretoplastic.com" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                              <li><a href="http://twitter.com" target="_blank"><i class="fa-brands fa-square-twitter"></i></a></li>
                             
                            </ul> 
                          </div>
                        </div>

                        </div>
                        </div>
                        
                      </div>
                    </div>
          </div>
        </section>
      
        <section id="blog" class="blog general withPadding">
          <div class="container pl-2r">
            <div class="row ">
              <div class="col"><h2 class="title">BLOG</h2></div>
            </div>
          </div>


          <div class="container">
            <div class="row">
            <?php
// Define our WP Query Parameters
$args = array(
  'posts_per_page' => 3,
  'orderby' => 'id',
  'order'   => 'DSC',
);
$the_query = new WP_Query($args); ?>
<?php
// Start our WP Query
while ($the_query -> have_posts()) : $the_query -> the_post();
// Display the Post Title with Hyperlink
?>
  
              <div class="col-md-4 col-sm-12">
                <div class="blog-item">
                <a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail(null,'thumbnail');?></a>
                  <!-- <img src="<?php //echo get_template_directory_uri(); ?>/assets/img/blog1.jpg" alt="" class="img-fluid"> -->
                  <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                </div>
              </div>
              <?php
// Repeat the process and reset once it hits the limit
endwhile;
wp_reset_postdata();
?>
        
            </div>
          </div>
        </section>
        <?php get_footer(); ?>