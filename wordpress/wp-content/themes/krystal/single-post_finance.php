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
		<div class="page-title-finance" style="background:#858a8a url(http://sparatus.wp.xdomain.jp/wp-content/uploads/2017/12/b5eff2e9921935becc8a66d0ef5a81b0.jpg);background-size: cover;background-position: center center;background-repeat: no-repeat;">
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
						<div class="single-finance-con">
							<!-- 計算式START -->
							<?  $numpro = get_field('finance_profits'); ?>
							<?  $num0 = get_field('finance_carryover'); ?>
							<?  $num1 = get_field('cost-rent'); ?>
							<?  $num2 = get_field('cost-utility'); ?>
							<?  $num3 = get_field('finance_cart'); ?>
							<?  $num4 = get_field('cost-invest'); ?>
							<?  $num5 = get_field('cost-food'); ?>
							<?  $num6 = get_field('cost-health'); ?>
							<?  $num7 = get_field('cost-play'); ?>
							<?  $num8 = get_field('finance_trans'); ?>
							<?  $num9 = get_field('finance_other'); ?>
							<?  $num10 = get_field('finance-credit'); ?>

							<!-- 合計 -->
							<? $numlosstotal = $num1+$num2+$num3+$num4+$num5+$num6+$num7+$num8+$num9; ?>
							<? $numtotalloss = $numlosstotal - $num10; ?>
							<? $numsave = $numpro - $numlosstotal; ?>

							<!-- パーセンテージ -->
							<? $num1p = ($num1/$numlosstotal)*100; ?>
							<? $num2p = ($num2/$numlosstotal)*100; ?>
							<? $num3p = ($num3/$numlosstotal)*100; ?>
							<? $num4p = ($num4/$numlosstotal)*100; ?>
							<? $num5p = ($num5/$numlosstotal)*100; ?>
							<? $num6p = ($num6/$numlosstotal)*100; ?>
							<? $num7p = ($num7/$numlosstotal)*100; ?>
							<? $num8p = ($num8/$numlosstotal)*100; ?>
							<? $num9p = ($num9/$numlosstotal)*100; ?>
							<? $num10p = ($num10/$numlosstotal)*100; ?>
							<? $totalfix = (($num1 + $num2)/$numlosstotal)*100; ?>
							<? $totalflexible = (($numlosstotal-($num1 + $num2))/$numlosstotal)*100; ?>
							<? $lossp = $numlosstotal/$numpro*100; ?>
							<? $savep = $numsave/$numpro*100; ?>
							<!-- 計算式END -->

							<div class="page-finance-graph-wrapper">
								<div class="index-graph-box">
									<p class="index-graph-profit" style="height: 200px;">
										¥<?  echo number_format($numpro); ?>
									</p>
									<div class="index-graph-right">
										<p class="index-graph-loss" style="height: <? echo round($lossp*2); ?>px;">
											¥<?  echo number_format($numlosstotal); ?>
										</p>
										<p class="index-graph-stock" style="height: <? echo round($savep*2); ?>px;">
											¥<?  echo number_format($numsave); ?>
										</p>
									</div>
								</div>
							</div>


							<div class="finance-content-wraper">
								<h4>Summary</h4>
								<div class="finance-content-box">
									<div class="finance-item-box">
										<h5>Save</h5>
										<p>
											¥<?  echo number_format($numsave); ?>
											<br>（<? echo round($savep); ?>
											%）
										</p>
									</div>
									<div class="finance-item-box">
										<h5>Profits</h5>
										<p>¥
											<?  echo number_format($numpro); ?>

										</p>
									</div>
									<div class="finance-item-box">
										<h5>Loss</h5>
										<p>¥
											<?  echo number_format($numlosstotal); ?>
											<br>（<? echo round($lossp); ?>
											%）
										</p>
									</div>
									<div class="finance-item-box">

										<h5>carryover</h5>
										<p>
											<?  
											if($num0){ ?>
											<p class="mp0">¥<? echo number_format($num0); ?>
											</p>
											<? } ?>

										</p>
									</div>
								</div>
							</div>

							<div class="finance-content-wraper">
								<h4>Fixed-Cost（<? echo round($totalfix);?>
								%）</h4>
								<div class="finance-content-box">
									<div class="finance-item-box">
										<h5>家賃</h5>
										<?  
										if($num1){ ?>
										<p class="mp0">¥<? echo number_format($num1); ?>
											<br>（<? echo round($num1p); ?>
										%）</p>
										<? } ?>

									</div>
									<div class="finance-item-box">
										<h5>光熱費・通信費</h5>
										<?  
										if($num2){ ?>
										<p class="mp0">¥<? echo number_format($num2); ?>
											<br>（<? echo round($num2p); ?>
										%）</p>
										<? } ?>

									</div>
								</div>
							</div>

							<div class="finance-content-wraper">
								<h4>Frexible-Cost（<? echo round($totalflexible);?>
								%）</h4>
								<div class="finance-content-box">
									<div class="finance-item-box">
										<h5>カード債務</h5>
										<?  
										if($num3){ ?>
										<p class="mp0">¥<? echo number_format($num3); ?>
											<br>（<? echo round($num3p); ?>
										%）</p>
										<? } ?>

									</div>
									<div class="finance-item-box">
										<h5>自己投資</h5>
										<?  
										if($num4){ ?>
										<p class="mp0">¥<? echo number_format($num4); ?>
											<br>（<? echo round($num4p); ?>
										%）</p>
										<? } ?>

									</div>
									<div class="finance-item-box">
										<h5>食費</h5>
										<?  
										if($num5){ ?>
										<p class="mp0">¥<? echo number_format($num5); ?>
											<br>（<? echo round($num5p); ?>
										%）</p>
										<? } ?>

									</div>
									<div class="finance-item-box">
										<h5>健康</h5>
										<?  
										if($num6){ ?>
										<p class="mp0">¥<? echo number_format($num6); ?>
											<br>（<? echo round($num6p); ?>
										%）</p>
										<? } ?>

									</div>
									<div class="finance-item-box">
										<h5>遊び</h5>
										<?  
										if($num7){ ?>
										<p class="mp0">¥<? echo number_format($num7); ?>
											<br>（<? echo round($num7p); ?>
										%）</p>
										<? } ?>

									</div>
									<div class="finance-item-box">
										<h5>交通費</h5>
										<?  
										if($num8){ ?>
										<p class="mp0">¥<? echo number_format($num8); ?>
											<br>（<? echo round($num8p); ?>
										%）</p>
										<? } ?>

									</div>
									<div class="finance-item-box">
										<h5>雑費</h5>
										<?  
										if($num9){ ?>
										<p class="mp0">¥<? echo number_format($num9); ?>
											<br>（<? echo round($num9p); ?>
										%）</p>
										<? } ?>

									</div>
								</div>
							</div>

							<div class="finance-content-wraper">
								<h4>クレジット来月持ち越し</h4>
								<div class="finance-content-box">
									<div class="finance-item-box">
										<h5>クレジット分</h5>
										<?  
										if($num10){ ?>
										<p class="mp0">¥<? echo number_format($num10); ?>
											<br>（<? echo round($num10p); ?>
										）%</p>
										<? } ?>

									</div>
								</div>


							</div>
						</div>
						<div class="page-finance-explain">
							<p>
								＊Profits：今月講座に入った収入金額<br>
								＊Loss：今月使用した金額（クレジット支払込）<br>
								＊Save：今月の収入ー支出（クレジット未込）<br>
								＊Carryover：今月初めの銀行口座残高<br>
								＊Account Balance：今月末の口座残高<br>
							</p>
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
.single-blog-wrapper h4 {
	margin: 40px 0 0 0;
	padding: 5px 0 10px 0;
}
.single-blog-wrapper h5 {
	padding: 0;
	margin: 0;
}
</style>