<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Serena Interiors
 */
?>

	</div><!-- #content -->
</div><!-- #page -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<p><?php _e( 'Contact Us', 'serena-interiors' ); ?></p>
			<p><?php echo get_bloginfo( 'name' ); ?></p>
			<p><?php _e( 'bringing joy to everyday living', 'serena-interiors' ); ?></p>

			<address>444 West Franklin &middot; Decatur, IL 44444</address>
			<p><a href="tel:+18884444444">(888) 444-4444</a> &middot; fax: (888) 444-4445</p>
			<p><a href="mailto:info@serenainteriors.com">info@serenainteriors.com</a></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>
