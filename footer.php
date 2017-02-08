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
		<div id="footer-sidebar1" class="footer-shop-btn">
		  <?php
		    if(is_active_sidebar('footer-sidebar-1')){
		      dynamic_sidebar('footer-sidebar-1');
		    }
		  ?>
		</div>

		<div id="footer-sidebar2" class="footer-newsletter">
		  <?php
		    if(is_active_sidebar('footer-sidebar-2')){
		      dynamic_sidebar('footer-sidebar-2');
		    }
		  ?>
		</div>

		<div id="footer-sidebar3" class="footer-social-media">
		  <?php
		    if(is_active_sidebar('footer-sidebar-3')){
		      dynamic_sidebar('footer-sidebar-3');
		    }
		  ?>
		</div>

		<div id="footer-sidebar4" class="footer-info">
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
