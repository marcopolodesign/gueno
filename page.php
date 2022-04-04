<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Gueno
 */

get_header();
?>

<main id="main" data-barba="container" data-barba-namespace="page" class="page no-mt" bg-color="white">

	<?php get_template_part('template-parts/reusable-content'); ?>

</main>

<?php

get_footer();
