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

?>

<?php get_header(); ?>

			<!-- l-mv-sub -->
			<div class="l-mv-sub p-mv-sub js-mv">
				<div class="p-mv-sub__background js-inview"></div>
				<figure class="p-mv-sub__img c-image-show js-inview">
					<picture>
						<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/works_mv_pc.jpg">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/works_mv_sp.jpg" alt="">
					</picture>
					<span class="c-layer-black"></span>
					<span class="c-layer-yellow"></span>
				</figure>
				<div class="p-mv-sub__titles">
					<h1 class="p-mv-sub__title">works</h1>
					<div class="p-mv-sub__subtitle">制作実績</div>
				</div>
			</div><!-- l-mv-sub -->

			<!-- l-breadcrumb -->
			<?php get_template_part('template-parts/content', 'breadcrumb'); ?>
			<!-- l-breadcrumb -->

			<div class="l-taxonomy-list p-taxonomy-list">
				<div class="p-taxonomy-list__inner l-inner">
					<div class="p-taxonomy-list__items">
						<a class="p-taxonomy-list__item c-btn-taxonomy <?php if(is_post_type_archive('works')){ echo 'is-current'; } ?>" href="<?php echo $works; ?>">ALL</a>
						<?php 
							$taxonomy_terms = get_terms('works-cat');
							// var_dump($taxonomy_terms);
							$queryVarTerm = get_query_var('term');
						?>
						<?php foreach($taxonomy_terms as $taxonomy_term): ?>
							<a class="p-taxonomy-list__item c-btn-taxonomy <?php if($taxonomy_term->slug === $queryVarTerm){ echo 'is-current'; } ?>" href="<?php echo get_term_link($taxonomy_term); ?>"><?php echo $taxonomy_term->name; ?></a>
						<?php endforeach; ?>
					</div>
				</div>
			</div>

			<!-- l-min-height -->
			<main class="l-min-height">
				<section class="l-works-archive p-works-archive">
					<div class="p-works-archive__inner l-inner">
						<div class="p-works-archive__items p-lists-grid-04">

							<?php if(have_posts()): ?>
								<?php while(have_posts()): the_post(); ?>
									<a class="p-works-archive__item p-card-works" href="<?php the_permalink(); ?>">
										<figure class="p-card-works__img c-image-show js-inview">
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
												$term_name = $term[0]->name;
												// var_dump($term);
											?>
											<span class="p-card-works__category"><?php echo $term_name; ?></span>
											<h3 class="p-card-works__title"><?php the_title(); ?></h3>
											<!-- サブタイトルはSCF使用 -->
											<?php $subtitle = SCF::get('works_subtitle'); ?>
											<div class="p-card-works__subtitle"><?php echo $subtitle; ?></div>
											<time class="p-card-works__time" datetime="<?php the_time(get_option('date_format')); ?>"><?php the_time('Y.m.d'); ?></time>
										</div>
									</a>
								<?php endwhile; ?>
							<?php endif; ?>

						</div>
					</div>
				</section>
						
				<!-- l-pagination -->
				<?php get_template_part('template-parts/content', 'pagination'); ?>
				<!-- l-pagination -->
				
				<!-- l-contact -->
				<?php get_template_part('template-parts/content', 'contact'); ?>
				<!-- l-contact -->

			</main><!-- l-min-height -->

<?php get_footer(); ?>