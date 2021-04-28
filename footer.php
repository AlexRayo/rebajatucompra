<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<footer class="text-center pt-2 pb-1 bg-secondary" style="color: #f1f1f1;">

	<?php dynamic_sidebar( 'Bottom Block' ); ?>

</div><!-- wrapper end -->

</footer><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>
<style>
	.category-thumbnail{ max-height: 200px; overflow: hidden; }
</style>
</html>

