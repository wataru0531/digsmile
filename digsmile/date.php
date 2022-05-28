<?php 
// 各ページのURL
$top = esc_url(home_url('/'));
$about = esc_url(home_url('about'));
$works = esc_url(home_url('works'));
$culture = esc_url(home_url('culture'));
$topics = esc_url(home_url('topics'));
$blog = esc_url(home_url('blog'));
$contact = esc_url(home_url('contact'));
?>
<?php 
// var_dump($wp_query);
// var_dump($posts);

?>
<?php get_header(); ?>
			<!-- l-mv-non -->
			<div class="l-mv-non p-mv-non js-mv-non"></div>
			<!-- l-mv-non -->

			<!-- l-breadcrumb -->
			<?php get_template_part('template-parts/content', 'breadcrumb'); ?>
			<!-- l-breadcrumb -->

			<!-- l-container-blog -->
			<div class="l-container-blog p-container-blog l-min-height">
				<div class="p-container-blog__inner l-inner">
					<div class="p-container-blog__block">

						<main>
							<!-- l-date -->
							<section class="l-date p-date">
								<div class="p-date__inner">
									<div class="p-date__header">
										<h1 class="p-data__title"><?php echo get_query_var('year'); ?>年</h1>
									</div>
									<div class="p-date__items">
										<?php if(have_posts()): ?>
											<?php while(have_posts()): the_post(); ?>
												<a class="p-date__item p-card-blog" href="<?php the_permalink(); ?>">
													<figure class="p-card-blog__img c-image-show js-inview">
														<?php 
															$attach_id = get_post_thumbnail_id($post->ID);
															$image = wp_get_attachment_image_src($attach_id, 'full');
															// var_dump($image);
														?>
														<?php if($image): ?>
															<img src="<?php echo $image[0]; ?>" alt="<?php the_title_attribute(); ?>">
														<?php else: ?>
															<img src="<?php echo get_template_directory_uri() ?>/assets/images/blog_default.jpg" alt="">
														<?php endif; ?>
														<span class="c-layer-black"></span>
														<span class="c-layer-yellow"></span>
													</figure>
													<div class="p-card-blog__body">
														<div class="p-card-blog__block">
															<?php 
																$category = get_the_category();
																// var_dump($category);
																$category_name = $category[0]->name;
															?>
															<span class="p-card-blog__category"><?php echo $category_name; ?></span>
															<time class="p-card-blog__time" datetime="<?php the_time(get_option('date_format')); ?>"><?php the_time('Y.m.d'); ?></time>
														</div>
														<h3 class="p-card-blog__title"><?php the_title(); ?></h3>
														<p class="p-card-blog__content"><?php echo get_flexible_content(80); ?></p>
													</div>
												</a>
											<?php endwhile; ?>

											<!-- l-pagination -->
											<?php get_template_part('template-parts/content', 'pagination'); ?>
											<!-- l-pagination -->

										<?php endif; ?>
										
									</div>
								</div>
							</section><!-- l-date -->

						</main>
					</div>

					<!-- l-sidebar-blog -->
					<?php get_sidebar(); ?>
					<!-- l-sidebar-blog -->
					
				</div>
			</div><!-- l-container-blog -->

			<!-- l-contact -->
			<?php get_template_part('template-parts/content', 'contact'); ?>
			<!-- l-contact -->
			
<?php get_footer(); ?>