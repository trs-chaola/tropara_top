<?php
/**
 *Template Name: Top Page
 */

get_header(); ?>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/top.css" type="text/css">

	<div id="primary" class="content-area">
		<div class="nav">
			<div class="navbar">
				<ul id="navmenu">
					<li><a href="#"><image src="<?php bloginfo('template_url'); ?>/images/tropara_img/headers/about_menu.png"></image></a></li>
					<li><a href="#"><image src="<?php bloginfo('template_url'); ?>/images/tropara_img/headers/facility_menu.png"></image></a></li>
					<li><a href="#"><image src="<?php bloginfo('template_url'); ?>/images/tropara_img/headers/diving_menu.png"></image></a></li>
					<li><a href="#"><image src="<?php bloginfo('template_url'); ?>/images/tropara_img/headers/notice_menu.png"></image></a></li>
					<li><a href="#"><image src="<?php bloginfo('template_url'); ?>/images/tropara_img/headers/guide_menu.png"></image></a></li>
					<li><a href="#"><image src="<?php bloginfo('template_url'); ?>/images/tropara_img/headers/reservation_menu.png"></image></a></li>
				</ul>
			</div>
		</div>
		
		<div id="m_visual">
			<image id="mvisual" src="<?php bloginfo('template_url'); ?>/images/tropara_img/home/mainVisual_img.png"></image>
		</div>

		<div class="lower_content">
				<div class="sidebar">
					<div class="side_bt">
						<ul id="bt_menu">
							<li><a href="#"><image src="<?php bloginfo('template_url'); ?>/images/tropara_img/home/info_bt.png"></image></a></li>
							<li><a href="#"><image src="<?php bloginfo('template_url'); ?>/images/tropara_img/home/airdeals_bt.png"></image></a></li>
							<li><a href="#"><image src="<?php bloginfo('template_url'); ?>/images/tropara_img/home/gallery_bt.png"></image></a></li>
							<li><a href="#"><image src="<?php bloginfo('template_url'); ?>/images/tropara_img/home/qa_bt.png"></image></a></li>
							<li><a href="#"><image src="<?php bloginfo('template_url'); ?>/images/tropara_img/home/link_bt.png"></image></a></li>					
						</ul>
					</div>
				</div>
				<div class="content">
					<div class="first">
						<div id="first_head">
							<image class="content_1" src="<?php bloginfo('template_url'); ?>/images/tropara_img/home/notice_title.png"></image>
							<a href="#"><image class="content_1_bt" src="<?php bloginfo('template_url'); ?>/images/tropara_img/home/title_bt_01.png"></image></a>
						</div>
						<div class="first_space">
							<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>
					</div>
					<div class="second">
						<div id="second_head">
							<image class="content_2" src="<?php bloginfo('template_url'); ?>/images/tropara_img/home/divelog_title.png"></image>
							<a href="#"><image class="content_2_bt" src="<?php bloginfo('template_url'); ?>/images/tropara_img/home/title_bt_01.png"></image></a>
						</div>
						<div class="second_space">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>
					</div>
					<div class="third">
						<div id="third_head">
							<image class="content_2" src="<?php bloginfo('template_url'); ?>/images/tropara_img/home/about_title.png"></image>
							<a href="#"><image class="content_2_bt" src="<?php bloginfo('template_url'); ?>/images/tropara_img/home/title_bt_02.png"></image></a>
						</div>
						<div class="third_space">
						<image class="img3" src="<?php bloginfo('template_url'); ?>/images/tropara_img/home/youtube_vid.png"></image>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. 
							</p>
						</div>
					</div>
				</div>

		
		</div>
		<div id="content" class="site-content" role="main">
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>