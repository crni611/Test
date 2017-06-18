<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package flathop
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'flathop' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" title="<?php bloginfo( 'name' ); ?>">
			</a> 
		</div><!-- .site-branding -->
		<a class="hamburger">
            <span class="bars top"></span>
            <span class="bars middle"></span>
            <span class="bars bottom"></span>
        </a>
		<div class="header-right">
			<div class="holder phone">
				<div class="ico"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_phone.png"></div>
				<ul>
					<li><?php echo get_field('header_phone_title','option'); ?></li>
					<li><a href="tel:<?php echo get_field('header_phone_number','option'); ?>"><?php echo get_field('header_phone_number','option'); ?></a></li>
					<li><span><?php echo get_field('header_phone_time','option'); ?></span></li>
				</ul>
			</div>
			<div class="holder email">
				<div class="ico"><img src="<?php echo get_template_directory_uri(); ?>/images/ico_mail.png"></div>
				<ul>
					<li><?php echo get_field('header_email_title','option'); ?></li>
					<li><a href="mailto:<?php echo get_field('header_email_adress','option'); ?>"><?php echo get_field('header_email_adress','option'); ?></a></li>
				</ul>
			</div>
			<div class="header-logos nonmobile-logos">
				<ul>
					<li><h3><?php echo get_field('partner_title', 'option'); ?></h3></li>
					<li><a href="<?php echo get_field('partner_home', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_homegate.png" ></a></li>
					<li><a href="<?php echo get_field('partner_scout24', 'option'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_scout.png" ></a></li>
				</ul>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
