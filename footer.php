<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lorainccc_welded
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		
		<div class="social2">
			<?php echo do_shortcode('[aps-social id="1"]')?>
		</div>
		
				<div class=quicklinks>
					<h2>Quick Links</h2>
					<ul>
						<li><a href="/wp-content/uploads/2018/06/2018WeldingEducatorsTrainingSchedulePreliminary.pdf" target="_blank">Professional Development</a></li>
						<li><a href="/about/affiliates/">Become an Affiliate</a></li>
						<li><a href="/wp-content/uploads/2018/06/AWSScholarshipFlyer.pdf" target="_blank">Scholarships</a></li>
						<li><a href="https://www.regonline.com/builder/site/Default.aspx?EventID=1041520" target="_blank">Register for Training</a></li>
					</ul>
				</div>
				
		
		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'lorainccc_welded' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav>
	
			<div class="copyright">
				<h3><i id="copyright" class="fa fa-copyright"></i> 2018 Weld-Ed.org</h3>
			</div>
	
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'lorainccc_welded' ) ); ?>" target="_blank">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'lorainccc_welded' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'lorainccc_welded' ), 'lorainccc_welded', '<a href="http://underscores.me/"target="_blank">Underscores.me</a>' );
					?>
			</div><!-- .site-info -->
		
		
			

	
		
	<!--	<div class="sitemap">
			<p>| site map</p>
		</div>-->
		
	</div>	
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
