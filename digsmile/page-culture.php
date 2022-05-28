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

			<!-- l-breadcrumb -->
			<?php get_template_part('template-parts/content', 'breadcrumb'); ?>
			<!-- l-breadcrumb -->

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

							<!-- SCF 繰り返しフィールド -->
							<?php $system_items = SCF::get('system_items'); ?>
							<!-- <?php var_dump($system_items); ?> -->
							<?php foreach($system_items as $system_item): ?>
								<li class="p-system__item p-card-system">
									<div class="p-card-system__block">
										<figure class="p-card-system__img">
											<img src="<?php echo wp_get_attachment_url($system_item['system_image']); ?>" alt="<?php echo $system_item['system_title']; ?>">
										</figure>
										<div class="p-card-system__subtitle"><?php echo $system_item['system_subtitle']; ?></div>
									</div>
									<div class="p-card-system__body">
										<h3 class="p-card-system__title"><?php echo $system_item['system_title']; ?></h3>
										<div class="p-card-system__description"><?php echo nl2br($system_item['system_description']); ?></div>
									</div>
								</li>
							<?php endforeach; ?>
							<!-- SCF 繰り返しフィールド -->

						</ul>
					</div>
				</section><!-- l-system -->

				<!-- l-employee -->
				<section class="l-employee p-employee">
					<div class="p-employee__inner l-inner">
						<div class="p-employee__header">
							<h2 class="c-section-title">employee</h2>
						</div>
						<ul class="p-employee__items p-lists-grid-03-noGap">

							<!-- SCF繰り返しフィールド -->
							<?php $employees = SCF::get('employee_items'); ?>
							<!-- <?php var_dump($employee); ?> -->
							<?php foreach($employees as $employee): ?>
								<li class="p-employee__item p-card-employee">
									<figure class="p-card-employee__img c-image-show js-inview">
										<img src="<?php echo wp_get_attachment_url($employee['employee_image']); ?>" alt="<?php echo $employee['employee_name']; ?>">
										<span class="c-layer-yellow"></span>
									</figure>
									<div class="p-card-employee__block">
										<span class="p-card-employee__position"><?php echo $employee['employee_position']; ?></span>
										<div class="p-card-employee__date"><?php echo $employee['employee_date']; ?>入社</div>
										<h3 class="p-card-employee__name"><?php echo $employee['employee_name']; ?></h3>
										<div class="p-card-employee__kana"><?php echo $employee['employee_kana']; ?></div>
									</div>
								</li>
							<?php endforeach; ?>
							<!-- SCF 繰り返しフィールド -->

						</ul>
					</div>
				</section><!-- l-employee -->

				<!-- l-contact -->
				<?php get_template_part('template-parts/content', 'contact'); ?>
				<!-- l-contact -->
				
			</main><!-- l-min-height -->

<?php get_footer(); ?>