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
			<!-- l-mv-non -->
			<div class="l-mv-non p-mv-non js-mv-non"></div>
			<!-- l-mv-non -->

			<!-- l-breadcrumb -->
			<?php get_template_part('template-parts/content', 'breadcrumb'); ?>
			<!-- l-breadcrumb -->

			<!-- l-min-height -->
			<main class="l-min-height">

				<!-- l-single -->
				<section class="l-single p-topics-single">
					<div class="p-topics-single__inner l-inner">
						<div class="p-topics-single__sticky p-topics-single-sticky">
							<div class="p-topics-single-sticky__container">
								<div class="p-topics-single-sticky__title">topics</div>
							</div>
						</div>
						<div class="p-topics-single__block">
							<?php if(have_posts()): ?>
								<?php while(have_posts()): the_post(); ?>
									<div class="p-topics-single__header">
										<h1 class="p-topics-single__title"><?php the_title(); ?></h1>
										<div class="p-topics-single__info">
											<?php 
												$term = get_the_terms($post->ID, 'topics-cat');
												// var_dump($term);
												$term_name = $term[0]->name;
											?>
											<span class="p-topics-single__category"><?php echo $term_name; ?></span>
											<time class="p-topics-single__time" datetime="<?php the_time(get_option('date_format')); ?>"><?php the_time('Y.m.d'); ?></time>
										</div>
									</div>
									<div class="p-topics-single__contents p-post"> 
										<?php the_content(); ?>
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
						<div class="p-relation__items">
							<?php
							$term = get_the_terms($post->ID, 'topics-cat');
							// var_dump($term);
							$term_slug = $term[0]->slug;

							$args = [
								'post_type' => 'topics',
								'post__not_in' => [$post->ID],
								'posts_per_page' => 3,
								'orderby' => 'rand',
								'tax_query' => [
									[
										'taxonomy' =>  'topics-cat',
										'field' => 'slug',
										'terms' => $term_slug,
									],
								],
							];
							$the_query = new WP_Query($args);
							?>
							<?php if($the_query->have_posts()): ?>
								<?php while($the_query->have_posts()): $the_query->the_post(); ?>
									<a class="p-relation__item p-list" href="<?php the_permalink(); ?>">
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
							<?php wp_reset_postdata(); ?>
						</div>
					</div>
				</div><!-- l-relation -->

				<!-- l-contact -->
				<?php get_template_part('template-parts/content', 'contact'); ?>
				<!-- l-contact -->

			</main><!-- l-min-height -->

<?php get_footer( ); ?>