<?php
/**
 * Template Name: Finance
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
		<?php krystal_get_page_title(false,false,false,false); ?>
		<div class="page-finance-wrapper">
			<?php
			$temp = $wp_query;
			$wp_query = null;
			$wp_query = new WP_Query();
			$wp_query->query('post_type=post_finance' . '&paged=' . $paged . '&posts_per_page=3');
			?>
			<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
				<div class="index-wig-content">
					<div class="wig-content-item year-box">
						<?php
						$args = array(
							'post_type' => 'post_wig',
							'taxonomy' => '',
							'term' => '',
							'posts_per_page' => 5,
							'numberposts' => '1',
						);
						$wig_posts = get_posts($args);
						foreach ( $wig_posts as $post ) {
							setup_postdata($post); ?>
							<?
							$wig1 = get_field('wig_theme');
							$wig2 = get_field('wig_lategoal');
							$wig3 = get_field('wig_lategoal_goal');
							$wig4 = get_field('wig_lategoal_real');
							$wig5 = get_field('wig_earlygoal');
							$wig6 = get_field('wig_earlygoal_goal');
							$wig7 = get_field('wig_earlygoal_real');
							$wig8 = get_field('wig_memo');
							$wiglpc = $wig4/$wig3*100;
							$wigepc = $wig7/$wig6*100;
							;?>
							<div class="page-wig-year-box">
								<?php $terms = get_the_terms($post->ID, 'wig_cat'); foreach($terms as $term){ $term_name = $term->name; echo $term_name; break; }; ?>
								<!-- <h5>Yearly wig</h5> -->
								<p><span class="wig-title-span"><?php the_title(); ?></span></p>
								<p class="index-wig-theme"><? echo $wig1; ?></p>
								<div class="index-wig-graph">
									<p>遅行指標</p>
									<p><? echo $wig2; ?></p>
									<div class="wig-graph-late-box wig-graph-max">
										<div class="wig-graph-item">
											<div class="wig-graph-late wig-graoh-p" style="width: <? echo round($wiglpc); ?>%;"><span><? echo round($wiglpc); ?>%</span>
											</div>	
										</div>
									</div>
									<p>先行指標</p>
									<p><? echo $wig5; ?></p>
									<div class="wig-graph-early-box wig-graph-max">
										<div class="wig-graph-item">
											<div class="wig-graph-early wig-graoh-p" style="width: <? echo round($wigepc); ?>%;"><span><? echo round($wigepc); ?>%</span>
											</div>	
										</div>
									</div>
								</div>
							</div>
							<?php
						}?>
					</div>

				<? endwhile ?>


			</div>
		</main>
	</div>

	<?php

	get_footer();