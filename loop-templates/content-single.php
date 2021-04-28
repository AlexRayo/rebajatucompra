<?php
/**
 * Single post partial template
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">



		<div class="entry-meta">

			<!-- <?php understrap_posted_on(); ?> -->

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<div class="thumbnail" id="thumbnail">
		<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
	</div>
	<?php the_title( '<h1 class="entry-title pb-2 border-bottom text-xl text-primary">', '</h1>' ); ?>
	<div class="entry-content">

		<?php the_content(); ?>

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
<style>
	#thumbnail:hover { cursor: pointer;}
	</style>
