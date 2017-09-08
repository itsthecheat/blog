<?php get_header() ?>



   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <h3>
          <a href='<?php the_permalink() ?>'><?php the_title() ?></a>
        </h3>

        <p><?php get_template_part('template-parts/content', ''); ?></p>

  <?php endwhile; else : ?>

            <?php get_template_part( 'template-parts/content', 'none' ); ?>
  <?php endif; ?>


<?php get_footer() ?>



