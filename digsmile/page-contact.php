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

			<!-- l-mv-sub  -->
			<div class="l-mv-sub p-mv-sub js-mv">
				<div class="p-mv-sub__background js-inview"></div>
				<figure class="p-mv-sub__img c-image-show js-inview">
					<picture>
						<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/contact_mv_pc.jpg">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact_mv_sp.jpg" alt="">
					</picture>
					<span class="c-layer-black"></span>
					<span class="c-layer-yellow"></span>
				</figure>
				<div class="p-mv-sub__titles">
					<h1 class="p-mv-sub__title">contact</h1>
					<div class="p-mv-sub__subtitle">お問い合わせ</div>
				</div>
			</div><!-- l-mv-sub  -->

			<!-- l-breadcrumb -->
			<?php get_template_part('template-parts/content', 'breadcrumb'); ?>
			<!-- l-breadcrumb -->

			<!-- l-min-height -->
			<main class="l-min-height">
				<!-- l-contact-sub -->
				<section class="l-contact-sub p-contact-sub">

					<div class="p-contact-sub__inner">
						<div class="p-contact-sub__description">ご依頼やご相談についてのご質問やご要望がございましたら、下記フォームよりお気軽にお問い合わせください。送付いただいた内容を確認の上、担当者からご連絡させていただきます。</div>
						<div class="p-contact-sub__form p-form">

							<!-- MWWPフォーム -->
              <?php echo do_shortcode('[mwform_formkey key="197"]'); ?>
							<!-- MWWPフォーム -->

						</div>
					</div>
				</section><!-- l-contact-sub -->

			</main><!-- l-min-height -->

<?php get_footer(); ?>