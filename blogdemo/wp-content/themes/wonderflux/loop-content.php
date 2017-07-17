<?php
/**
 * Wonderflux loop content template part
 *
 * Customise this in your child theme by:
 * - Using the Wonderflux hooks in this file - there are file specific and general ones
 * - Using the 'loop-content' template part 'loop-content-404.php' or 'loop-content.php' (fallback if location specific file not available)
 * - Copying this file to your child theme and amending - it will automatically be used instead of this file
 *
 * @package Wonderflux
 */
?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Read %s', 'wonderflux' ), the_title_attribute( 'echo=0' ) ); ?>"><?php the_title(); ?></a></h1>

	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'wonderflux' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'wonderflux' ), 'after' => '</div>' ) ); ?>
	</div>

	<?php
	if ( is_single() && has_tag() ) {
		echo '<div class="tag-content">';
			the_tags( '<p>Tags: ', ', ', '</p>' );
		echo '</div>';
	}
	?>

</div>

<?php comments_template( '', true ); ?>