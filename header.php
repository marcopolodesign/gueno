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
	
	<header id="masthead" class="site-header flex jic container pt3">
			<div class="logo">
				<p>GUENO</p>
			</div>

			<div class="header-nav flex jic">
				<a>
					<p>Crypto Compliance</p>
				</a>
				<a class="mh3 main-cta bg-main-color">
					<p>Contact Sales</p>
				</a>
				<a><?php get_template_part('template-parts/content/insta-icon');?></a>
			</div>

	</header><!-- #masthead -->

	<div class="cursor"></div>
	<div class="pre-load bg-main-color"></div>
	<div class="pre-load bg-white"></div>

	<div data-barba="wrapper">
