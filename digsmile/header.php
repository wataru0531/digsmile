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

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  
  <!-- favicon.ico 16*16、32*32、48*48 -->
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" />
  <!-- タッチアイコン 180*180のpng -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/android-chrome-192x192.png">
  <!-- Android 192*192のpng-->
  <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/android-chrome-192x192.png">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- l-global-container -->
<div class="l-global-container">

  <!-- l-overlay -->
  <div class="l-overlay p-overlay js-overlay"></div>
  <!-- l-overlay -->
      
  <!-- l-drawer -->
  <nav class="l-drawer p-drawer js-drawer">
    <div class="p-drawer__inner">
      <div class="p-drawer__scroll">
        <div class="p-drawer__logo">
          <a href="<?php echo $top; ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-drawer.svg" alt="ロゴ画像">
          </a>
        </div>
        <ul class="p-drawer__items">
          <li class="p-drawer__item">
            <a href="<?php echo $about; ?>">about&nbsp;us</a>
          </li>
          <li class="p-drawer__item">
            <a href="<?php echo $works; ?>">works</a>
          </li>
          <li class="p-drawer__item">
            <a href="<?php echo $culture; ?>">culture</a>
          </li>
          <li class="p-drawer__item">
            <a href="<?php echo $topics; ?>">topics</a>
          </li>
          <li class="p-drawer__item">
            <a href="<?php echo $blog; ?>">blog</a>
          </li>
          <li class="p-drawer__item">
            <a href="<?php echo $contact; ?>">contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav><!-- l-drawer -->

  <!-- l-header -->
  <header class="l-header p-header js-header">
    <div class="p-header__inner">
      <?php if(is_front_page()): ?>
        <h1 class="p-header__logo">
          <span>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="ロゴ画像">
          </span>
        </h1>
      <?php else: ?>
        <div class="p-header__logo">
          <a href="<?php echo $top; ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="ロゴ画像">
          </a>
        </div>
      <?php endif; ?>

      <div class="p-header__hamburger p-header-hamburger js-hamburger">
        <button class="p-header-hamburger__btn c-hamburger-btn js-hamburger-btn">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div class="p-header-hamburger__menu c-hamburger-text js-hamburger-text">
          <div class="c-hamburger-text__inner">
            <span class="c-hamburger-text__menu">menu</span>
            <span class="c-hamburger-text__close">close</span>
          </div>
        </div>
      </div>
    </div>
  </header><!-- l-header -->
  
  <!-- l-page-top -->
  <div class="l-page-top p-page-top js-page-top">
    <button class="c-btn-arrow"></button>
  </div><!-- l-page-top -->
