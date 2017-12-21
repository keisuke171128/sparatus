<?php
/**
 * Template Name: Oher
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
		<div class="page-title-other" style="background-image:url(http://sparatus.wp.xdomain.jp/wp-content/uploads/2017/12/doors-1690423_1280.jpg);background-size: cover;background-position: center center;background-repeat: no-repeat;">
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
		<div class="page-other-wrapper">
			<div class="page-other-con-w">
				<div class="page-other-con">
					<?php
					$temp = $wp_query;
					$wp_query = null;
					$wp_query = new WP_Query();
					$wp_query->query('post_type=post_other' . '&paged=' . $paged . '&posts_per_page=5');
					?>
					<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
						<div class="page-fonance-content">
							<a href="<?php the_permalink() ?>">
								<div class="other-image">
									<?php
									the_post_thumbnail('full');
									?>
								</div>
								<p><?php the_time('Y年m月d日'); ?></p>
								<p><?php the_title(); ?></p>
							</a>
						</div>
					<? endwhile ?>
				</div>
			</div>
		</div>
	</main>
</div>

<?php

get_footer();