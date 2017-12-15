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
		<?php krystal_get_page_title(true,false,false,false); ?>
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
</style>