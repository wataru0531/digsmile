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
var_dump($wp_query);
?>

<?php get_header(); ?>

			<!-- l-mv-sub -->
			<div class="l-mv-sub p-mv-sub js-mv">
				<div class="p-mv-sub__background js-inview"></div>
				<figure class="p-mv-sub__img c-image-show js-inview">
					<picture>
						<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/topics_mv_pc.jpg">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/topics_mv_sp.jpg" alt="">
					</picture>
					<span class="c-layer-black"></span>
					<span class="c-layer-yellow"></span>
				</figure>
				<div class="p-mv-sub__titles">
					<h1 class="p-mv-sub__title">topics</h1>
					<div class="p-mv-sub__subtitle">トピックス</div>
				</div>
			</div><!-- l-mv-sub -->

			<div class="l-breadcrumb p-breadcrumb">
				<div class="p-breadcrumb__inner l-inner">
					<span property="itemListElement" typeof="ListItem">
						<a property="item" typeof="WebPage" title="" href="" class="">
							<span property="name">トップ</span>
						</a>
					</span>&nbsp;&gt;&nbsp; <span property="itemListElement" typeof="ListItem">
						<a property="item" typeof="WebPage" title="" href="" class="current-item">
							<span property="name">TOPICS</span>
						</a>
					</span>
				</div>
			</div>
			<div class="l-taxonomy-list p-taxonomy-list">
				<div class="p-taxonomy-list__inner l-inner">
					<div class="p-taxonomy-list__items">
						<a class="p-taxonomy-list__item c-btn-taxonomy js-current is-current" href="">ALL</a>
						<a class="p-taxonomy-list__item c-btn-taxonomy" href="">INFO</a>
						<a class="p-taxonomy-list__item c-btn-taxonomy" href="">PRESS RELEASE</a>
						<a class="p-taxonomy-list__item c-btn-taxonomy" href="">MEDIA</a>
					</div>
				</div>
			</div>

			<!-- l-min-height -->
			<main class="l-min-height">

				<!-- l-topics-archive  -->
				<section class="l-topics-archive p-archive-topics">
					<div class="p-archive-topics__inner l-inner">
						<div class="p-archive-topics__items">

							<?php if(have_posts()): ?>
								<?php while(have_posts()): the_post(); ?>
									<a class="p-topics__item p-list" href="../single-topics/single-topics.html">
										<div class="p-list__block">
											<?php 
												$term = get_the_terms($post->ID, 'topics-cat');
												// var_dump($term);
												$term_name = $term[0]->name;
											?>
											<span class="p-list__category"><?php echo $term_name; ?></span>
											<time class="p-list__time" datetime="<?php the_time(get_option('date_format')); ?>"><?php the_time('Y.m.d'); ?></time>
										</div>
										<h3 class="p-list__title"><?php the_title(); ?></h3>
									</a>
								<?php endwhile; ?>
							<?php endif; ?>

							
						</div>
					</div>
				</section><!-- l-topics-archive  -->

				<div class="l-pagination p-pagination">
					<div class="p-pagination__inner l-inner">
						<div class="p-pagination__block">
							<a class="prev page-numbers" href="">PREV</a>
							<a class="page-numbers" href="">1</a>
							<span aria-current="page" class="page-numbers current">2</span>
							<a class="page-numbers" href="">3</a>
							<a class="page-numbers" href="">4</a>
							<a class="next page-numbers" href="">NEXT</a>
						</div>
					</div>
				</div>

				<!-- l-contact -->
				<?php get_template_part('template-parts/content', 'contact'); ?>
				<!-- l-contact -->
				
			</main><!-- l-min-height -->

<?php get_footer(); ?>