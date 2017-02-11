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
			          <?php the_field('Stream'); ?>
			        </ul>
			      </li>
			    </ul>

				</section>
			</div>


			<div class="artist">
				<section>
					<div>
					  <p><?php the_field('summary'); ?></p>
					  <a href="#">Read More</a>
				  </div>
				</section>

				<section>
					<div>
  					<?php
  		      $images = get_field('image_slide');

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
	      $images = get_field('images');

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
	      </div>
	      <?php endif; ?>
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
