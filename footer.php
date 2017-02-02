<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sonia_Choi_Music
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="footer-social-media">
			<section>
				<form class="" action="index.html" method="post">
					<input type="name" name="" value="">
					<button type="button" name="button">Subscribe</button>
				</form>

				 <nav>
					 <ul>
						 <li><a href="#"><img src="/images/logo-1.png" alt="logo"></a></li>
						 <li><a href="#"><img src="/images/logo-2.png" alt="logo"></a></li>
						 <li><a href="#"><img src="/images/logo-3.png" alt="logo"></a></li>
						 <li><a href="#"><img src="/images/logo-4.png" alt="logo"></a></li>
	           <li><a href="#"><img src="/images/logo-5.png" alt="logo"></a></li>
					 </ul>
				 </nav>
			</section>
		</div><!-- .footer-social-media -->

		<div class="site-info">
			<?php printf( esc_html__( 'Sonia Choi 2017 | Design & Build by %2$s.', 'sonia-choi-music-2017' ), 'sonia-choi-music-2017', '<a href="http://twitter.com/juliomontas" rel="designer">Julio Montas</a>' ); ?>
		</div><!-- .site-info -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
