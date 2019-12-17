<?php
/**
 * The template for displaying case studies' landing page
 *
 * This is the template that displays the case studies archive landing page.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

 get_header(); ?>

 	<div id="primary" class="site-content sidebar">
 		<div class="main-content" role="main">
 			<?php while ( have_posts() ) : the_post();
          $services = get_field('services');
          $image_1 = get_field(image_1);
          $size = "full";
      ?>

    <article class="case-study">
          <div class="case-study-archive">
           <aside class="case-study-archive-sidebar">
                <h2><?php the_title();?></h2>
                <h4><?php echo $services; ?></h4>
                <?php the_excerpt(); ?>
                <p<a href="<?php the_permalink() ?>"><span>View Project &#62;</span></a></p>
          </aside>
        </div>

          <div class="case-study-images">
                  <?php if($image_1) {
                      echo wp_get_attachment_image( $image_1, $size );
                  } ?>
          </div>

    </article>
 			<?php endwhile; // end of the loop. ?>
 	</div><!-- .main-content -->

</div><!-- #primary -->

<?php get_footer(); ?>
