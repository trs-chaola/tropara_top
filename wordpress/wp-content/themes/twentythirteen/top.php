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
			<div id="slider">
				<?php 
   				 	echo do_shortcode("[metaslider id=38]"); 
				?>
			</div>
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
							if($a>4){
								break;
							}else{
								if($a!=4){
									echo '<p>';
									the_time('Y/m/d');
									echo '<u id="links">';
									the_title();
									echo '</u>';
									echo '</p>';
									echo '<hr id="line">';
								}else{
									echo '<p>';
									the_time('Y/m/d');
									echo '<u id="links">';
									the_title();
									echo '</u>';
									echo '</p>';
								}
								$a++;
							}
						endwhile;

						// Reset Query
						wp_reset_query();
						?>
						

						</div>
					</div>
					<div class="second">
						<div id="second_head">
							<image class="content_2" src="<?php bloginfo('template_url'); ?>/images/tropara_img/home/divelog_title.png"></image>
							<a href="#"><image class="content_2_bt" src="<?php bloginfo('template_url'); ?>/images/tropara_img/home/title_bt_01.png"></image></a>
						</div>
						<div class="second_space">
						<?php
						$args = array(
								'category_name'      => oceaninfo,
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
						
						$finalCount1=$postCount;
						$b=1;
						
						
						while ( have_posts() ) : the_post();
							if($b>4){
								break;
							}else{
								if($b!=4){
									echo '<p>';
									the_time('Y/m/d');
									echo '<u id="links">';
									the_title();
									echo '</u>';
									echo '</p>';
									echo '<hr id="line">';
								}else{
									echo '<p>';
									the_time('Y/m/d');
									echo '<u id="links">';
									the_title();
									echo '</u>';
									echo '</p>';
									asdfasdfs;
								}
								$b++;
							}
						endwhile;
						

						// Reset Query
						wp_reset_query();
						?>
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
							フィリピン セブ島 リロアンにある	<br>
							ダイバーズ プ
							チリゾート
							<br>
							【ビラ・トロピカル・パラダイス】 
							<br>
							<br>					
							アポ・バリカサグ・スミロンは勿論、モアルボ<br>アル・シキホール・カシリスリーフまでカバー
							<br>
							します。
							<br> 
							2013年9月現在ダイビングは14エリア・４２ポ
							<br>
							イント（リロアンだけでも７ポイント）
							<br> 
							リゾートの前は海。徒歩１０歩で波打ちぎわ、
							<br>
							そこからボートが出るので超楽チン・ダイビン
							<br>
							グ。
							<br>
							お泊りは個性豊
							かなトロパラコテージ（全室
							<br>
							オーシャンビュー・エアコン装備）がございま
							<br>
							す。
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