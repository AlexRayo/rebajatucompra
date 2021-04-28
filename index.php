<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="wrapper p-0" id="index-wrapper">
	<!-- cover -->
	<section class="cover overflow-hidden position-relative d-flex align-items-center" style="height: 500px;">

	<div class="col-12" style="z-index: 2;">
	<div class="px-md-3 mx-auto w-100 text-secondary" style="max-width: 1500px;">
		<?php dynamic_sidebar( 'Cover' ); ?>
	</div>
		
	</div>
	<?php dynamic_sidebar( 'Cover Image' ); ?>
	</section>

	<div class="<?php echo esc_attr( $container ); ?> p-0 m-0 mx-auto" id="content" tabindex="-1">

		<div class="">

			<!-- Do the left sidebar check and opens the primary div -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">
			<div class="text-center col-11 col-md-5 mx-auto my-5">
				<h2 class="text-lg text-secondary text-uppercase"><strong>Todo lo que necesitas</strong><br>en un solo lugar</h2>
			</div>
			  <!--  BLOCK CATEGORIES  -->
			<div class="home-categories row p-0 m-0 mb-5 justify-content-between">
				<!-- 1/3 blocks on desktop -->
				<?php dynamic_sidebar( 'Home Categories' ); ?>
			</div>	
			<!-- BLOCKS -->
			</div>
			
			</main><!-- #main -->

		</div><!-- .row -->

	</div><!-- #content -->

	<div class="bg-secondary py-5 px-1 px-md-0">
		<div class="container row p-0 m-0 mx-auto d-flex justify-content-between align-items-center">
			<div class="text-white col-12 col-md-6 mx-auto">
				<h2 class="text-uppercase pb-2 mb-2" style="border-bottom: 5px solid #F05454"><strong>Ofertas actualizadas</strong> <br>todos los días</h2>
				<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga enim nobis necessitatibus, voluptatem laboriosam et a aliquid consectetur officia deserunt!</p>
				<button class="btn btn-primary float-right mt-2 mb-2 mb-md-0"><a href="" class="text-white">Ver ofertas ></a></button>
			</div>
			<div class="col-12 col-md-6 mx-auto" style="overflow-x:hidden">
				<img  src="http://127.0.0.1/wordpress/wp-content/uploads/2021/02/attractive-young-female-designer-working-remotely-updating-website-using-laptop.jpg" alt="">
			</div>
		</div>
	</div>

	<div class="py-5 px-1 px-md-0">
		<div class="container row p-0 m-0 mx-auto d-flex justify-content-between align-items-center">
			<div class="col-12 col-md-6 mb-5 mb-md-0">
				<h2 class="text-uppercase pb-2 mb-2" style="border-bottom: 5px solid #F05454"><strong>Sobre nosotros</strong></h2>
				<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga enim nobis necessitatibus, voluptatem laboriosam et a aliquid consectetur officia deserunt!</p>
				<button class="btn btn-secondary float-right mt-2 mb-2 mb-md-0"><a href="" class="text-white">Más información ></a></button>
			</div>
			<div class="col-6 col-md-2 mx-auto" style="overflow-x:hidden">
				<img  src="http://127.0.0.1/wordpress/wp-content/uploads/2021/02/LOGO-rebaja-tu-compra.svg" alt="">
			</div>
		</div>
	</div>
</div><!-- #index-wrapper -->

<?php
get_footer();
