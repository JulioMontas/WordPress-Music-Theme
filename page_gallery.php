<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sonia_Choi_Music
 */

/*
	Template Name: Gallery
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main gallery-pagina" role="main">

			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<script>
	function openTap(tapName) {
	    var i;
	    var x = document.getElementsByClassName("tap");
	    for (i = 0; i < x.length; i++) {
	       x[i].style.display = "none";
	    }
	    document.getElementById(tapName).style.display = "block";
	}
	</script>

<?php
get_footer();
