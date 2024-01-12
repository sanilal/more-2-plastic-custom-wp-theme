<?php 
/**
* The template used for displaying blog posts
*
* @package WordPress
* Template name: Blog
*/
get_header();
global $post;
?>

<section id="blog" class="blog general withPadding blog-inner">
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
  'posts_per_page' => -1,
  'orderby' => 'id',
  'order'   => 'DSC',
);
$the_query = new WP_Query($args); ?>
<?php
// Start our WP Query
while ($the_query -> have_posts()) : $the_query -> the_post();
// Display the Post Title with Hyperlink
?>
  
              <div class="col-md-3 col-sm-12">
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