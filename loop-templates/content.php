<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article class="mb-5 pb-2 border-bottom mx-auto" style="max-width: 750px;" <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="entry-header">

		<?php
		the_title(
			sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h2>'
		);
		?>

		<?php if ( 'post' === get_post_type() ) : ?>

			<div class="entry-meta">
				<!-- <?php understrap_posted_on(); ?> -->
			</div><!-- .entry-meta -->

		<?php endif; ?>

	</div><!-- .entry-header -->
	<div class="thumbnail">
		<a href="<?php the_permalink(); ?>">
			<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
		</a>
	</div>
	<div class="entry-content">

		<?php the_excerpt(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
