<?php
/**
 * Template Name:Wig
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="page-title-other" style="background-image:url(http://sparatus.wp.xdomain.jp/wp-content/uploads/2017/12/business-2089533_1280.jpg);background-size: cover;background-position: center center;background-repeat: no-repeat;">
			<div class="content-section img-overlay">
				<div class="container">
					<div class="row text-center">
						<div class="col-md-12">
							<div class="section-title page-title"> 
								<h1 class="main-title"><?php the_title(); ?></h1>
								<div class="bread-crumb" typeof="BreadcrumbList" vocab="http://schema.org/">
								</div>                                                           
							</div>						
						</div>
					</div>
				</div>	
			</div>
		</div>
		<div class="page-finance-wrapper">
			<?php
			$temp = $wp_query;
			$wp_query = null;
			$wp_query = new WP_Query();
			$wp_query->query('post_type=post_wig' . '&paged=' . $paged . '&posts_per_page=5');
			?>
			<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
				<div class="page-fonance-content">
					<div class="wig-image">
						<?php
						the_post_thumbnail('full');
						?>
					</div>
					
					<p><?php the_title(); ?></p>
					
					<!-- 計算式 -->
					<?
					$wig1 = get_field('wig_theme');
					$wig2 = get_field('wig_lategoal');
					$wig3 = get_field('wig_lategoal_goal');
					$wig4 = get_field('wig_lategoal_real');

					$wig5 = get_field('wig_earlygoal');
					$wig6 = get_field('wig_earlygoal_goal');
					$wig7 = get_field('wig_earlygoal_real');

					$wig8 = get_field('wig_earlygoal2');
					$wig9 = get_field('wig_earlygoal_goal2');
					$wig10 = get_field('wig_earlygoal_real2');

					$wig11 = get_field('wig_earlygoal3');
					$wig12 = get_field('wig_earlygoal_goal3');
					$wig13 = get_field('wig_earlygoal_real3');
					
					$wig14 = get_field('wig_memo');

					$wig1 = get_field('wig_theme');
					$wig2 = get_field('wig_lategoal');
					$wig3 = get_field('wig_lategoal_goal');
					$wig4 = get_field('wig_lategoal_real');

					$wig5 = get_field('wig_earlygoal');
					$wig6 = get_field('wig_earlygoal_goal');
					$wig7 = get_field('wig_earlygoal_real');

					$wig8 = get_field('wig_earlygoal2');
					$wig9 = get_field('wig_earlygoal_goal2');
					$wig10 = get_field('wig_earlygoal_real2');

					$wig11 = get_field('wig_earlygoal3');
					$wig12 = get_field('wig_earlygoal_goal3');
					$wig13 = get_field('wig_earlygoal_real3');

					$wig14 = get_field('wig_memo');

					if (($wig4/$wig3) == 0) {
						$wiglpc = 0;
					} else {
						$wiglpc =  ($wig4/$wig3)*100;
					}

					if (($wig7/$wig6) == 0) {
						$wigepc = 0;
					} else {
						$wigepc =  ($wig7/$wig6)*100;
					}
					?>
					<!-- 計算式END -->
					
					<!-- グラフ -->
					<div class="wig-title-box">
						<h4 class="mp0"><? echo $wig1; ?></h4>
					</div>

					<div class="wig-graph-wrapper">
						<p class="mp0">遅行指標</p>
						<div class="wig-graph-late-box wig-graph-max">
							<div class="wig-graph-item">
								<div class="wig-graph-late wig-graoh-p" style="width: <? echo round($wiglpc); ?>%;"><span><? echo round($wiglpc); ?>%</span>
								</div>	
							</div>
						</div>
						<p class="mp0">先行指標（1）</p>
						<div class="wig-graph-early-box wig-graph-max">
							<div class="wig-graph-item">
								<div class="wig-graph-early wig-graoh-p" style="width: <? echo round($wigepc); ?>%;"><span><? echo round($wigepc); ?>%</span>
								</div>	
							</div>
						</div>
						
						<?php if (empty($wig8)) {
							
						} else {
							$wigepc2 = ($wig10/$wig9)*100;
							?>
							<p class="mp0">先行指標（2）</p>
							<div class="wig-graph-early-box wig-graph-max">
								<div class="wig-graph-item">
									<div class="wig-graph-early wig-graoh-p" style="width: <? echo round($wigepc2); ?>%;"><span><? echo round($wigepc2); ?>%</span>
									</div>	
								</div>
							</div>
							<?php } ;?>

							<?php if (empty($wig11)) {
								
							} else {
								$wigepc =  ($wig12/$wig13)*100;
								?>
								<p class="mp0">先行指標（3）</p>
								<div class="wig-graph-early-box wig-graph-max">
									<div class="wig-graph-item">
										<div class="wig-graph-early wig-graoh-p" style="width: <? echo round($wigepc3); ?>%;"><span><? echo round($wigepc3); ?>%</span>
										</div>	
									</div>
								</div>
								<?php } ;?>
								<!-- グラフEND -->


								<!-- 詳細START -->
								<div class="wig-content-text">					

									<div class="wig-content-item-late">
										<h5 class="mp0">遅行指標<? echo $wig2; ?></h5>

										<p class="mp0">遅行指標-目標：<? echo $wig3; ?></p>

										<p class="mp0">遅行指標-実績：<? echo $wig4; ?></p>

										<p class="mp0">遅行指標-実績：<? echo round($wiglpc); ?>%</p>
									</div>

									<div class="wig-content-item-early1">
										<h5 class="mp0">先行指標（1）<? echo $wig5; ?></h5>

										<p class="mp0">先行指標-実績：<? echo $wig6; ?></p>

										<p class="mp0">先行指標-実績：<? echo $wig7; ?></p>

										<p class="mp0">先行指標-達成度：<? echo round($wigepc); ?>%</p>
									</div>

									<?php if (empty($wig8)) {
										
									} else {
										$wigepc2 = ($wig10/$wig9)*100;
										?>
										<div class="wig-content-item-early2">
											<h5 class="mp0">先行指標（2）<? echo $wig8; ?></h5>

											<p class="mp0">先行指標-実績：<? echo $wig9; ?></p>

											<p class="mp0">先行指標-実績：<? echo $wig10; ?></p>

											<p class="mp0">先行指標-達成度：<? echo round($wigepc2); ?>%</p>
										</div>
										<?php 
									} ?>

									<?php if (empty($wig11)) {
										
									} else {
										$wigepc3 = ($wig13/$wig12)*100;
										?>
										<div class="wig-content-item-early3">
											<h5 class="mp0">先行指標（3）<? echo $wig11; ?></h5>

											<p class="mp0">先行指標-実績：<? echo $wig12; ?></p>

											<p class="mp0">先行指標-実績：<? echo $wig13; ?></p>

											<p class="mp0">先行指標-達成度：<? echo round($wigepc3); ?>%</p>
										</div>
										<?php 
									}
									?>
									<!-- 詳細END -->

								</div>
							</div>
						</div>
					<? endwhile ?>
				</div>
			</main>
		</div>

		<?php
		get_footer(); ?>
		<style type="text/css">
		.wig-graph-max {
			padding: 0;
		</style>}
