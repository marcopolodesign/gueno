<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Gueno
 */

?>

	</div> <!-- End Barba Container -->

		<section class="instagram-feed-container mv5 container-xs mb7 dn">
			<div class="flex jic column-mobile gram-text-container">
				<a href="http://instagram.com/somosgueno" target="_blank" class="flex m-auto mb4 no-deco">
					<?php get_template_part('template-parts/content/insta');?>
					<h2 class="f3 black tc">@SomosGüeno ✨. Follow us on our day to day</h2>
				</a>
			</div>
		
			<div class="instagram-feed flex flex-wrap justify-between column-mobile mv4">
			<!-- Loading... -->
			</div>
			<div class="flex items-center justify-center">
				<a href="http://instagram.com/somosgueno" target="_blank" class="tc center main-cta has-gradient relative no-deco">
					<p class="white">Follow us on the Gram</p>
				</a>
			</div>

		
		</section>

	<footer id="colophon" class="site-footer container-xs bg-black pv4">
		<div class="footer-inner flex column-mobile items-stretch justify-start pv3">
				<div class="footer-location flex flex-column justify-between pr3-ns w-30-ns">
					<h2 class="f4 white">
						🇺🇸 San Fransisco,  USA<br>
						🇦🇷 Buenos Aires, ARG 
					</h2>
					<h2 class="f4 white">
					<?php
					 $id =get_the_ID();
					 the_field('footer_text', $id);?>
					</h2>
				</div>
		
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'footer-left-menu',
						'container' => 'ul',
						'menu_class' => 'footer-nav-1 nav ml3 pr3 flex flex-wrap list-none w-40-ns',
					) );
				?>
				<div class="flex flex-column justify-between items-end w-30-ns">
					<div class="footer-social ml3-ns flex jic list-none items-stretch">
						<a href="https://ar.linkedin.com/company/somosgueno" target="_blank" class="social-icon lc-black-svg">
							<?php get_template_part('template-parts/content/linked');?>
						</a>

						<a href="https://twitter.com/somosgueno" target="_blank" class="social-icon db ml3">
							<?php get_template_part('template-parts/content/twitter');?>
						</a>
					</div>
					<div class="pt4 flex flex-column items-end page-aob">
						<a href="https://marcopolo.agency" class="no-deco white f6" target="_blank">Made by Marco Polo</a>
						<p class="white f6 pb2">2022 ® Copyright Güeno LLC.</p>
					</div>
				</div>
				
		</div>

		
	</footer><!-- #colophon -->
</div><!-- #page -->

<script src="https://unpkg.com/@barba/core"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>




<?php wp_footer(); ?>

</body>
</html>
