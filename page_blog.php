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
	Template Name: Blog_ 
*/

get_header(); ?>
	<div id="primary" class="content-area">

		<div class="pagina-biography">

			<div class="intro">
				<section>
					<span>
						<p><?php the_field('intro_summary'); ?></p>
					</span>
				</section>
			</div>

			<div class="artist-image">
				<section>
					<div>
						<?php
						$images = get_field('artist_image_slide');

						if( $images ): ?>
								<div class="slider">
										<ul>
												<?php foreach( $images as $image ): ?>
														<li>
																<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
																<p><?php echo $image['caption']; ?></p>
														</li>
												<?php endforeach; ?>
										</ul>
								</div>
						<?php endif; ?>
					</div>
				</section>
			</div>

			<div class="full-summary">
				<section>
					<span>
						<p><?php the_field('full_summary'); ?></p>
					</span>
				</section>
			</div>

			<div class="songs-credits">
				<section>
					<h3>Songs Credits</h3>
				</section>
				<section>
					<?php

					// FROM: http://wpbeaches.com/create-tabbed-content-in-wordpress-with-acf-and-tabslet/

					echo '<div class="tabs">
					        <ul class="horizontal">';
					if( have_rows('tabs_song_credits') ):
					        $i = 1;
					        while ( have_rows('tabs_song_credits' ) ) : the_row();
					echo '<li><a href="#tab-' . $i . '">' . get_sub_field( "tab_link" ) . '</a></li>';
					        $i++;
					        endwhile;
					echo '</ul>';
					        $i = 1;
					        while ( have_rows('tabs_song_credits') ) : the_row();
					echo '<div class="tab-content" id="tab-' . $i . '">' . get_sub_field( "tabbed_content" ) . '</div>';
					        $i++;
					        endwhile;
					echo '</div>';
					else :
					    // no rows found
					endif;
	        ?>
				</section>
			</div>

			<div class="awards">
				<section>
					<?php

					// FROM: http://wpbeaches.com/create-tabbed-content-in-wordpress-with-acf-and-tabslet/

					echo '<div class="tabs">
					        <ul class="horizontal">';
					if( have_rows('tabs_awards') ):
					        $i = 1;
					        while ( have_rows('tabs_awards' ) ) : the_row();
					echo '<li><a href="#tab-' . $i . '">' . get_sub_field( "tab_link" ) . '</a></li>';
					        $i++;
					        endwhile;
					echo '</ul>';
					        $i = 1;
					        while ( have_rows('tabs_awards') ) : the_row();
					echo '<div class="tab-content" id="tab-' . $i . '">' . get_sub_field( "tabbed_content" ) . '</div>';
					        $i++;
					        endwhile;
					echo '</div>';
					else :
					    // no rows found
					endif;
	        ?>
				</section>
				<section>
					<h3>Awards</h3>
				</section>
			</div>


		</div>


		<main id="main" class="site-main" role="main">
			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/content-page-no-title', 'page' );

			endwhile; // End of the loop.
			?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
