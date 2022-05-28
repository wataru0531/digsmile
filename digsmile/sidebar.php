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
      <form class="c-search-form" role="search" method="get" action="<?php echo $top; ?>">
        <input class="c-search-form__input" type="text" name="s" placeholder="検索" value="<?php the_search_query(); ?>">
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
        <?php 
          $args = [
            'type' => 'yearly', //他に、'daily', 'weekly', 'yearly', 'postbypost', 'alpha'が設定可能
            'limit' => '10', //アーカイブを何件まで取得するか(typeに応じて、何日、何ヶ月、何年など）。デフォルトはnullで、あるだけ取得
            'format' => 'custom', //<a>タグを何でくくるかを設定。デフォルトはhtml。他に、'link' (<link> tag), 'option' (<option> tag), 'custom'が設定できる
            'before' => '<li class="p-sidebar-archive__item">', //デフォルトは''。<li><a>~</a></li>以外の形で<a>タグをくくりたいときに、設定する
            'after' => '</li>', //同上
            'show_post_count' => false, //アーカイブ件数を表示するかしないか. 表示させたい場合はtrueに．
            'echo' => '1', //関数で取得した値を出力するかしないか．したくないときは、'0'またはfalse指定．
            'order' => 'DESC', //古い順に出すか、新しい順に出すか。
            'post_type' => 'post', //デフォルトは'post'。
          ];
        ?>
        <?php wp_get_archives($args); ?>
      </ul>
    </div>

    <div class="p-sidebar-blog__category p-sidebar-category">
      <div class="p-sidebar-category__header">
        <h3 class="c-section-title">category</h3>
      </div>
      <ul class="p-sidebar-category__items">
        <?php
          // カテゴリー全取得
          $categories = get_categories();
          // var_dump($categories);
        ?>
        <?php foreach($categories as $category): ?>
        <li class="p-sidebar-category__item">
          <a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</aside>