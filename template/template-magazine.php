<?php 
/**
*Template Name: Magazine post
*Template Post Type: post
*/



get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();
?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	asdda

	<div class="np-article-thumb">11
		<?php the_post_thumbnail( 'full' ); ?>
	</div><!-- .np-article-thumb -->

	<header class="entry-header">
		<?php 
			the_title( '<h1 class="entry-title">', '</h1>' );
			
		?>123
		<div class="entry-meta">
			<?php news_portal_inner_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->1w
xxxxxasa
	<div class="entry-content">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'news-portal' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'news-portal' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
d
	<footer class="entry-footer">
		<?php news_portal_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->	

			
<?php
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
news_portal_get_sidebar();
get_footer();