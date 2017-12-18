<?php
/**
 * Template Name: blog
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
		<div class="page-blog-wrapper">
			<div>
				
				<?php if(have_posts()): while(have_posts()):the_post(); ?>

					<a href="<?php the_permalink() ?>">
						<div class="page-blog-content-wrapper">
							<article>
								<div class="blog-wrapper blog-list wow fadeInUp animated">
									<div class="image">
										<?php
										the_post_thumbnail('full');
										?>
									</div>	
									<div class="meta-wrapper">
										<div class="meta">
											<?php
											if(is_sticky()){
												?>                                        
												<span class="meta-item">
													<i class="fa fa-thumb-tack"></i><?php _e('Sticky Post','krystal') ?>
												</span> 
												<?php       
											}                                
											?>              
											<span class="meta-item">
												<i class="fa fa-clock-o"></i><?php the_time(get_option('date_format')) ?>
											</span>                                            
											<span class="meta-item">
												<i class="fa fa-user"></i><a class="author-post-url" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>"><?php the_author() ?></a>
											</span>                        
											<span class="meta-item">
												<i class="fa fa-commenting"></i><a class="post-comments-url" href="<?php the_permalink() ?>#comments"><?php comments_number('0','1','%'); ?> <?php _e('Comments','krystal'); ?></a>
											</span>
										</div>  
									</div>
									<div class="blog-content">
										<div class="heading">
											<h3>
												<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
											</h3>
										</div>
										<div class="blog-content">
											<p><?php the_content(); ?></p>
										</div>
										<div class="post-info single">
											<div class="row">
												<div class="col-md-6">
													<div class="post-category">
														<?php _e('','krystal') ?><?php the_category(); ?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</article>
						</div>
					</a>
				<?php endwhile; endif; ?>


																<nav class="pagination">
																	<?php the_posts_pagination(); ?>
																</nav>
			</div>
		</div>
	</main>
</div>

<?php

get_footer();
?>

<style type="text/css">
.meta-wrapper,.meta,article .blog-wrapper {
	margin: 0 !important;
	padding: 0 !important;
}
article {
	margin: 0 !important;
}
</style>
