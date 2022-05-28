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
						<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/about_mv_pc.jpg">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/about_mv_sp.jpg" alt="">
					</picture>
					<span class="c-layer-black"></span>
					<span class="c-layer-yellow"></span>
				</figure>
				<div class="p-mv-sub__titles">
					<h1 class="p-mv-sub__title">about&nbsp;us</h1>
					<div class="p-mv-sub__subtitle">DIGSMILEについて</div>
				</div>
			</div><!-- l-mv-sub -->

			<!-- l-breadcrumb -->
				<?php get_template_part('template-parts/content', 'breadcrumb'); ?>
			<!-- l-breadcrumb -->

			<!-- l-min-height -->
			<main class="l-min-height">

				<!-- l-vision -->
				<section class="l-vision p-vision">
					<div class="p-vision__inner">
						<div class="p-vision__header">
							<h2 class="c-section-title">vision</h2>
							<div class="p-vision__subtitle">デザインで人を笑顔にする会社</div>
						</div>
						<div class="p-vision__texts">
							<p class="p-vision__text">私達のデザインで人が笑顔になる。</p>
							<p class="p-vision__text">そんなデザインを目指しています。</p>
							<p class="p-vision__text">私達が考える人を笑顔にできるデザインとは、<br>デザインが課題を適切に解決ができているかどうか。</p>
							<p class="p-vision__text">ビジュアルだけではなく、<br>本当に求められているものは何かを考え抜いて、<br>デザインしていきたい。</p>
							<p class="p-vision__text">誰かの幸せを創ることも、<br>世界の常識を変えていくことだってできる。</p>
							<p class="p-vision__text">私達はデザインの力を信じています。</p>
						</div>
					</div>
				</section><!-- l-vision -->

				<!-- l-message -->
				<section class="l-message p-message">
					<div class="p-message__inner l-inner">
						<div class="p-message__box">
							<figure class="p-message__img c-image-show js-inview">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/about_message.jpg" alt="">
								<span class="c-layer-black"></span>
								<span class="c-layer-yellow"></span>
							</figure>
						</div>
						<div class="p-message__contents">
							<div class="p-message__header">
								<h2 class="c-section-title">ceo&nbsp;message</h2>
							</div>
							<div class="p-message__texts">
								<p class="p-message__text">良いデザインは人を幸せにする。</p>
								<p class="p-message__text">私達はそう信じています。</p>
								<p class="p-message__text">デザインを通して、ビジネスの課題とユーザーの課題を解決することで、世の中を幸せにしていきたい。</p>
								<p class="p-message__text">現在はあらゆるプロダクトがデジタル化されており、デザイナーに対する需要はますます高まっています。それとともに、期待される役割も幅広くなりつつあります。</p>
								<p class="p-message__text">クリエイティブで社会の可能性を切り開いていく。</p>
								<p class="p-message__text">変化の激しい現代、私達はデザインの力で社会を良い方向に変革していく企業を目指していきます。</p>
							</div>
						</div>
					</div>
				</section><!-- l-message -->

				<!-- l-company -->
				<section class="l-company p-company">
					<div class="p-company__inner l-inner">
						<div class="p-company__header">
							<h2 class="c-section-title">company</h2>
						</div>
						<div class="p-company__box">
							<dl class="p-company__lists p-company-list">

								<!-- SCFの繰り返しフィールド -->
								<?php $company_items = SCF::get('company_items'); ?>
								<!-- <?php var_dump($company_items); ?> -->
								<?php foreach($company_items as $company_item): ?>
									<!-- <?php var_dump($company_item); ?> -->
									<div class="p-company-list__block">
										<dt class="p-company-list__title"><?php echo $company_item['company_title']; ?></dt>
										<dd class="p-company-list__content"><?php echo $company_item['company_content']; ?></dd>
									</div>
								<?php endforeach; ?>

							</dl>
						</div>
						<div class="p-company__google-map">
							<div class="p-google-map__iframe">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d103758.47625834653!2d139.67186105964078!3d35.641224427528414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ccfbfa839cd%3A0x47f236c6a84df9e2!2z77yq77yy5p2x5Lqs57eP5ZCI55eF6Zmi!5e0!3m2!1sja!2sjp!4v1646577858313!5m2!1sja!2sjp"
									style="border:0;"
									allowfullscreen=""
									loading="lazy">
								</iframe>
							</div>
						</div>
					</div>
				</section><!-- l-company -->

				<!-- l-contact -->
				<?php get_template_part('./template-parts/content', 'contact'); ?>
				<!-- l-contact -->

			</main><!-- l-min-height -->

<?php get_footer(); ?>