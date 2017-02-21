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

		<main id="main" class="site-main" role="main">
			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content-page-w-title', 'page' );

			endwhile; // End of the loop.
			?>
		</main><!-- #main -->

		<div class="pagina-gallery">
			<section class="tabs">
				<?php

				// FROM: http://wpbeaches.com/create-tabbed-content-in-wordpress-with-acf-and-tabslet/

				echo '<div class="tabs">
				        <ul class="horizontal">';
				if( have_rows('tabs') ):
				        $i = 1;
				        while ( have_rows('tabs' ) ) : the_row();
				echo '<li><a href="#tab-' . $i . '">' . get_sub_field( "tab_link" ) . '</a></li>';
				        $i++;
				        endwhile;
				echo '</ul>';
				        $i = 1;
				        while ( have_rows('tabs') ) : the_row();
				echo '<div id="tab-' . $i . '">' . get_sub_field( "tabbed_content" ) . '</div>';
				        $i++;
				        endwhile;
				echo '</div>';
				else :
				    // no rows found
				endif;

        ?>
      </section><!-- .tabs -->
		</div><!-- .pagina-gallery -->

	</div><!-- #primary -->
<?php
get_footer();
