
<h2><?php the_title() ?></h2>
<div class="content-single"><?php the_content(); ?></div>

<div class="row">
<ul  class="signature-text">
  <li>
    <a href="author.html">
      <span>
      <?php echo get_avatar( get_the_author_meta('ID'), 48, 'leslie' ); ?>
      </span>
      <?php the_author_posts_link(); ?>
    </a>
  </li>
  <li>
      on <?php the_time( 'F j, Y' ); ?>
  </li>
  <li>
      in <?php the_category( ' ' ); ?>
  </li>
</ul>
</div>
