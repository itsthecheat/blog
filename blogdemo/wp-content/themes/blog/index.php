<?php get_header() ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div id="outer-content">
      <div class="col-sm-12" id="site-content">
      <h2 id="content-header">
        <a href='<?php the_permalink() ?>'><?php the_title() ?></a>
      </h2>
      <p id="content-date"><?php the_time( 'l, F j, Y' ); ?></p>

      <?php get_template_part('template-parts/content', ''); ?>
      </div>
    </div>

  <?php endwhile; else : ?>

            <?php get_template_part( 'template-parts/content', 'none' ); ?>
  <?php endif; ?>

<?php get_footer() ?>



