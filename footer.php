<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package flathop
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="container clearfix">
				<div class="col-md-5 contact">
					<h3><?php echo get_field('footer_contact_title','option'); ?></h3>
					<ul>
						<li><span class="icon-location"></span><span><?php echo get_field('footer_contact_address','option'); ?></span></li>
						<li><span class="icon-phone"></span><span><a href="tel:<?php echo get_field('footer_contact_tel','option'); ?>"><?php echo get_field('footer_contact_tel','option'); ?></a></span></li>
						<li><span class="icon-mail-envelope-closed"></span><span><a href="mailto:<?php echo get_field('footer_contact_email','option'); ?>"><?php echo get_field('footer_contact_email','option'); ?></a></span></li>
					</ul>
				</div>
				<div class="col-md-3 info">
					<h3><?php echo get_field('footer_info_title','option'); ?></h3>
					<ul>
						<?php if( have_rows('footer_info_links','option') ): ?>
			                <?php while ( have_rows('footer_info_links','option') ) : the_row(); ?>
									<li><a href="<?php echo get_sub_field('link'); ?>" target="_blank"><?php echo get_sub_field('title'); ?></a></li>
			                <?php endwhile; ?>
			            <?php endif; ?>
					</ul>
				</div>
				<div class="col-md-4">
					<div class="textwidget"><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FFlathopch-217319292061863&amp;tabs=timeline&amp;width=340&amp;height=350&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId=932712813523754" width="340" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true"></iframe></div>
				</div>
			</div>
			<div class="footer-info">
				<p><?php echo get_field('footer_info_text','option'); ?> <!-- / DEVELOPMENT BY <a href="https://rs.linkedin.com/in/petar-milakovic-95b25256" target="blank"> UNITEDGUERILLA</a> --></p>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
