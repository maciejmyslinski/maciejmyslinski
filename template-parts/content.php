<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package maciejmyslinski
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<a href="<?php esc_url( get_permalink() )?>" rel="bookmark" class="post__link">
		<header class="section typeset">
			<?php
			if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php maciejmyslinski_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php
			endif;

			if ( is_single() ) :
				the_title( '<h1 class="post__title">', '</h1>' );
			else :
				the_title( '<h2 class="post__title">', '</h2>' );
			endif;

			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			} ?>

			<p class="post__more">Read more...</p>

		</header>
	</a>

	<div class="section typeset">
		<?php
			// the_content( sprintf(
			// 	/* translators: %s: Name of current post. */
			// 	wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'maciejmyslinski' ), array( 'span' => array( 'class' => array() ) ) ),
			// 	the_title( '<span class="screen-reader-text">"', '"</span>', false )
			// ) );

			// wp_link_pages( array(
			// 	'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'maciejmyslinski' ),
			// 	'after'  => '</div>',
			// ) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php maciejmyslinski_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
