<!-- next_post_link()...現在の投稿から見て日付順で次の投稿を表示する -->
<!-- next_post_link($format, $link, $in_same_term, $excluded_terms, $taxonomy ); -->
<!-- $format...リンクの文字列の書式。 -->
<!-- $link...リンクのテキスト -->

<div class="l-single-pagination p-single-pagination">
  <div class="p-single-pagination__inner">

    <div class="p-single-pagination__previous">
      
      <?php if(get_next_post()): ?>
        <!-- %link...aタグで表示させる記述 -->
        <?php next_post_link('%link', 'PREV'); ?>
      <?php endif; ?>
      <!-- <a href="" rel="next">PREV</a> -->
    </div>

    <div class="p-single-pagination__next">
      <?php if(get_previous_post()): ?>
        <?php previous_post_link('%link', 'NEXT'); ?>
      <?php endif; ?>
      <!-- <a href="" rel="prev">NEXT</a> -->
    </div>

  </div>
</div>