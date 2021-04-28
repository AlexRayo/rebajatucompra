<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> style="max-width: 1920px; margin: auto; "<?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<header class="bg-primary">
	<div id="navbar" class="navbar-custom position-relative py-md-2 bg-primary d-flex align-items-center transition justify-content-between mx-auto" id="header" style="z-index: 100; max-width: 1500px;">
		
	<!-- MENU -->
		<div class="col-4 col-md-5 d-flex align-items-center" style="z-index: 999;">
			<div class="icon-menu">
				<span class="icon-line"></span>
				<span class="icon-line"></span>
				<span class="icon-line"></span>
			</div>
			<p class="d-none d-lg-block ml-3 mb-0" id="text-icon-menu"><strong>Ver productos y servicios</strong></p>
		</div>
		<div id="menu" class="menu-container position-absolute col-md-4 p-0">				
			<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'position-absolute',
						'container_id'    => '',
						'menu_class'      => 'main-menu',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
			?>
		</div>

		<!-- LOGO -->
		<?php if ( ! has_custom_logo() ) { ?>
		<?php if ( is_front_page() && is_home() ) : ?>
			<h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h2>
		<?php else : ?>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
		<?php endif; ?>
		<?php
		} else {
			echo '<div class="col-4 col-md-2 text-center">';
			the_custom_logo();
			echo '</div>';
		}
		?>
		<!-- SEARCH BAR -->
		<div class="d-flex justify-content-end col-4 col-lg-5">
			<?php dynamic_sidebar( 'Header Search' ); ?>
		</div>
	<style>footer a:hover {color: #48bb78;}</style>
	<!-- If IE 9- is used do next, otherwise the code bellow is ignored-->	
    <!--[if IE]>
    <script type="text/javascript">
    alert('Este sitio no funciona apropiadamente en InternetExplorer 9 o inferior');
    </script>
    <![endif]-->
	</div>
	</header>