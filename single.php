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
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		<div class='event-excerpt'>
		<section class="">
			<p>
			<?php if( get_field( "location" ) ): ?>
					<strong>Location: </strong><?php the_field( "location" ); ?>
			 <?php endif; ?>

			<?php if( get_field( "time_start" ) ): ?>
					<strong>Time Start: </strong><?php the_field( "time_start" ); ?>
			<?php endif; ?>

			<?php if( get_field( "time_end" ) ): ?>
					 <strong>Time End: </strong><?php the_field( "time_end" ); ?>
			<?php endif; ?>
			</p>

			<?php if( get_field( "artist" ) ): ?>
					<p>Speaker(s): <?php the_field( "artist" ); ?></p>
			<?php endif; ?>

			<?php if( get_field( "topic" ) ): ?>
					<p>Topic(s): <?php the_field( "topic" ); ?></p>
			<?php endif; ?>

			<?php if( get_field( "invite" ) ): ?>
					<p><a href="<?php the_field( 'invite' ); ?>" class="button"><i class="icon-file-pdf"></i> Invite</a></p>
			<?php endif; ?>

		</section>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
