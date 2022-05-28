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
// var_dump($post);
?>

<?php get_header(); ?>
			<!-- l-mv-non -->
			<div class="l-mv-non p-mv-non js-mv-non"></div>
			<!-- l-mv-non -->

			<!-- l-breadcrumb -->
			<?php get_template_part('template-parts/content', 'breadcrumb'); ?>
			<!-- l-breadcrumb -->
			
			<!-- l-container-blog l-min-height -->
			<div class="l-container-blog p-container-blog l-min-height">
				<div class="p-container-blog__inner l-inner">
					<div class="p-container-blog__block">
						<main>
							<article>
								
								<!-- p-blog-single -->
								<section class="p-blog-single">
									<?php if(have_posts()): ?>
										<?php while(have_posts()): the_post(); ?>
											<div class="p-blog-single__header">
												<h1 class="p-blog-single__title"><?php the_title(); ?></h1>
												<div class="p-blog-single__info">
													<?php 
														$category = get_the_category($post->ID);
														// var_dump($category);
														$category_name = $category[0]->name;
													?>
													<span class="p-blog-single__category"><?php echo $category_name; ?></span>
													<time class="p-blog-single__time" datetime="<?php the_time(get_option('date_format')); ?>">2022.03.28</time>
												</div>
											</div>
											<figure class="p-blog-single__img c-image-show js-inview">
												<?php 
													$attach_id = get_post_thumbnail_id($post->ID);
													// var_dump($attach_id);
													$image = wp_get_attachment_image_src($attach_id, 'full');
													// var_dump($image);
												?>
												<?php if($image): ?>
													<img src="<?php echo $image[0]; ?>" alt="<?php the_title_attribute(); ?>">
												<?php else: ?>
													<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_default.jpg" alt="">
												<?php endif; ?>
												<span class="c-layer-yellow"></span>
											</figure>
											<div class="p-blog-single__contents p-post">
												<?php the_content(); ?>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>
								</section><!-- p-blog-single -->
								
							</article>
						</main>

						<!-- l-single-pagination -->
						<?php get_template_part('template-parts/content', 'pagination-single'); ?>
						<!-- l-single-pagination -->
						
					</div>
					<!-- l-sidebar-blog -->
					<?php get_sidebar(); ?>
					<!-- l-sidebar-blog -->
					
				</div>

				<!-- l-relation -->
				<div class="l-relation p-relation">
					<div class="p-relation__inner l-inner">
						<div class="p-relation__header">
							<h2 class="c-section-title">relation</h2>
						</div>
						<div class="p-relation__items">
							<?php
								$categories = get_the_category($post->ID);
								// var_dump($categories);
								$category_id = [];

								foreach($categories as $category):
									array_push($category_id, $category->cat_ID);
								endforeach;

								$args = [
									'post_type' => 'post',
									'post__not_in' => array($post->ID), // 現在の投稿を削除
									'posts_per_page' => 3,
									'category__in' => $category_id, // カテゴリーIDの配列を指定
									'orderby' => 'rand',
								];
								$the_query = new WP_Query($args);
							?>
							<?php if($the_query->have_posts()): ?>
								<?php while($the_query->have_posts()): $the_query->the_post(); ?>
									<a class="p-relation__item p-card-blog" href="<?php the_permalink(); ?>">
									<figure class="p-card-blog__img c-image-show js-inview">
											<?php 
												$attach_id = get_post_thumbnail_id($post->ID);
												$image = wp_get_attachment_image_src($attach_id, 'full');
												// var_dump($image);
											?>
											<?php if($image): ?>
												<img src="<?php echo $image[0]; ?>" alt="<?php the_title_attribute(); ?>">
											<?php else: ?>
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog_default.jpg" alt="">
											<?php endif; ?>

											<span class="c-layer-black"></span>
											<span class="c-layer-yellow"></span>
										</figure>
										<div class="p-card-blog__body">
											<div class="p-card-blog__block">
												<?php 
												$category = get_the_category($post->ID);
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
							<?php endif; ?>
						</div>
					</div>
				</div><!-- l-relation -->

			</div><!-- l-container-blog l-min-height -->

			<!-- l-contact -->
			<?php get_template_part('template-parts/content', 'contact'); ?>
			<!-- l-contact -->
			
<?php get_footer(); ?>