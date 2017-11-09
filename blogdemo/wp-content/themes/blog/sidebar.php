  <div class="col-lg-4 col-md-4 col-sm-4" id="outer-sidebar">
  <div class="col-lg-12 col-md-12 col-sm-12" id="site-sidebar">
    <?php get_search_form(); ?>
    <?php dynamic_sidebar('mat-sidebar'); ?>
    <aside class="widget">
      <?php
      $attr = array (
          'width' => '25', //input only number, in pixel
          'height' => '25', //input only number, in pixel
          'margin' => '4', //input only number, in pixel
          'display' => 'horizontal', //horizontal | vertical
          'alignment' => 'center', //center | left | right
          'attr_id' => 'custom_icon_id', //add custom id to <ul> wraper
          'attr_class' => 'custom_icon_class', //add custom class to <ul> wraper
          'selected_icons' => array ( '4', '3', '5', '6' )
          //you can get the icon ID form All Icons page
      );
      if ( function_exists('cn_social_icon') ) echo cn_social_icon( $attr );
      ?>
    </aside>

  </div>
</div>

