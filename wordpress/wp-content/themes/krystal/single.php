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
		<?php
		$image_id = get_post_thumbnail_id();
		$image_url = wp_get_attachment_image_src($image_id, true);
		?>
		<div class="page-title" style="background-image:url(<?php echo $image_url[0]; ?>);background-repeat:no-repeat;background-position: 50% 50%;background-size: cover;">

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


		<div class="content-inner">
			<div id="blog-section">
				<div class="container">
					<div class="row">
						<div class="single-blog-wrapper">
							<p><?php the_time('Y年m月d日'); ?></p>
							<?  
							$txt = get_field('blog-todaysgoal');
							if($txt){ ?>
							<h3>Today's GOAL</h3>
							<p><? echo $txt; ?></p>
							<? } ?>
							<?  
							$area = get_field('blog-todaystasks');
							if($area){ ?>
							<h3>Today's Tasks</h3>
							<p><? echo $area; ?></p>
							<? } ?>
							<?  
							$area = get_field('blog-good');
							if($area){ ?>
							<h3>Good</h3>
							<p><? echo $area; ?></p>
							<? } ?>
							<?  
							$area = get_field('blog-bad');
							if($area){ ?>
							<h3>Bad</h3>
							<p><? echo $area; ?></p>
							<? } ?>
							<?  
							$area = get_field('blog-learnings');
							if($area){ ?>
							<h3>Learnings</h3>
							<p><? echo $area; ?></p>
							<? } ?>
							<?  
							$area = get_field('blog-next');
							if($area){ ?>
							<h3>Next</h3>
							<p><? echo $area; ?></p>
							<? } ?>

							<?  
							$txt = get_field('blog-tomorrowsgoal');
							if($txt){ ?>
							<h3>Tomorrows GOAL</h3>
							<p><? echo $txt; ?></p>
							<? } ?>

							<?  
							$area = get_field('blog-free');
							if($area){ ?>
							<h3>Free</h3>
							<p><? echo $area; ?></p>
							<? } ?>
						</div>
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
.section-title h1 {
	text-shadow: 3px 3px 3px black;
}
</style>