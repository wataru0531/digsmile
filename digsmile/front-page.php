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

// $terms = get_terms('topics-cat');
// var_dump($terms);

// $obj = get_queried_object();
// var_dump($obj);

// var_dump($wpdb);

// wp_get_archives();
?>

<?php get_header(); ?>

<!-- l-mv -->
<div class="l-mv p-mv js-mv">
	<div class="p-mv__background js-inview"></div>
	<figure class="p-mv__img c-image-show js-inview">
		<picture>
			<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top_mv_pc.jpg">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top_mv_sp.jpg" alt="">
		</picture>
		<span class="c-layer-black"></span>
		<span class="c-layer-yellow"></span>
	</figure>
	<div class="p-mv__titles">
		<div class="p-mv__subtitle">デザインで人を笑顔にする会社<br>DIGSMILE INC.</div>
		<h2 class="p-mv__title">DESIGN<br>FOR<br>SMILE.</h2>
	</div>
</div><!-- l-mv -->

<!-- l-min-height -->
<main class="l-min-height">

	<!-- l-about -->
	<section class="l-about p-about">
		<div class="p-about__inner c-image-show js-inview">
			<figure class="p-about__img">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top_about.jpg" alt="">
			</figure>
			<span class="c-layer-black"></span>
			<span class="c-layer-yellow"></span>
			<div class="p-about_box">
				<div class="p-about__header">
					<h2 class="c-section-title">about&nbsp;us</h2>
				</div>
				<div class="p-about__description"> DIGSMILEは、デザインで人を笑顔にする会社。<br> なんでもない日常に少しのワクワクと遊び心を提供します。笑顔には世界を変える力がある、デザインには人を幸せにする力がある。毎日に幸せを感じて生きていきたい。<br> DIGSMILEの社名にはそんな想いが込められています。 </div>
				<div class="p-about__btn">
					<a href="<?php echo $about; ?>" class="c-btn">read&nbsp;more</a>
				</div>
			</div>
		</div>
	</section><!-- l-about -->

	<!-- l-section-block -->
	<div class="l-section-block p-section-block">
		<div class="p-section-block__inner l-inner">

			<!-- l-works -->
			<section class="l-works p-works">
				<h2 class="c-section-title">works</h2>
				<figure class="p-works__img c-image-show js-inview">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top_works.jpg" alt="">
					<span class="c-layer-black"></span>
					<span class="c-layer-yellow"></span>
				</figure>
				<div class="p-works__description"> DIGSMILEの制作実績を紹介します。 </div>
				<div class="p-works__btn">
					<a href="<?php echo $works; ?>" class="c-btn">read&nbsp;more</a>
				</div>
			</section><!-- l-works -->

			<!-- l-culture -->
			<section class="l-culture p-culture">
				<h2 class="c-section-title">culture</h2>
				<figure class="p-culture__img c-image-show js-inview">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top_culture.jpg" alt="">
					<span class="c-layer-black"></span>
					<span class="c-layer-yellow"></span>
				</figure>
				<div class="p-culture__description"> DIGSMILEの社内文化について紹介します。 </div>
				<div class="p-culture__btn">
					<a href="<?php echo $culture; ?>" class="c-btn">read&nbsp;more</a>
				</div>
			</section><!-- l-culture -->

		</div>
	</div><!-- l-section-block -->

	<!-- l-topics -->
	<section class="l-topics p-topics">
		<div class="p-topics__inner l-inner">
			<div class="p-topics__header">
				<h2 class="c-section-title">latest&nbsp;topics</h2>
			</div>
			<div class="p-topics__items">
				<?php 
					$args = [
						'post_type' => 'topics',
						'posts_per_page' => 3,
						'orderby' => 'post_date',
						'order' => 'DESC',
					];
					$the_query = new WP_Query($args);
				?>
				<?php if($the_query->have_posts()): ?>
					<?php while($the_query->have_posts()): $the_query->the_post(); ?>
						<a class="p-topics__item p-list" href="<?php the_permalink(); ?>">
							<div class="p-list__block">
								<?php 
									$term = get_the_terms($post->ID, 'topics-cat');
									$term_name = $term[0]->name;
									// var_dump($term);
								?>
								<span class="p-list__category"><?php echo $term_name; ?></span>
								<time class="p-list__time" datetime="<?php the_time(get_option('date_format')); ?>"><?php the_time('Y.m.d'); ?></time>
							</div>
							<h3 class="p-list__title"><?php the_title(); ?></h3>
						</a>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
			</div>
			<div class="p-topics__btn">
				<a href="<?php echo $topics; ?>" class="c-btn">read&nbsp;more</a>
			</div>
		</div>
	</section><!-- l-topics -->

	<!-- l-blog -->
	<section class="l-blog p-blog">
		<div class="p-blog__inner l-inner">
			<div class="p-blog__header">
				<h2 class="c-section-title">blog</h2>
			</div>
			<p class="p-blog__description"> DIGSMILEのブログです。</p>
			<div class="p-blog__items">
				<?php 
					$args = [
						'post_type' => 'post',
						'posts_per_page' => 3,
						'orderby' => 'post_date',
						'order' => 'DESC',
					];
					$the_query = new WP_Query($args);
				?>
				<?php if($the_query->have_posts()): ?>
					<?php while($the_query->have_posts()): $the_query->the_post(); ?>
						<a class="p-blog__item p-card-blog" href="<?php the_permalink(); ?>">
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
										$category = get_the_category();
										// var_dump($category);
										$category_name = $category[0]->cat_name;
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
				<?php wp_reset_postdata(); ?>
			</div>
			<div class="p-blog__btn">
				<a href="<?php echo $blog; ?>" class="c-btn">read&nbsp;more</a>
			</div>
		</div>
	</section><!-- l-blog -->

	<!-- l-contact -->
	<?php get_template_part('./template-parts/content', 'contact'); ?>
	<!-- l-contact -->
	
</main><!-- l-min-height -->

<?php get_footer(); ?>