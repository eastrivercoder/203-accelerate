<?php
/**
 * The template for displaying a single service.
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div id="primary" class="site-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
								$service = get_field('service');
								$description = get_field('description');
								$icon = get_field('icon');
								$size = "full";
																?>
		<div class="about-services">
				 <div class="service-offering">
				      <h2><?php echo $service;?></h2>
				      <p><?php echo $description; ?></p>
							<?php the_content(); ?>
					</div>

					<div class="icon">
									<?php if($icon) {
											echo wp_get_attachment_image( $icon, $size );
										} ?>
					</div>
				</div>
			<?php endwhile; // end of the loop. ?>

		</div><!-- .main-content -->
	</div><!--primary -->
<?php get_footer(); ?>
