<?php
/**
 * Template name: Form
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package flathop
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main form-page" role="main">
		<!-- Rental -->
		<div class="rental">
			<div class="container">
				<h3><?php echo get_field('rental_title'); ?></h3>
				<p class="subtitle"><?php echo get_field('rental_subtitle'); ?></p>
				<div class="rental-holder">
					<?php 
						$delay = 0;
					 ?>
					<?php if( have_rows('box') ): ?>
	                <?php while ( have_rows('box') ) : the_row(); ?>
	                	<div class="box wow puffIn" data-wow-delay="<?php echo $delay ?>s">
							<span class="icon-check"></span>
							<p><?php echo get_sub_field('text'); ?></p>
						</div>
						<?php 
							$delay = $delay + 0.2;
						 ?>
		                <?php endwhile; ?>
		            <?php endif; ?>
				</div>
			</div>
		</div>
		<!-- End of Rental -->
		<!-- Advretise -->
		<div class="advretise">
			<div class="container">
				<h3><?php echo get_field('rental_title'); ?></h3>
				<p class="subtitle"><?php echo get_field('rental_subtitle'); ?></p>
				<div class="adverise-holder">
					<?php 
						$delay = 0;
					 ?>
					<?php if( have_rows('advertise_logos') ): ?>
	                <?php while ( have_rows('advertise_logos') ) : the_row(); ?>
	                	<img class="wow puffIn" data-wow-delay="<?php echo $delay ?>s" src="<?php echo get_sub_field('logo'); ?>">
						<?php 
							$delay = $delay + 0.2;
						 ?>
		                <?php endwhile; ?>
		            <?php endif; ?>
				</div>
			</div>
		</div>
		<!-- End of Advretise -->
		<!-- Form -->
		<div class="form">
			<div class="container clearfix">
				<h3><?php echo get_field('form_title'); ?></h3>
				<div class="form-holder clearfix">
					<?php echo do_shortcode('[contact-form-7 id="12" title="Form"]'); ?>
				</div>
			</div>
		</div>
		<!-- End of Form -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
