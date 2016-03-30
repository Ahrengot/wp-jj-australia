<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jj-australia
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-navigation">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'jj-australia' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'jj-australia' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'jj-australia' ), 'jj-australia', '<a href="http://jackjones.com/" rel="designer">Jack & Jones Ecommerce</a>' ); ?>
			</div>
			<div class="footer-column news">
				<h3>News</h3>
				<ul>
					<li>
						<a href="">Campaigns</a>
					</li>
					<li>
						<a href="">Brands</a>
					</li>
					<li>
						<a href="">Blog</a>
					</li>
				</ul>
			</div>
			<div class="footer-column company">
				<h3>Company</h3>
				<ul>
					<li>
						<a href="http://www.aboutbestseller.com/sustainability" target="_blank">Sustainability</a>
					</li>
					<li>
						<a href="http://www.aboutbestseller.com/news" target="_blank">Corporate News</a>
					</li>
				</ul>
			</div>
			<div class="footer-column social">
				<h3>FOLLOW US</h3>
				<div class="footer-social">
					<a class="facebook-icon" href="https://www.facebook.com/JackandJones/" target="_blank"></a>
					<a class="instagram-icon" href="https://www.instagram.com/jackandjones_official/" target="_blank"></a>
					<a class="twitter-icon" href="https://twitter.com/JackandJonesTM" target="_blank"></a>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
