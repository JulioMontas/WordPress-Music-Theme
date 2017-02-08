<?php
/**
 * Template part for displaying page content in page with Header and Summmary header
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sonia_Choi_Music
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">

		<div class="custom-box" style="text-align: center;">

			<!-- <?php the_meta(); ?>  -->
			<h1 class="entry-title">
				<?php $my_title = get_post_meta( $post->ID, 'wgmdt_term_title', true ); echo $my_title; ?>
			</h1>
			<p class="p1">
			  <span class="s1">
				  <?php $my_summary = get_post_meta( $post->ID, 'wgmdt_term_summary', true ); echo $my_summary; ?>
				</span>
			</p>

		</div>


		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sonia-choi-music-2017' ),
				'after'  => '</div>',
			) );
		?>

	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'sonia-choi-music-2017' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
