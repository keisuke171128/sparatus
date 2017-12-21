<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package krystal
 */

get_header(); ?>

<div id="primary" class="content-area">
	<div id="main" class="site-main" role="main">	
		<div class="content-inner">
			<div id="blog-section">
				<div class="container">
					<div class="row">
						<div class="index-wig-wrapper index-content">
							<h2>WIG</h2>

							<!-- year -->
							<div class="index-wig-content">
								<div class="wig-content-item year-box">
									<?php
									$args = array(
										'post_type' => 'post_wig',
										'taxonomy' => 'wig_cat',
										'term' => 'wig-year',
										'posts_per_page' => 1,
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
										<div class="wig-year-box">
											<h5>Yearly wig</h5>
											<p><span class="wig-title-span"><?php the_title(); ?></span></p>
											<p class="index-wig-theme"><? echo $wig1; ?></p>
											<div class="index-wig-graph">
												<p><? echo $wig2; ?></p>
												<div class="wig-graph-late-box wig-graph-max">
													<div class="wig-graph-item">
														<div class="wig-graph-late wig-graoh-p" style="width: <? echo round($wiglpc); ?>%;"><span><? echo round($wiglpc); ?>%</span>
														</div>	
													</div>
												</div>
												<p><? echo $wig5; ?></p>
												<div class="wig-graph-early-box wig-graph-max">
													<div class="wig-graph-item">
														<div class="wig-graph-early wig-graoh-p graph-green" style="width: <? echo round($wigepc); ?>%;"><span><? echo round($wigepc); ?>%</span>
														</div>	
													</div>
												</div>
												<?php if (empty($wig8)) {

												} else {
													$wigepc2 = ($wig10/$wig9)*100;
													?>
													<p class="mp0"></p>
													<p><? echo $wig8; ?></p>
													<div class="wig-graph-early-box wig-graph-max">
														<div class="wig-graph-item">
															<div class="wig-graph-early wig-graoh-p graph-green" style="width: <? echo round($wigepc2); ?>%;"><span><? echo round($wigepc2); ?>%</span>
															</div>	
														</div>
													</div>
													<?php } ;?>

													<?php if (empty($wig11)) {

													} else {
														$wigepc3 =  ($wig13/$wig12)*100;
														?>
														<p class="mp0"></p>
														<p><? echo $wig11; ?></p>
														<div class="wig-graph-early-box wig-graph-max">
															<div class="wig-graph-item">
																<div class="wig-graph-early wig-graoh-p graph-green" style="width: <? echo round($wigepc3); ?>%;"><span><? echo round($wigepc3); ?>%</span>
																</div>	
															</div>
														</div>
														<?php } ;?>
													</div>
												</div>
												<?php
											}?>
										</div>

										<!-- Monthly -->
										<div class="wig-content-item month-box">
											<?php
											$args = array(
												'post_type' => 'post_wig',
												'taxonomy' => 'wig_cat',
												'term' => 'wig-month',
												'posts_per_page' => 1,
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
												<div class="wig-month-box">
													<h5>Monthly wig</h5>
													<p><span class="wig-title-span"><?php the_title(); ?></span></p>
													<p class="index-wig-theme"><? echo $wig1; ?></p>
													<div class="index-wig-graph">
														<p><? echo $wig2; ?></p>
														<div class="wig-graph-late-box wig-graph-max">
															<div class="wig-graph-item">
																<div class="wig-graph-late wig-graoh-p" style="width: <? echo round($wiglpc); ?>%;"><span><? echo round($wiglpc); ?>%</span>
																</div>	
															</div>
														</div>
														<p><? echo $wig5; ?></p>
														<div class="wig-graph-early-box wig-graph-max">
															<div class="wig-graph-item">
																<div class="wig-graph-early wig-graoh-p graph-green" style="width: <? echo round($wigepc); ?>%;"><span><? echo round($wigepc); ?>%</span>
																</div>	
															</div>
														</div>
														<?php if (empty($wig8)) {

														} else {
															$wigepc2 = ($wig10/$wig9)*100;
															?>
															<p class="mp0"></p>
															<p><? echo $wig8; ?></p>
															<div class="wig-graph-early-box wig-graph-max">
																<div class="wig-graph-item">
																	<div class="wig-graph-early wig-graoh-p graph-green" style="width: <? echo round($wigepc2); ?>%;"><span><? echo round($wigepc2); ?>%</span>
																	</div>	
																</div>
															</div>
															<?php } ;?>

															<?php if (empty($wig11)) {

															} else {
																$wigepc3 =  ($wig13/$wig12)*100;
																?>
																<p class="mp0"></p>
																<p><? echo $wig11; ?></p>
																<div class="wig-graph-early-box wig-graph-max">
																	<div class="wig-graph-item">
																		<div class="wig-graph-early wig-graoh-p graph-green" style="width: <? echo round($wigepc3); ?>%;"><span><? echo round($wigepc3); ?>%</span>
																		</div>	
																	</div>
																</div>
																<?php } ;?>
															</div>
														</div>
														<?php
													}?>
												</div>

												<!-- Weekly -->
												<div class="wig-content-item week-box">
													<?php
													$args = array(
														'post_type' => 'post_wig',
														'taxonomy' => 'wig_cat',
														'term' => 'wig-week',
														'posts_per_page' => 1,
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
														<div class="wig-week-box">
															<h5>Weekly wig</h5>
															<p><span class="wig-title-span"><?php the_title(); ?></span></p>
															<p class="index-wig-theme"><? echo $wig1; ?></p>
															<div class="index-wig-graph">
																<p><? echo $wig2; ?></p>
																<div class="wig-graph-late-box wig-graph-max">
																	<div class="wig-graph-item">
																		<div class="wig-graph-late wig-graoh-p" style="width: <? echo round($wiglpc); ?>%;"><span><? echo round($wiglpc); ?>%</span>
																		</div>	
																	</div>
																</div>
																<p><? echo $wig5; ?></p>
																<div class="wig-graph-early-box wig-graph-max">
																	<div class="wig-graph-item">
																		<div class="wig-graph-early wig-graoh-p graph-green" style="width: <? echo round($wigepc); ?>%;"><span><? echo round($wigepc); ?>%</span>
																		</div>	
																	</div>
																</div>
																<?php if (empty($wig8)) {

																} else {
																	$wigepc2 = ($wig10/$wig9)*100;
																	?>
																	<p class="mp0"></p>
																	<p><? echo $wig8; ?></p>
																	<div class="wig-graph-early-box wig-graph-max">
																		<div class="wig-graph-item">
																			<div class="wig-graph-early wig-graoh-p graph-green" style="width: <? echo round($wigepc2); ?>%;"><span><? echo round($wigepc2); ?>%</span>
																			</div>	
																		</div>
																	</div>
																	<?php } ;?>

																	<?php if (empty($wig11)) {

																	} else {
																		$wigepc3 =  ($wig13/$wig12)*100;
																		?>
																		<p class="mp0"></p>
																		<p><? echo $wig11; ?></p>
																		<div class="wig-graph-early-box wig-graph-max">
																			<div class="wig-graph-item">
																				<div class="wig-graph-early wig-graoh-p graph-green graph-green" style="width: <? echo round($wigepc3); ?>%;"><span><? echo round($wigepc3); ?>%</span>
																				</div>	
																			</div>
																		</div>
																		<?php } ;?>
																	</div>
																</div>
																<?php
															}?>
														</div>
													</div>
												</div>

												<div class="index-finance-wrapper index-content">
													<h2>Finance</h2>

													<?php
													$temp = $wp_query;
													$wp_query = null;
													$wp_query = new WP_Query();
													$wp_query->query('post_type=post_finance' . '&paged=' . $paged . '&posts_per_page=1');
													?>
													<?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>

														<!-- 計算式START -->
														<?  $numpro = get_field('finance_profits'); ?>
														<?  $numaccount = get_field('finance_account'); ?>
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

														<a href="<?php echo get_permalink(); ?>">
															<h5 class="finance-date mp0" style="color: #ffffff7d;"><?php the_title(); ?></h5>

															<div class="index-finance-content">
																<div class="index-graph-wraper">
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
																<div class="index-finance-item">
																	<h4>Profit</h4>
																	<p>¥
																		<?  echo number_format($numpro); ?>
																	</p>
																	<h4>Loss</h4>
																	<p>¥
																		<?  echo number_format($numlosstotal); ?>（<? echo round($lossp); ?>%）
																	</p>
																	<h4>Save</h4>
																	<p>¥
																		<?  echo number_format($numsave); ?>（<? echo round($savep); ?>%）
																	</p>
																	<h4>Carryover</h4>
																	<p>¥
																		<?  echo number_format($num0); ?>
																	</p>
																	<h4>Account</h4>
																	<p>¥
																		<? echo number_format($numaccount); ?> 
																	</p>
																</div>
															</div>

															<!-- 計算 -->
															<p>
																<?  
																$nump = get_field('finance-profits');
																$numl = get_field('finance-loss');
																$nums = get_field('finance-save');
																if($num){ ?><? echo number_format($numl / $nump * 100);?>
																<? } ?>
															</p>
															<p>
																<?  
																$nump = get_field('finance-profits');
																$numl = get_field('finance-loss');
																$nums = get_field('finance-save');
																if($num){ ?><? echo number_format($nums / $nump * 100);?>
																<? } ?>
															</p>
															<p>
																<?  
																$nump = get_field('finance-profits');
																$numl = get_field('finance-loss');
																$nums = get_field('finance-save');
																if($num){ ?><? echo number_format($nump/$nump*100);?>
																<? } ?>
															</p>

														</a>
													<? endwhile ?>
													<?php wp_reset_query(); ?>

												</div>
												<?php
												if('right'===esc_attr(get_theme_mod('kr_blog_sidebar','right'))) {
													?>
													<?php
													if ( is_active_sidebar('sidebar-1')){
														?>
														<div class="index-blog-wrapper index-content">
															<h2>What's NEW</h2>
															<div class="col-md-9">
																<?php
																if(have_posts() ) {									

																	while(have_posts() ) {
																		the_post();
																/*
																 * Include the Post-Format-specific template for the content.
																 * If you want to override this in a child theme, then include a file
																 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
																 */
																get_template_part( 'template-parts/content', get_post_format()); }?>
																<nav class="pagination">
																	<?php the_posts_pagination(); ?>
																</nav>
																<?php	
															}
															
															?>
														</div>
														<div class="col-md-3">
															<?php get_sidebar('sidebar-1'); ?>
														</div>
														<?php		
													}
													else{
														?>
														<div class="col-md-12">
															<?php
															if(have_posts() ) {									

																while(have_posts() ) {
																	the_post();
																/*
																 * Include the Post-Format-specific template for the content.
																 * If you want to override this in a child theme, then include a file
																 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
																 */
																get_template_part( 'template-parts/content', get_post_format());										
															}									

															?>
															<nav class="pagination">
																<?php the_posts_pagination(); ?>
															</nav>
															<?php	
														}
														
														?>
													</div>
													<?php
												}
												?>


												<?php
											}
											else{
												?>
												<?php
												if ( is_active_sidebar('sidebar-1')){
													?>
													<div class="col-md-3">
														<?php get_sidebar('sidebar-1'); ?>
													</div>
													<div class="col-md-9">
														<?php
														if(have_posts() ) {									

															while(have_posts() ) {
																the_post();
																/*
																 * Include the Post-Format-specific template for the content.
																 * If you want to override this in a child theme, then include a file
																 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
																 */
																get_template_part( 'template-parts/content', get_post_format());										
															}									

															?>
															<nav class="pagination">
																<?php the_posts_pagination(); ?>
															</nav>
															<?php	
														}
														
														?>
													</div>
													<?php
												}
												else{
													?>
													<div class="col-md-12">
														<?php
														if(have_posts() ) {									

															while(have_posts() ) {
																the_post();
																/*
																 * Include the Post-Format-specific template for the content.
																 * If you want to override this in a child theme, then include a file
																 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
																 */
																get_template_part( 'template-parts/content', get_post_format());										
															}									

															?>
															<nav class="pagination">
																<?php the_posts_pagination(); ?>
															</nav>
															<?php	
														}
														
														?>
													</div>
													<?php
												}
												?>			        				
												<?php
											}
											?>			            
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<?php

				get_footer();
				?>

				<style type="text/css">
				article {
					padding: 0 15px;
				}
				article .blog-wrapper {
					padding-top: 15px;
				}
			</style>