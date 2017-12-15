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
							<h5 class="mp0">固定費</h5>
							<h5 class="mp0">家賃</h5>
							<?  
							$num = get_field('cost-rent');
							if($num){ ?><p class="mp0">¥<? echo $num; ?></p>
							<? } ?>
							<h5 class="mp0">光熱費・通信費</h5>
							<?  
							$num = get_field('cost-utility');
							if($num){ ?><p class="mp0">¥<? echo $num; ?></p>
							<? } ?>
							<h5 class="mp0">変動費</h5>
							<h5 class="mp0">自己投資</h5>
							<?  
							$num = get_field('cost-invest');
							if($num){ ?><p class="mp0">¥<? echo $num; ?></p>
							<? } ?>
							<h5 class="mp0">食費</h5>
							<?  
							$num = get_field('cost-food');
							if($num){ ?><p class="mp0">¥<? echo $num; ?></p>
							<? } ?>
							<h5 class="mp0">健康</h5>
							<?  
							$num = get_field('cost-health');
							if($num){ ?><p class="mp0">¥<? echo $num; ?></p>
							<? } ?>
							<h5 class="mp0">遊び</h5>
							<?  
							$num = get_field('cost-play');
							if($num){ ?><p class="mp0">¥<? echo $num; ?></p>
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