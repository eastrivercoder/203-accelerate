<?php
/**
* Template Name: About Page
*
* The template for displaying services offered.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div id="primary" class="about-hero">
		<div class="main-content" role="main">
				<?php while ( have_posts() ) : the_post();?>
						<div class="about-hero-content">
								<?php the_content(); ?>
						</div>
				<?php endwhile; // end of the loop. ?>
		</div><!--hero section -->

</div><!--primary -->

		<section class="services-offered">
			<div class ="services-header">
					<h4>Our Services></h4>
					<p>We take pride in our clients and lorem ipsum them.<br>More things to say about that.</p>
			</div>

			<ul class ="specific-services">
				<?php query_posts('posts_per_page=4&post-type=services');?>

				<?php while ( have_posts() ) : the_post();
								$service = get_field('service');
								$description = get_field('description');
								$icon = get_field('icon');
								$size = "full";
								?>
 					<li class="service-offering">
							<div class="services-section">
							<h2><?php echo $service;?></h2>
							<p><?php echo $description; ?></p>
							</div>

							<figure class="icon">
									<?php if($icon) {
											echo wp_get_attachment_image( $icon, $size );
											} ?>
							</figure>
					</li>
				<?php endwhile; // end of the loop. ?>
				<?php wp_reset_query(); ?>
			</div><!-- specific services -->

			<div class="about-contact">
				<h3> Interested in working with us?</h3>
				<a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
			</div>

		</section><!--services section -->


	</div><!-- #primary -->

<?php get_footer(); ?>
