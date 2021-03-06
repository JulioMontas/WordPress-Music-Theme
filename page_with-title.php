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
	Template Name: Page With Title
*/

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main biography-pagina" role="main">

			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content-page-w-title', 'page' );

			endwhile; // End of the loop.
			?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
