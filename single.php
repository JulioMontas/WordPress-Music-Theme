<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Sonia_Choi_Music
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main blog-preview" role="main">

		<?php
		while ( have_posts() ) : the_post();

		  echo "<div class='blog-text-intro animated once bounceInDown'>";
			    echo "<h2>";
			     the_title();
			    echo "</h2>";
				  echo "<p>";
			    sonia_choi_music_2017_posted_on();
			    echo "</p>";
			echo "</div>";
			echo "<!-- .blog-text-intro -->";

			echo "<div class='blog-text-contect animated once fadeIn'>";
			the_post_thumbnail('larger');

			get_template_part( 'template-parts/content-page-no-title', get_post_format() );
			echo "</div>";
			echo "<!-- .blog-text-contect -->";


			echo "<div class='blog-more-post animated once fadeIn'>";
			  the_post_navigation();
			echo "</div>";
			echo "<!-- .blog-more-post -->";

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
