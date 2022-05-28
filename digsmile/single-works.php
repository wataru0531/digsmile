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

// $server = $_SERVER;
// var_dump($server);

?>
<!-- <?php if(wp_is_phone()): ?>
	<p>スマホ</p>
<?php elseif(wp_is_tablet()): ?>
	<p>タブレット</p>
<?php else: ?>
	<p>PC</p>
<?php endif ?> -->


<?php get_header(); ?>
			<!-- l-mv-non -->
			<div class="l-mv-non p-mv-non js-mv-non"></div>
			<!-- l-mv-non -->

			<!-- l-breadcrumb -->
			<?php get_template_part('template-parts/content', 'breadcrumb'); ?>
			<!-- l-breadcrumb -->

			<!-- l-min-height -->
			<main class="l-min-height">

				<!-- l-single -->
				<section class="l-single p-works-single">

					<div class="p-works-single__inner l-inner">
						<div class="p-works-single__sticky p-works-single-sticky">
							<div class="p-works-single-sticky__container">
								<div class="p-works-single-sticky__title">works</div>
							</div>
						</div>

						<div class="p-works-single__block">
							
							<?php if(have_posts()): ?>
								<?php while(have_posts()): the_post(); ?>
									<div class="p-works-single__header">
										<div class="p-works-single__titles">
											<h1 class="p-works-single__title"><?php the_title(); ?></h1>
											<?php $subtitle = SCF::get('works_subtitle'); ?>
											<div class="p-works-single__subtitle"><?php echo $subtitle; ?></div>
										</div>
										<div class="p-works-single__info">
											<?php 
												$term = get_the_terms($post->ID, 'works-cat');
												// var_dump($term);
												$term_name = $term[0]->name;
											?>
											<span class="p-works-single__category"><?php echo $term_name; ?></span>
											<time class="p-works-single__time" datetime="<?php the_time(get_option('date_format')); ?>"><?php the_time('Y.m.d'); ?></time>
										</div>
									</div>
									<div class="p-works-single__contents">
										<div class="p-works-single__slider p-works-single-slider">

											<!-- メイン -->
											<div class="swiper p-works-single__swiper-main p-works-single-swiper-main js-swiper-main">
												<div class="swiper-wrapper">
													<!-- SCF繰り返しフィールド -->
													<?php
													$works_images = SCF::get('works_images');
													// var_dump($works_images);
													?>
													<?php if($works_images[0]['works_image']): ?>
														<?php foreach($works_images as $works_image): ?>
															<div class="swiper-slide">
																<figure class="p-works-single-swiper-main__img">
																	<div class="p-works-single-swiper-main__block">
																		<img src="<?php echo wp_get_attachment_url($works_image['works_image'], 'full') ?>" alt="">
																	</div>
																	<figcaption class="p-works-single-swiper-main__caption">captionが入ります</figcaption>
																</figure>
															</div>
														<?php endforeach; ?>
													<?php endif; ?>
												</div>
												<!-- prev、nextボタン -->
												<div class="swiper-button-prev"></div>
												<div class="swiper-button-next"></div>
											</div>
											
											<!-- サムネイル -->
											<div class="swiper p-works-single__swiper-thumb p-works-single-swiper-thumb js-swiper-thumb">
												<div class="swiper-wrapper">
													<!-- SCF繰り返しフィールド -->
													<?php
														$works_images = SCF::get('works_images');
														// var_dump($works_images);
													?>
													<?php if($works_images[0]['works_image']): ?>
														<?php foreach($works_images as $works_image): ?>
															<div class="swiper-slide">
																<figure class="p-works-single-swiper-thumb__img">
																	<img src="<?php echo wp_get_attachment_url($works_image['works_image'], 'full'); ?>" alt="">
																</figure>
															</div>
														<?php endforeach; ?>
													<?php endif; ?>
													
												</div>
												<!-- スクロールバー -->
												<div class="swiper-scrollbar"></div>
											</div>
											
										</div>

										<div class="p-works-single__comment">
											<?php $comment = SCF::get('works_comment'); ?>
											<p><?php echo $comment; ?></p>
										</div>
										<dl class="p-works-single__introduction-list p-introduction-list">
											<!-- SCf繰り返しフィールド -->
											<?php
											$works_items = SCF::get('works_items');
											// var_dump($works_items);
											?>
											<?php foreach($works_items as $works_item): ?>
											<!-- <?php var_dump($works_item); ?> -->
											<div class="p-introduction-list__block">
												<dt class="p-introduction-list__title"><?php echo $works_item['works-introduction_title']; ?></dt>
												<dd class="p-introduction-list__detail"><?php echo $works_item['works-introduction_detail']; ?></dd>
											</div>
											<?php endforeach; ?>
										</dl>
										
									</div>
								<?php endwhile; ?>
							<?php endif; ?>

							<!-- l-single-pagination -->
							<?php get_template_part('template-parts/content', 'pagination-single'); ?>
							<!-- l-single-pagination -->

						</div>
					</div>
				</section><!-- l-single -->

				<!-- l-relation -->
				<div class="l-relation p-relation">
					<div class="p-relation__inner l-inner">
						<div class="p-relation__header">
							<h2 class="c-section-title">relation</h2>
						</div>
						<div class="p-relation__items p-lists-grid-04">
							<?php 
								if(wp_is_phone()){
									// スマホからのアクセス
									$num = 4;
								}elseif(wp_is_tablet()){
									// タブレット
									$num = 8;
								}else{
									// PC
									$num = 8;
								};
							?>
							<?php
								$term = get_the_terms($post->ID, 'works-cat');
								// var_dump($term);
								$term_slug = $term[0]->slug;

								$args = [
									'post_type' => 'works',
									'post__not_in' => [$post->ID],
									'posts_per_page' => $num,
									// 'posts_per_page' => 8,
									'orderby' => 'rand',
									'tax_query' => [
										[
											'taxonomy' => 'works-cat',
											'field' => 'slug',
											'terms' => $term_slug,
										],
									],
								];
								$the_query = new WP_Query($args);
							?>
							<?php if($the_query->have_posts()): ?>
								<?php while($the_query->have_posts()): $the_query->the_post(); ?>
									<a class="p-works-archive__item p-card-works" href="<?php the_permalink(); ?>">
										<figure class="p-card-works__img c-image-show js-inview is-inview">
											<?php 
												$works_images = SCF::get('works_images');
												// var_dump($works_images);
											?>
											<?php if($works_images[0]['works_image']): ?>
												<img src="<?php echo wp_get_attachment_url($works_images[0]['works_image'], 'full'); ?>" alt="<?php the_title_attribute(); ?>">
											<?php else: ?>
												<img src="<?php echo get_template_directory_uri(); ?>/assets/images/works-default.jpg" alt="">
											<?php endif; ?>

											<span class="c-layer-black"></span>
											<span class="c-layer-yellow"></span>
										</figure>
										<div class="p-card-works__body">
											<?php 
												$term = get_the_terms($post->ID, 'works-cat');
												// var_dump($term);
												$term_name = $term[0]->name;
											?>
											<span class="p-card-works__category"><?php echo $term_name; ?></span>
											<h3 class="p-card-works__title"><?php the_title(); ?></h3>
											<?php $subtitle = SCF::get('works_subtitle'); ?>
											<div class="p-card-works__subtitle"><?php echo $subtitle; ?></div>
											<time class="p-card-works__time" datetime="<?php the_time(get_option('date_format')); ?>"><?php the_time('Y.m.d'); ?></time>
										</div>
									</a>
								<?php endwhile; ?>
							<?php endif; ?>
							
						</div>
					</div>
				</div><!-- l-relation -->

				<!-- l-contact -->
				<?php get_template_part('template-parts/content', 'contact'); ?>
				<!-- l-contact -->
				
			</main><!-- l-min-height -->

<?php get_footer(); ?>