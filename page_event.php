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
	Template Name: Event
*/

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
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
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
