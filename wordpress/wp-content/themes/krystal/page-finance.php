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
			$wp_query->query('post_type=post_finance' . '&paged=' . $paged . '&posts_per_page=5');
			?>
			<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
				<div class="page-fonance-content">
					<h5 class="finance-date mp0"><?php the_title(); ?></h5>
					<h5 class="mp0">Profits</h5>
					<?  
					$num = get_field('finance-profits');
					if($num){ ?><p class="mp0">¥<? echo $num; ?></p>
					<? } ?>
					<h5 class="mp0">Loss</h5>
					<?  
					$num = get_field('finance-loss');
					if($num){ ?><p class="mp0">¥<? echo $num; ?></p>
					<? } ?>
					<h5 class="mp0">Save</h5>
					<?  
					$num = get_field('finance-save');
					if($num){ ?><p class="mp0">¥<? echo $num; ?></p>
					<? } ?>
					<h5 class="mp0">Account balance</h5>
					<?  
					$num = get_field('finance-account');
					if($num){ ?><p class="mp0">¥<? echo $num; ?></p>
					<? } ?>
				</div>

			<? endwhile ?>


		</div>
	</main>
</div>

<?php

get_footer();