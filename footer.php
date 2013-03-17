<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package SFHerbalist
 * @since SFHerbalist 1.0
 */
?>

	</div><!-- #main -->


	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'SFHerbalist_credits' ); ?>
			&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>
			<span class="sep"> | </span>
			Design by <a href="http://www.brendajin.com" target="_blank">Brenda Jin</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>