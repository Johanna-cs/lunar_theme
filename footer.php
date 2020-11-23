<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package onthemoon
 */

?>

	<footer id="colophon" class="site__footer">
	
	<nav class="social-navigation" role="navigation">
		<?php wp_nav_menu( 
            array( 
				'theme_location' => 'social media',
				'container'=> 'div',
				'container_class' => 'social__menu',
				) ); ?>
		</nav>
		<nav class="footer-navigation" role="navigation">
	<?php wp_nav_menu( 
            array( 
                'theme_location' => 'footer',
				'container' => 'div', 
				'container_class' => 'site__footer__menu',                 
				) ); ?>
		</nav>
		<div class="site__footer__legals">
			<a class='site__link' href="<?php echo esc_url( __( 'https://wordpress.org/', 'onthemoon' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'onthemoon' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'Design on the moon' ), 'onthemoon', '<a href="https://www.design-onthemoon.com//">Design-onthemoon.com</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

