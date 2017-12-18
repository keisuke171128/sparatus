<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package krystal
 */

get_header();

?>





<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="page-title-other" style="background-image:url(<? the_post_thumbnail_url( 'medium' ); ?>);background-size: cover;background-position: center center;background-repeat: no-repeat;">
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
	</div>
	<div class="content-inner">
		<div id="blog-section">
			<div class="container">
				<div class="row">
					<div class="single-blog-wrapper">

						<?php
						$temp = $wp_query;
						$wp_query = null;
						$wp_query = new WP_Query();
						$wp_query->query('post_type=post_other' . '&paged=' . $paged . '&posts_per_page=5');
						?>
						<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
							<div class="single-fonance-content">
								<p><?php the_time('Y年m月d日'); ?></p>
								<p><?php the_title(); ?></p>
								<p><?php the_content(); ?></p>
							</div>
						<? endwhile ?>
					</div>
				</div>
			</div>
		</div>
	</main>
</div>

<?php
get_footer();
?>

<style type="text/css">
.blog-content p {
	font-size: 17px;
	line-height: 28px;	
}
.heading {
	display: none;
}
article {
	padding: 0 15px;
}
.single-blog-wrapper h4 {
	margin: 40px 0 0 0;
	padding: 5px 0 10px 0;
}
.single-blog-wrapper h5 {
	padding: 0;
	margin: 0;
}
</style>