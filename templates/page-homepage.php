<?php
/**
 * Template name: Homepage
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package flathop
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<!-- Banner -->
		<div class="banner parallax wow fadeIn" data-wow-duration="1.5s" style="background: url(<?php echo get_field('banner_bgr'); ?>)">
			<div class="container">
				<div class="txt-holder wow zoomIn" data-wow-duration="2s">
					<h1><?php echo get_field('banner_title'); ?></h1>
					<p><?php echo get_field('banner_subtitle'); ?></p>
					<a href="<?php echo get_field('banner_button_black_link'); ?>" target="_blank" class="btn-main dark"><?php echo get_field('banner_button_black_name'); ?></a>
					<a href="<?php echo get_field('banner_button_red_link'); ?>" class="btn-main"><?php echo get_field('banner_button_red_name'); ?></a>
				</div>
			</div>
		</div>
		<!-- End of Banner -->
		<div class="header-logos mobile-logos">
			<ul>
				<li><h3>test</h3></li>
				<li><a href="<?php echo get_field('partner_home', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_homegate.png" ></a></li>
				<li><a href="<?php echo get_field('partner_scout24', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_scout.png" ></a></li>
			</ul>
		</div>
		<!-- Cost -->
		<div class="cost">
			<div class="container clearfix">
				<div class="box-holder clearfix">
					<div class="box">
						<div class="box-wrapper">
							<h3><?php echo get_field('form_left_title'); ?></h3>
							<div class="input-holder">
								<label for="rooms"><?php echo get_field('label_rooms'); ?></label>
								<output name="roomsOutput" id="roomsOutputId">1</output>
								<!-- <input type="roomsId" name="rooms" id="roomsId" step="0.5" value="0.5" min="1" max="8" oninput="roomsOutputId.value = roomsId.value"> -->
								<input id="range" type="range" min="1" max="10" step="0.5" value="1" >
							      <!-- <span id="cenaBrt">500</span>
							      <span id="brojSoba">1</span> -->
							</div>
							<div class="input-holder">
		   						<label for="km"><?php echo get_field('label_km'); ?></label>
		   						<output name="kmOutput" id="kmOutputId">0</output>
								<input type="range" name="km" id="kmId" value="0" min="10" max="100" oninput="kmOutputId.value = kmId.value">
							</div>
							<div class="price-holder clearfix">
								<label><?php echo get_field('form_left_price_label'); ?></label>
								<p id="price-big" class="price big">CHF <span id="priceBrt"></span>.-</p>

							</div>
						</div>
						<a href="<?php echo get_field('form_left_button_link'); ?>" class="btn-main"><?php echo get_field('form_left_button_name'); ?></a>
					</div>
					<div class="box">
						<div class="box-wrapper">
							<h3><?php echo get_field('form_right_title'); ?></h3>
							<div class="input-holder">
								<label><?php echo get_field('label_garantie'); ?></label>
								<div class="clearfix">
									<input id="percent" name="percent" type="number"><span class="ico">CHF</span>
									<span class="percent-hidden"><?php echo get_field('percent_calc'); ?></span>
								</div>
							</div>
							<div class="input-holder">
		   						<label><?php echo get_field('label_date'); ?></label>
		   						<div class="clearfix">
									<input type="date" data-date-inline-picker="true" /><span class="ico"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_calendar.png"></span>
								</div>
							</div>
							<div class="price-holder clearfix">
								<div class="clearfix">
									<label><?php echo get_field('label_special_price'); ?></label><p class="price">CHF <span><?php echo get_field('special_price'); ?>.-</span></p>
								</div>
								<div class="clearfix">
									<label><?php echo get_field('label_year'); ?></label><p class="price">CHF <span id="price">-.-</span></p>
								</div>
							</div>
						</div>
						<a href="<?php echo get_field('form_right_button_link'); ?>" class="btn-main"><?php echo get_field('form_right_button_name'); ?></a>
					</div>
				</div>
			</div>
		</div>
		<!-- End of Cost -->
		<!-- Quick -->
		<div class="quick">
			<div class="container-wide">
				<h2 class="line wow fadeInUp"><?php echo get_field('city_title') ?></h2>
				<div class="quick-holder clearfix">
					<?php 
						$delay = 0;
					 ?>
					<?php if( have_rows('cities') ): ?>
		                <?php while ( have_rows('cities') ) : the_row(); ?>
							<a href="<?php echo get_sub_field('link'); ?>" class="box wow zoomIn" data-wow-delay="<?php echo $delay ?>s" data-wow offset="100" data-wow-duration="1.5s" target="_blank">
								<img src="<?php echo get_sub_field('image')['sizes']['city']; ?>">
								<p><?php echo get_sub_field('name'); ?></p>
							</a>
							<?php 
								$delay = $delay + 0.2;
							 ?>
		                <?php endwhile; ?>
		            <?php endif; ?>
				</div>
			</div>
		</div>
		<!-- End of Quick -->
		<!-- Benefit -->
		<div class="benefit">
			<div class="container benefit-holder">
				<?php if( have_rows('quick_repeater') ): ?>
	                <?php while ( have_rows('quick_repeater') ) : the_row(); ?>
	                	<div class="box col-md-4 wow flipInY" data-wow offset="150" data-wow-duration="1.5s">
							<img src="<?php echo get_sub_field('icon'); ?>">
							<h3 class="line"><?php echo get_sub_field('title'); ?></h3>
							<p><?php echo get_sub_field('text'); ?></p>
						</div>
	                <?php endwhile; ?>
	            <?php endif; ?>
			</div>
		</div>
		<!-- End of Benefit -->
		<!-- Rent -->
		<div class="rent clearfix">
			<div class="col-md-6 img-holder wow fadeInLeft" data-wow offset="100" data-wow-duration="1.5s" style="background: url('<?php echo get_field('benefit_bgr'); ?>"></div>
			<div class="col-md-6 txt-holder wow fadeInRight" data-wow offset="150" data-wow-duration="1.5s">
				<div class="txt-box">
					<h2 class="line left"><?php echo get_field('benefit_title'); ?></h2>
					<p class="subtitle"><?php echo get_field('benefit_subtitle'); ?></p>
					<p class="paragraph-holder"><?php echo get_field('benefit_text'); ?></p>
				</div>
			</div>
		</div>
		<!-- End of Rent -->
		<!-- Count -->
		<div class="counter">
			<div class="counter-holder container">
				<?php if( have_rows('counters') ): ?>
	                <?php while ( have_rows('counters') ) : the_row(); ?>
	                	<div class="box col-md-4">
							<div class="box">
								<img src="<?php echo get_sub_field('icon'); ?>">
								<span class="count"><?php echo get_sub_field('number'); ?></span>
								<h3><?php echo get_sub_field('title'); ?></h3>
							</div>
						</div>
	                <?php endwhile; ?>
	            <?php endif; ?>
			</div>
		</div>
		<!-- End of Count -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
