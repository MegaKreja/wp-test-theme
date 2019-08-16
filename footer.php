<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package first-wp-theme
 */

?>
	</div><!-- #content -->

	<div class="footer content container">
		<div class="footer-nav row align-items-center">
			<div class="col-12 col-lg-4">
				<a class="active" href="#">Home</a>
				<a href="#">Products</a>
				<a href="#">About</a>
				<a href="#">Contact</a>
			</div>
			<div class="col-12 col-lg-4 order-first order-lg-0"><img class="logo" src="<?php echo wp_get_attachment_image_src( 19, 'full', false )[0]  ?>" alt=""></div>
			<div class="col-12 col-lg-4">&copy; 2019 Helendo. All rights reserved.</div>
		</div>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
