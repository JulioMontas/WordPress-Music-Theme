<?php
/**
 * The template for displaying all single events
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

			get_template_part( 'template-parts/content-page-no-title', get_post_format() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		<div class="event-preview">
			<div class="event-info">

				<section class="venue">
					<p><small>Venue</small></p>
					<h5><b><?php the_field( 'location_name' ); ?></b></h5>
					<p><?php the_field( 'address' ); ?></p>
					<p><?php the_field( 'state_and_city' ); ?> <?php the_field( 'zipcode' ); ?></p>
				</section>

				<section class="date">
					<p><small>Date</small></p>
					<h5><b><?php the_field( 'month_day' ); ?> <?php the_field( 'year' ); ?> </b></h5>
					<p><?php the_field( 'time_start' ); ?> - <?php the_field( 'time_ends' ); ?></p>
				</section>

				<?php if ( get_field( 'tickets_url') ) { ?>
					<section class="tickets">
						<p><small>Tickets</small></p>
					  <a href="<?php the_field( 'tickets_url' ); ?>"><i class="fa fa-ticket fa-lg" aria-hidden="true"></i></a>
					</section>
		     <?php } ?>
			</div>

			<div class="event-title">
				<h2 ><?php the_title(); ?></h2>
			</div>

			<div class="details">

				<section class="one">
					<?php if ( get_field( 'description') ) { ?>
			      <?php the_field( 'description' ); ?>
		      <?php } ?>

				</section>

				<section class="two">
					<?php if ( get_field( 'poster_image') ) { ?>
			      <img src="<?php the_field( 'poster_image' ); ?>" />
		      <?php } ?>
				</section>

			</div>

			<div class="event-gallery">
				<?php
				$images = get_field('gallery');

				if( $images ): ?>
				<div id="slider" class="flexslider">
					<h2 style="text-align:center;">Gallery</h2>
					<ul class="slides">
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
			<div class="next-event">
				<p><small>More Event</small></p>
				<?php the_post_navigation(); ?>
			</div>

	 </div>

		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php
get_footer();
