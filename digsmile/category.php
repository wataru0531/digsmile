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
			
			<!-- l-mv-sub -->
			<div class="l-mv-sub p-mv-sub js-mv">
				<div class="p-mv-sub__background js-inview"></div>
				<figure class="p-mv-sub__img c-image-show js-inview">
					<picture>
						<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/blog-archive_mv_sp.jpg">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog-archive_mv_pc.jpg" alt="">
					</picture>
					<span class="c-layer-black"></span>
					<span class="c-layer-yellow"></span>
				</figure>
				<div class="p-mv-sub__titles">
					<h1 class="p-mv-sub__title">blog</h1>
					<div class="p-mv-sub__subtitle">ブログ</div>
				</div>
			</div><!-- l-mv-sub -->

			<!-- l-breadcrumb -->
			<?php get_template_part('template-parts/content', 'breadcrumb'); ?>
			<!-- l-breadcrumb -->
			
			<!-- l-taxonomy-list -->
			<div class="l-taxonomy-list p-taxonomy-list">
				<div class="p-taxonomy-list__inner l-inner">
					<div class="p-taxonomy-list__items">
						<a class="p-taxonomy-list__item c-btn-taxonomy <?php if(is_home()){ echo 'is-current'; } ?>" href="<?php echo $blog; ?>">ALL</a>
						<?php 
						// カテゴリー全取得
						$categories = get_categories();
						// var_dump($categories);
						$category_name = get_query_var('category_name');
						// var_dump($queryVarCategory);
						?>
						<?php foreach($categories as $category): ?>
							<!-- カテゴリーのslug名とwp_queryオブジェクトのcategoryの名前とが合致すればis-currentを付与する。 -->
							<a class="p-taxonomy-list__item c-btn-taxonomy <?php if($category->slug === $category_name){ echo 'is-current'; } ?> " href="<?php echo get_category_link($category->term_id); ?>">
								<?php echo $category->name; ?>
							</a>
						<?php endforeach; ?>

					</div>
				</div>
			</div><!-- l-taxonomy-list -->

			<!-- l-container-blog -->
			<div class="l-container-blog p-container-blog l-min-height">
				<div class="p-container-blog__inner l-inner">
					<div class="p-container-blog__block">

						<main>
							<!-- l-blog-archive -->
							<section class="l-blog-archive p-blog-archive">
								<div class="p-blog-archive__inner">
									<div class="p-blog-archive__items">

										<?php if(have_posts()): ?>
											<?php while(have_posts()): the_post(); ?>
												<a class="p-blog-archive__item p-card-blog" href="<?php the_permalink(); ?>">
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
							</section><!-- l-blog-archive -->
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