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

<aside class="l-sidebar-blog p-sidebar-blog">
  <div class="p-sidebar-blog__inner">
    <div class="p-sidebar-blog__search-form">
      <form class="c-search-form" role="search" method="get" action="">
        <input class="c-search-form__input" type="text" name="s" placeholder="検索" value="">
        <button type="submit" class="c-search-form__btn">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/search.png" alt="">
        </button>
      </form>
    </div>
    <div class="p-sidebar-blog__archive p-sidebar-archive">
      <div class="p-sidebar-archive__header">
        <h3 class="c-section-title">archive</h3>
      </div>
      <ul class="p-sidebar-archive__items">
        <li class="p-sidebar-archive__item">
          <a href="">2022</a>
        </li>
        <li class="p-sidebar-archive__item">
          <a href="">2021</a>
        </li>
        <li class="p-sidebar-archive__item">
          <a href="">2020</a>
        </li>
        <li class="p-sidebar-archive__item">
          <a href="">2019</a>
        </li>
        <li class="p-sidebar-archive__item">
          <a href="">2018</a>
        </li>
        <li class="p-sidebar-archive__item">
          <a href="">2017</a>
        </li>
        <li class="p-sidebar-archive__item">
          <a href="">2016</a>
        </li>
        <li class="p-sidebar-archive__item">
          <a href="">2015</a>
        </li>
        <li class="p-sidebar-archive__item">
          <a href="">2014</a>
        </li>
        <li class="p-sidebar-archive__item">
          <a href="">2013</a>
        </li>
      </ul>
    </div>
    <div class="p-sidebar-blog__category p-sidebar-category">
      <div class="p-sidebar-category__header">
        <h3 class="c-section-title">category</h3>
      </div>
      <ul class="p-sidebar-category__items">
        <li class="p-sidebar-category__item">
          <a href="">web</a>
        </li>
        <li class="p-sidebar-category__item">
          <a href="">LP</a>
        </li>
        <li class="p-sidebar-category__item">
          <a href="">DTP</a>
        </li>
      </ul>
    </div>
  </div>
</aside>