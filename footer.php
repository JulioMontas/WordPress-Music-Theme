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

		<!-- <div class="footer-social-media">
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
		</div> -->
		<!-- .footer-social-media -->

		<div id="footer-sidebar1">
		  <?php
		    if(is_active_sidebar('footer-sidebar-1')){
		      dynamic_sidebar('footer-sidebar-1');
		    }
		  ?>
		</div>

		<div id="footer-sidebar2">
		  <?php
		    if(is_active_sidebar('footer-sidebar-2')){
		      dynamic_sidebar('footer-sidebar-2');
		    }
		  ?>
		</div>

		<div id="footer-sidebar3">
		  <?php
		    if(is_active_sidebar('footer-sidebar-3')){
		      dynamic_sidebar('footer-sidebar-3');
		    }
		  ?>
		</div>

		<div id="footer-sidebar4" class="site-info">
		  <?php
		    if(is_active_sidebar('footer-sidebar-4')){
		      dynamic_sidebar('footer-sidebar-4');
		    }
		  ?>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
