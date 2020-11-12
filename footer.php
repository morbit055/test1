<?php
/**
 * The template for displaying the footer 123

?>

		</div><!-- .mt-container -->
	</div><!-- #content -->

	<?php
		/**

	     */
	    do_action( 'k_footer' );
	?>
</div><!-- #page -->

<?php
	/**
     * news_portal_after_page hook
     *
     * @since 1.0.0
     */
    do_action( 'k_after_page' );
?>

<?php wp_footer(); ?>

</body>
</html>