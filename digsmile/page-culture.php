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

<?php get_header(); ?>

			<!-- l-mv-sub -->
			<div class="l-mv-sub p-mv-sub js-mv">
				<div class="p-mv-sub__background js-inview"></div>
				<figure class="p-mv-sub__img c-image-show js-inview">
					<picture>
						<source media="(min-width: 768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/culture_mv_pc.jpg">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/culture_mv_sp.jpg" alt="">
					</picture>
					<span class="c-layer-black"></span>
					<span class="c-layer-yellow"></span>
				</figure>
				<div class="p-mv-sub__titles">
					<h1 class="p-mv-sub__title">culture</h1>
					<div class="p-mv-sub__subtitle">社内文化</div>
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
							<span property="name">CULTURE</span>
						</a>
					</span>
				</div>
			</div>

			<!-- l-min-height -->
			<main class="l-min-height">

			<!-- l-communication -->
			<div class="l-communication p-communication">
					<div class="p-communication__inner l-inner">
						<div class="p-communication__header">
							<h2 class="c-section-title">communication</h2>
						</div>
						<div class="p-communication__block">
							<div class="p-communication__contents">
								<h3 class="p-communication__subtitle">タイトルが入ります。タイトルが入ります。</h3>
								<p class="communication__description"> テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。 </p>
							</div>
							<figure class="p-communication__img c-image-show js-inview">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/culture_section.jpg" alt="">
								<span class="c-layer-black"></span>
								<span class="c-layer-yellow"></span>
							</figure>
						</div>
					</div>
				</div><!-- l-communication -->

				<!-- l-system -->
				<section class="l-system p-system">
					<div class="p-system__inner l-inner">
						<div class="p-system__header">
							<h2 class="c-section-title">system</h2>
						</div>
						<ul class="p-system__items p-lists-grid-03">
							<li class="p-system__item p-card-system">
								<div class="p-card-system__block">
									<figure class="p-card-system__img">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/culture_system_environment.png" alt="">
									</figure>
									<div class="p-card-system__subtitle">environment</div>
								</div>
								<div class="p-card-system__body">
									<h3 class="p-card-system__title">社内環境</h3>
									<div class="p-card-system__description"> テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。 </div>
								</div>
							</li>
							<li class="p-system__item p-card-system">
								<div class="p-card-system__block">
									<figure class="p-card-system__img">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/culture_system_environment.png" alt="">
									</figure>
									<div class="p-card-system__subtitle">skill&nbsp;up</div>
								</div>
								<div class="p-card-system__body">
									<h3 class="p-card-system__title">スキルアップ支援</h3>
									<div class="p-card-system__description"> テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。 </div>
								</div>
							</li>
							<li class="p-system__item p-card-system">
								<div class="p-card-system__block">
									<figure class="p-card-system__img">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/culture_system_childcare.png" alt="">
									</figure>
									<div class="p-card-system__subtitle">childcare&nbsp;leave</div>
								</div>
								<div class="p-card-system__body">
									<h3 class="p-card-system__title">育児休暇</h3>
									<div class="p-card-system__description"> テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。 </div>
								</div>
							</li>
							<li class="p-system__item p-card-system">
								<div class="p-card-system__block">
									<figure class="p-card-system__img">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/culture_system_health.png" alt="">
									</figure>
									<div class="p-card-system__subtitle">health&nbsp;care</div>
								</div>
								<div class="p-card-system__body">
									<h3 class="p-card-system__title">健康管理</h3>
									<div class="p-card-system__description"> テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。 </div>
								</div>
							</li>
							<li class="p-system__item p-card-system">
								<div class="p-card-system__block">
									<figure class="p-card-system__img">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/culture_system_club.png" alt="">
									</figure>
									<div class="p-card-system__subtitle">club</div>
								</div>
								<div class="p-card-system__body">
									<h3 class="p-card-system__title">クラブ活動</h3>
									<div class="p-card-system__description"> テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。 </div>
								</div>
							</li>
							<li class="p-system__item p-card-system">
								<div class="p-card-system__block">
									<figure class="p-card-system__img">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/culture_system_dining.png" alt="">
									</figure>
									<div class="p-card-system__subtitle">cafeteria</div>
								</div>
								<div class="p-card-system__body">
									<h3 class="p-card-system__title">社内食堂</h3>
									<div class="p-card-system__description"> テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。 </div>
								</div>
							</li>
						</ul>
					</div>
				</section><!-- l-system -->

				<!-- l-voice -->
				<section class="l-voice p-voice">
					<div class="p-voice__inner l-inner">
						<div class="p-voice__header">
							<h2 class="c-section-title">voice</h2>
						</div>
						<ul class="p-voice__items p-lists-grid-03-noGap">
							<li class="p-voice__item p-card-voice">
								<figure class="p-card-voice__img c-image-show js-inview">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/culture_voice_01.jpg" alt="">
									<span class="c-layer-yellow"></span>
								</figure>
								<div class="p-card-voice__block">
									<span class="p-card-voice__position">マネージャー</span>
									<div class="p-card-voice__date">2015年12月入社</div>
									<h3 class="p-card-voice__name">山田 一郎</h3>
									<div class="p-card-voice__kana">yamada ichiro</div>
								</div>
							</li>
							<li class="p-voice__item p-card-voice">
								<figure class="p-card-voice__img c-image-show js-inview">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/culture_voice_02.jpg" alt="">
									<span class="c-layer-yellow"></span>
								</figure>
								<div class="p-card-voice__block">
									<span class="p-card-voice__position">デザイナー</span>
									<div class="p-card-voice__date">2010年1月入社</div>
									<h3 class="p-card-voice__name">山田 二郎</h3>
									<div class="p-card-voice__kana">yamada jiro</div>
								</div>
							</li>
							<li class="p-voice__item p-card-voice">
								<figure class="p-card-voice__img c-image-show js-inview">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/culture_voice_03.jpg" alt="">
									<span class="c-layer-yellow"></span>
								</figure>
								<div class="p-card-voice__block">
									<span class="p-card-voice__position">プログラマー</span>
									<div class="p-card-voice__date">2018年3月入社</div>
									<h3 class="p-card-voice__name">山田 三郎</h3>
									<div class="p-card-voice__kana">yamada saburo</div>
								</div>
							</li>
							<li class="p-voice__item p-card-voice">
								<figure class="p-card-voice__img c-image-show js-inview">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/culture_voice_04.jpg" alt="">
									<span class="c-layer-yellow"></span>
								</figure>
								<div class="p-card-voice__block">
									<span class="p-card-voice__position">営業</span>
									<div class="p-card-voice__date">2008年8月入社</div>
									<h3 class="p-card-voice__name">山田 四郎</h3>
									<div class="p-card-voice__kana">yamada siro</div>
								</div>
							</li>
							<li class="p-voice__item p-card-voice">
								<figure class="p-card-voice__img c-image-show js-inview">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/culture_voice_05.jpg" alt="">
									<span class="c-layer-yellow"></span>
								</figure>
								<div class="p-card-voice__block">
									<span class="p-card-voice__position">デザイナー</span>
									<div class="p-card-voice__date">2013年9月入社</div>
									<h3 class="p-card-voice__name">山田 吾郎</h3>
									<div class="p-card-voice__kana">yamada goro</div>
								</div>
							</li>
							<li class="p-voice__item p-card-voice">
								<figure class="p-card-voice__img c-image-show js-inview">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/culture_voice_06.jpg" alt="">
									<span class="c-layer-yellow"></span>
								</figure>
								<div class="p-card-voice__block">
									<span class="p-card-voice__position">営業</span>
									<div class="p-card-voice__date">2020年12月入社</div>
									<h3 class="p-card-voice__name">山田 六郎</h3>
									<div class="p-card-voice__kana">yamada rokuro</div>
								</div>
							</li>
						</ul>
					</div>
				</section><!-- l-voice -->

				<!-- l-contact -->
				<?php get_template_part('template-parts/content', 'contact'); ?>
				<!-- l-contact -->
				
			</main><!-- l-min-height -->

<?php get_footer(); ?>