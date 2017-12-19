<?php
/**
 * Template Name:blog
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
			$wp_query->query('post_type=post' . '&paged=' . $paged . '&posts_per_page=5');
			?>
			<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

				<div class="page-blog-item-bos">
					<a href="<?php the_permalink() ?>">
						<div class="wig-image">
							<?php
							the_post_thumbnail('full');
							?>
						</div>
						<div class="page-blog-content">
							<p><?php the_time('Y年m月d日'); ?></p>
							<h3><?php the_title(); ?></h3>
						</div>
					</div>
				</a>
			<? endwhile ?>


		</div>
	</main>
</div>

<?php get_footer(); ?>