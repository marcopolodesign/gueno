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

		<section class="instagram-feed-container mv5 container-xs mb7">
			<div class="flex jic column-mobile gram-text-container">
				<a href="http://instagram.com/somosgueno" target="_blank" class="flex m-auto mb4 no-deco">
					<?php get_template_part('template-parts/content/insta');?>
					<h2 class="f3 black tc">@SomosGüeno ✨. Follow us on our day to day </h2>
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

	<footer id="colophon" class="site-footer container-xs">
		<div class="footer-inner flex column-mobile items-stretch pv3">
				<div class="footer-location flex flex-column justify-between pr3-ns">
					<h2 class="f3">📍<br>
						🇺🇸 San Fransisco,  USA<br>
						🇦🇷 Buenos Aires, ARG 
					</h2>
					<h2 class="f2">
						Hecho con ❤ en y para LatAm!
					</h2>
				</div>
				<div class="footer-nav-1 nav ml3 pr3">
					<ul>
						<li>
							<a>Crypto Compliance</a>
						</li>
						<li>
							<a>Contact Us 📩</a>
						</li>
						<li>
							<a>Message Us 📲</a>
						</li>
					</ul>
				</div>
				<div class="footer-nav-2 nav ml3 pr3">
					<ul>
						<li>
							<a>Nosotros</a>
						</li>
						<li>
							<a>Blog 📖</a>
						</li>
						<li>
							<a>Estamos contratando!</a>
						</li>
					</ul>
				</div>
				<div class="footer-social w-10-ns">
					<ul class="flex flex-column justify-between h-100 list-none items-stretch ml3">
						<li>
							<a>IN</a>
						</li>
						<li>
							<a>TWT</a>
						</li>
						<li>
							<a>IG</a>
						</li>
						<li>
							<a>TY</a>
						</li>
					</ul>
				</div>
		</div>

		<div class="pv4 flex jic">
			<p>2022 ® Copyright Güeno LLC.</p>
			<a href="https://marcopolo.agency" class="no-deco black" target="_blank">Made by Marco Polo</a>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<script src="https://unpkg.com/@barba/core"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>




<?php wp_footer(); ?>

</body>
</html>
