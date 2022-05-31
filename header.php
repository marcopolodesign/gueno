<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gueno
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://unpkg.com/tachyons@4.12.0/css/tachyons.min.css"/>
	
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	
	<header id="masthead" class="site-header flex jic container pa4 bg-black-g fixed top-0 left-0 w-100 z-5">
			<div class="logo">
				<p>GUENO</p>
			</div>

		

				<nav>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'header-left-menu',
						'container' => 'ul',
						'menu_class' => 'header-nav w-max ml-auto mr-0 flex jic list-none',
					) );
					?>
				</nav>		
	</header><!-- #masthead -->

	<div class="cursor"></div>
	<div class="pre-load bg-main-color"></div>
	<div class="pre-load bg-white"></div>

	<?php get_template_part('template-parts/contact'); ?>

	<div data-barba="wrapper">
