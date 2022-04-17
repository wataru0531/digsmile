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

<section class="l-contact p-contact">
  <div class="p-contact__inner l-inner">
    <div class="p-contact__box">
      <figure class="p-contact__img c-image-show js-inview">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact.jpg" alt="">
        <span class="c-layer-black"></span>
        <span class="c-layer-yellow"></span>
      </figure>
      <div class="p-contact__contents">
        <div class="p-contact__header">
          <h2 class="c-section-title">contact</h2>
        </div>
        <div class="p-contact__description"> 制作の依頼、取材の依頼、IRや採用についての連絡・お問い合わせはコンタクトページから承っております。まずはお気軽にご連絡ください。担当者から改めて返信いたします。 </div>
        <div class="p-contact__btn">
          <a href="<?php echo $contact; ?>" class="c-btn">read&nbsp;more</a>
        </div>
      </div>
    </div>
  </div>
</section>