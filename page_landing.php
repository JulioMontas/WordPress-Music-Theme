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
	Template Name: Landing Page
*/

get_header(); ?>
	<div id="primary" class="content-area">
		<div class="landing-pagina">
			<div class="intro">
				<section>
					<img src="<?php the_field('artist_image'); ?>" alt="">
				</section>
				<section>
					<div>
					  <img src="<?php the_field('large_logo'); ?>" alt="">
					  <h2><?php the_field('subheaders'); ?></h2>
						<a href="#latest-song"> ^ </a>
					</div>
				</section>
			</div>

			<div class="latest-song" id="latest-song">
				<section>
					<ul class="main-nav">
			      <li class="dropdown">
			        <a href="#">Download</a>
			        <ul class="drop-nav">
			          <?php the_field('download'); ?>
			        </ul>
			      </li>
						<li class="dropdown">
			        <a href="#">Stream</a>
			        <ul class="drop-nav">
			          <?php the_field('stream'); ?>
			        </ul>
			      </li>
			    </ul>
				</section>
			</div>

			<div class="artist">
				<section>
					<div>
					  <p><?php the_field('artist_summary'); ?></p>
					  <a href="<?php the_field('artist_cta_url'); ?>" class="cta-white-line"><?php the_field('artist_cta_text'); ?></a>
				  </div>
				</section>

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

			<div class="gallery">
				<?php
	      $images = get_field('gallery_image_slide');

	      if( $images ): ?>
	      <div id="slider" class="flexslider">
	      	<ul class="slides">
	      			<?php foreach( $images as $image ): ?>
	      					<li>
	      							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
	      							<p><?php echo $image['caption']; ?></p>
	      					</li>
	      			<?php endforeach; ?>
	      	</ul>
					<div class="cta-fullWidth">
						<a href="<?php the_field('gallery_cta_url'); ?>" class="cta-black-line"><?php the_field('gallery_cta_text'); ?></a>
					</div>

	      </div>
	      <?php endif; ?>
			</div>

			<div class="event">
				<div class="summary-text">
					<p><?php the_field( "event_summary" ); ?></p>
				</div>
				<div class="pagina-event">
				<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content-page-w-title', 'page' );
				endwhile; // End of the loop.
				?>

				<?php
				$args = array(
				'post_type'      => 'event',
				'orderby'        => 'date',
				'order'          => 'ASC',
				'posts_per_page' => 5
				);

				// The Query
				$the_query = new WP_Query( $args );

				// The Loop
				echo "<table>";
				while ( $the_query->have_posts() ) : $the_query->the_post();
				?>
	        <tr>
	          <td><?php the_field( "month_day" ); ?></td>
	          <td><?php the_field( "day" ); ?></td>
						<td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
						<td><?php the_field( "state_and_city" ); ?></td>
	        </tr>
				<?php
				endwhile;
				echo "</table>";

				// Reset Post Data
				wp_reset_postdata();
				?>
				</div>

				<div>
				  <a href="<?php the_field( "event_cta_url" ); ?>" class="cta-white-line"><?php the_field( "event_cta_text" ); ?></a>
				</div>

			</div>

			<div class="contact">
				<div class="">
					<p><?php the_field( "contact_summary" ); ?></p>
					<?php the_field( "contact_info" ); ?>
				</div>
			</div>

			<div class="blog">
				<div class="">
				<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content-page-w-title', 'page' );
				endwhile; // End of the loop.
				?>

				<?php
				$args = array(
				'post_type'      => 'post',
				'orderby'        => 'menu_order',
				'order'          => 'ASC',
				'posts_per_page' => 3
				);

				// The Query
				$the_query = new WP_Query( $args );

				// The Loop
				echo "<div>";
				while ( $the_query->have_posts() ) : $the_query->the_post();
				?>
				<li><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute( array( 'before' => 'Permalink to: ', 'after' => '' ) ); ?>"><?php the_title(); ?></a></li>
				<?php
				endwhile;
				echo "</div>";

				// Reset Post Data
				wp_reset_postdata();
				?>
				</div>
				<a href="#"></a>
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
