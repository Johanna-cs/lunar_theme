<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lunar
 */

?>

<footer id="colophon" class="site__footer">
	<div class='menus__footer'>
	<nav id="site-navigation" class="footer__social__menu" role="navigation">
		<?php wp_nav_menu( 
            array( 
				'theme_location' => 'social media',
				'container'=> 'ul',
				'menu_class' => 'social__menu',
				) ); ?>
		</nav>
	<nav id="site-navigation" class="site__footer__menu" role="navigation">
		<?php wp_nav_menu( 
            array( 
                'theme_location' => 'footer',
				'container' => 'ul', 
				'menu_class' => 'footer__menu',                 
				) ); ?>
		</nav>
	</div>
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

