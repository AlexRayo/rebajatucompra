<?php
/**
 * The right sidebar containing the main widget area
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! is_active_sidebar( 'right-sidebar' ) ) {
	return;
}

// when both sidebars turned on reduce col size to 3 from 4.
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<?php if ( 'both' === $sidebar_pos ) : ?>
	<div class="py-4 col-md-3 widget-area text-right d-none d-md-block" id="right-sidebar" role="complementary" style="border: solid 2px #f1f1f1;">
<?php else : ?>
	<div class="py-4 col-md-3 widget-area text-right d-none d-md-block" id="right-sidebar" role="complementary" style="border: solid 2px #f1f1f1;">
<?php endif; ?>
<?php dynamic_sidebar( 'right-sidebar' ); ?>

</div><!-- #right-sidebar -->
