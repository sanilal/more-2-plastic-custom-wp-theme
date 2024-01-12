<?php
/*
* Template Name: Blog Post
*/

get_header(); ?>
<style>
    nav.navigation.post-navigation h2 {
        color: #fff !important;
    }
</style>
<div class="page-header">
<?php if( get_field('page_header_image') ): ?>
    <img src="<?php echo the_field('page_header_image');?>" alt="<?php the_title(); ?>" class="img-fluid">
<?php endif; ?>
    
</div>
<div class="container">
    <div class="row">
    <div class="col-lg-10 col-md-10 col-sm-10 col-sm-10 mx-auto">
	<div id="primary" class="content-area single-post">
		<main id="main" class="site-main" role="main">

  
  
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
  
            /*
             * Include the post format-specific template for the content. If you want to
             * use this in a child theme, then include a file called called content-___.php
             * (where ___ is the post format) and that will be used instead.
             */
            get_template_part( 'content', get_post_format() );
  
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
              //  comments_template();
            endif;
  
            // Previous/next post navigation.
            the_post_navigation( array(
                'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
                'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
            ) );
  
        // End the loop.
        endwhile;
        ?>
  


		<?php if ( have_posts() ) : while( have_posts()  ) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail( 'full' ); ?>
    </a>
    <p><?php the_content(); ?></p>
<?php endwhile; endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	</div>
    </div>
</div>
<div class="clearfix"></div>
<?php require get_template_directory() . '/inc/pledge-form.php'; ?>
<?php
get_footer();
