<div class="l-breadcrumb p-breadcrumb">
  <div class="p-breadcrumb__inner l-inner">
  <?php
      if(!is_front_page() && function_exists('bcn_display')){
        bcn_display();
      }
    ?>
  </div>
</div>