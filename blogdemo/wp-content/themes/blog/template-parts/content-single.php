
<div class="content-single">
  <h2 id="content-single-title"><?php the_title() ?></h2>

  <ul class="signature-text">
    <li>
        <span>
        <?php echo get_avatar( get_the_author_meta('ID'), 30, 'leslie' ); ?>
        </span>
        <?php the_author_posts_link(); ?>
    </li>
    <li>
        on <?php the_time( 'F j, Y' ); ?>
    </li>
    <li>
        in <?php the_category( ' ' ); ?>
    </li>
  </ul>

  <?php the_content(); ?></div>


