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
			<a href="/" class="logo no-deco">
				<svg width="89" height="89" viewBox="0 0 89 89" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M44.5 74.0922C60.8435 74.0922 74.0925 60.8432 74.0925 44.4997C74.0925 28.1562 60.8435 14.9072 44.5 14.9072C28.1565 14.9072 14.9075 28.1562 14.9075 44.4997C14.9075 60.8432 28.1565 74.0922 44.5 74.0922Z" fill="#00FF00"/>
					<path d="M44.5 0C19.9226 0 0 19.9226 0 44.5C0 69.0773 19.9226 89 44.5 89C69.0773 89 89 69.0773 89 44.5C89 19.9226 69.0773 0 44.5 0ZM48.0259 20.4522C48.818 19.6734 49.7777 19.2848 50.905 19.2848C52.0324 19.2848 52.9817 19.6749 53.7575 20.4522C54.5318 21.2309 54.9189 22.1862 54.9189 23.3195C54.9189 24.4527 54.5303 25.4169 53.7575 26.2135C52.9817 27.01 52.0324 27.4075 50.905 27.4075C49.7777 27.4075 48.818 27.01 48.0259 26.2135C47.2338 25.4169 46.8377 24.4527 46.8377 23.3195C46.8377 22.1862 47.2338 21.2309 48.0259 20.4522ZM35.1594 20.4522C35.9515 19.6734 36.9113 19.2848 38.0386 19.2848C39.1659 19.2848 40.1153 19.6749 40.891 20.4522C41.6653 21.2309 42.0525 22.1862 42.0525 23.3195C42.0525 24.4527 41.6639 25.4169 40.891 26.2135C40.1153 27.01 39.1659 27.4075 38.0386 27.4075C36.9113 27.4075 35.9515 27.01 35.1594 26.2135C34.3673 25.4169 33.9713 24.4527 33.9713 23.3195C33.9713 22.1862 34.3673 21.2309 35.1594 20.4522V20.4522ZM59.3318 53.9533C59.3318 55.8297 58.9402 57.6349 58.16 59.3689C57.3798 61.1029 56.3133 62.6263 54.9649 63.9346C53.6166 65.2444 52.0442 66.2887 50.2509 67.0674C48.4575 67.8462 46.5322 68.2348 44.4718 68.2348C42.4115 68.2348 40.5306 67.8447 38.7194 67.0674C36.9083 66.2887 35.3374 65.2444 34.0054 63.9346C32.6734 62.6263 31.6172 61.1029 30.8355 59.3689C30.0553 57.6349 29.6637 55.8297 29.6637 53.9533V29.9025H37.7449V52.3602C37.7449 53.4222 37.9214 54.422 38.2744 55.3595C38.6275 56.2984 39.1036 57.1291 39.7044 57.8544C40.3036 58.5798 41.0201 59.1553 41.8493 59.5796C42.6785 60.0038 43.5536 60.2159 44.4703 60.2159C45.387 60.2159 46.3052 60.0038 47.1181 59.5796C47.9309 59.1553 48.6444 58.5798 49.263 57.8544C49.8815 57.1291 50.3666 56.2969 50.7196 55.3595C51.0726 54.422 51.2492 53.4222 51.2492 52.3602V29.9025H59.3304V53.9533H59.3318Z" fill="black"/>
				</svg>
			</a>

		
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
