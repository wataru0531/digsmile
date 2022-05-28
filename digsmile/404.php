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
			<!-- l-mv-non p-mv-non -->
			<div class="l-mv-non p-mv-non js-mv-non"></div>
			<!-- l-mv-non p-mv-non -->

			<!-- l-min-height -->
			<main class="l-min-height">

				<!-- l-404 -->
				<section class="l-404 p-404">
					<div class="p-404__inner l-inner">
						<div class="p-404__header">
							<h1 class="p-404__title">404&nbsp;Not&nbsp;Found</h1>
							<div class="p-404__subtitle">お探しのページは見つかりませんでした。</div>
							<div class="p-404__btn">
								<a href="<?php echo $top; ?>" class="c-btn">page&nbsp;top</a>
							</div>
						</div>
					</div>
				</section><!-- l-404 -->

			</main><!-- l-min-height -->

			<!-- l-contact -->
			<?php get_template_part('template-parts/content', 'contact'); ?>
			<!-- l-contact -->

<?php get_footer(); ?>