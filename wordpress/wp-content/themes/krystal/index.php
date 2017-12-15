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
		<?php krystal_get_page_title(true,false,false,false); ?>
		<div class="content-inner">
			<div id="blog-section">
				<div class="container">
					<div class="row">

						<div class="index-wig-wrapper index-content">
							<h2>WIG</h2>
							<div class="index-wig-content">
								<h5>Yearly wig</h5>
								<p>TYPE somthing.</p>
								<h5>Monthly wig</h5>
								<p>TYPE somthing.</p>
								<h5>Weekly wig</h5>
								<p>TYPE somthing.</p>
							</div>
						</div>
						<div class="index-finance-wrapper index-content">
							<h2>Finance</h2>
							<div class="index-finance-content">
								<div class="index-graph-wraper">
									<div class="index-graph-box">
										<div class="index-graph-profit"></div>
										<div class="index-graph-right">
											<div class="index-graph-loss"></div>
											<div class="index-graph-stock"></div>
										</div>
									</div>
								</div>
								<div class="pie-chart" data-px="200" style="width: 50%;">
									<div class="pie" data-percentage="60" data-color="#42cbcb"></div>
									<div class="pie" data-percentage="20" data-color="#fe8378"></div>
									<div class="pie" data-percentage="10" data-color="#57b7db"></div>
									<div class="pie" data-percentage="10" data-color="#6a8cbb"></div>
								</div>
								<div class="index-finance-item">
									<h4>Profit</h4>
									<p>¥100,000</p>
									<h4>Loss</h4>
									<p>¥100,000</p>
									<h4>Stock</h4>
									<p>¥100,000</p>
								</div>
							</div>
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
