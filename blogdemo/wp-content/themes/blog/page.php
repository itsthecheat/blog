<?php get_header() ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div id="outer-content">
      <div class="col-sm-12" id="site-content">
      <h3 id="content-header">
        <a href='<?php the_permalink() ?>'><?php the_title_attribute() ?></a>
      </h3>
      <?php get_template_part('template-parts/content', ''); ?>
      </div>
    </div>

  <?php endwhile; else : ?>
    <?php get_template_part( 'template-parts/content', 'none' ); ?>
  <?php endif; ?>

<?php get_footer() ?>



