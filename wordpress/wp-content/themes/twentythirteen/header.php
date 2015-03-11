<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/header.css" type="text/css">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header" role="banner">
		<div id="head" style="background-image: url(<?php bloginfo('template_url'); ?>/images/tropara_img/headers/header_bg.png)">
			<div class="table">
				<p id="top_info">セブ リロアン ダイバーズ・リゾート VILLA TROPICAL PARADISE</p>
				<ul id="header-images">
					<li><image id="h_image" src="<?php bloginfo('template_url'); ?>/images/tropara_img/headers/tropara_logo.png"></image></li>
					<li><image id="h_image" src="<?php bloginfo('template_url'); ?>/images/tropara_img/headers/fish_icon.png"></image></li>
					<li><image id="h_image3" src="<?php bloginfo('template_url'); ?>/images/tropara_img/headers/header_bt.png"></image></li>		
				</ul>
			</div>
		</div>

		</header><!-- #masthead -->

		<div id="main" class="site-main">
