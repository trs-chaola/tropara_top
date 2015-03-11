<?php
/**
 *Template Name: Category Page
 */

get_header(); ?>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/top.css" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/category_page.css" type="text/css">
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
		</div>

		<div class="lower_content">
				<div class="c_sidebar">
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
				<div class="c_content">
					<div class="list">
						<div id="list_head">
							<image class="content_1" src="<?php bloginfo('template_url'); ?>/images/tropara_img/home/news.png"></image>
						</div>
						<div id="cat_list">
						<?php
							$args = array(
								'category_name'      =>divenotice,
								'year'     => $current_year,
								'monthnum' => $current_month,
								'order'    => 'DESC',
								'limit'    => 4,
							);
							query_posts( $args );
						
							$postCount=0;
						
							while ( have_posts() ) : the_post();
								$postCount=$postCount+1;
							endwhile;
							
							$finalCount=$postCount;
							$a=1;
							
							
							while ( have_posts() ) : the_post();
								$content = get_the_content('Read more');
								if($a!=$finalCount){
									echo '<p>';
									the_time('Y/m/d');
									echo '<u id="links">';
									the_title();
									echo '</u>';
									echo '</p>';
									echo '<hr id="lane">';
									echo '<br>';									
									echo '<p id="post_view">';
									print $content;
									echo '</p>';
									echo '<hr id="line">';
								}else{
									echo '<p>';
									the_time('Y/m/d');
									echo '<u id="links">';
									the_title();
									echo '</u>';
									echo '</p>';
									echo '<hr id="lane">';
									echo '<br>';
									echo '<p id="post_view">';
									print $content;
									echo '</p>';
									echo '<hr id="line">';
								}
								$a++;
							endwhile;
							
							// Reset Query
							wp_reset_query();
						?>	
						</div>
					</div>
				</div>


			</div>
		
		</div>
		<div id="content" class="site-content" role="main">
		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>