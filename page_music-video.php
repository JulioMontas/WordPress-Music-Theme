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
	Template Name: Music & Video
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



		<div class="pagina-music-video">

			  <div class="music-column">
					<?php
          if( have_rows('music_album') ):
              while( have_rows('music_album') ) : the_row();

          		// get layout
          		$layout = get_row_layout();

          		// layout_1
          		if( $layout === 'new_album' ): ?>

          			<section class="layout-1">
									<img src="<?php the_sub_field('album_cover'); ?>" alt="">
									<h2><?php the_field('album_title'); ?></h2>
									<p><?php the_sub_field('album_summary'); ?></p>
									<table><?php the_sub_field('album_tracks'); ?></table>
									<div class="space">
										<a class="cta-white-line" href="<?php the_sub_field('album_download_url'); ?>">Download</a>
									</div>
          			</section>

          		<?php // layout_2
          		elseif( $layout === 'soundcloud' ): ?>

          			<section class="layout-2">
          				<div class=""><?php the_sub_field('soundcloud_embed'); ?></div>
          			</section>

          		<?php endif;
              endwhile;
          endif;
          ?>
			  </div>



			  <div class="video-column">
					<?php
          if( have_rows('music_video') ):
              while( have_rows('music_video') ) : the_row();

          		// get layout
          		$layout = get_row_layout();

          		// layout_1
          		if( $layout === 'youtube' ): ?>

          			<section class="layout-1">
									<div class=""><?php the_sub_field('youtube_embed'); ?></div>
          			</section>

          		<?php // layout_2
          		elseif( $layout === 'vimeo' ): ?>

          			<section class="layout-2">
          				<div class=""><?php the_sub_field('vimeo_embed'); ?></div>
          			</section>

          		<?php endif;
              endwhile;
          endif;
          ?>
			  </div>

		</div><!-- .pagina-music-video -->




	</div><!-- #primary -->
<?php
get_footer();
