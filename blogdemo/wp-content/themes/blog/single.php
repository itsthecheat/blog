<?php get_header() ?>

<?php
  if( have_posts() ) {
    while( have_posts() ) {
      the_post();
      get_template_part( 'template-parts/content', 'single' );
    }
  }
  else {
    get_template_part( 'template-parts/content', 'none' );
  }
?>
<div class="comments">
  <?php comments_template(); ?>
</div>

<?php get_footer() ?>
