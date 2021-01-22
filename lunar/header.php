<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lunar
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'lunar' ); ?></a>

	<header id="masthead" class="site__header">
			<div class="site__header__infos">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site__title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site__title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$onthemoon_description = get_bloginfo( 'description', 'display' );
			if ( $onthemoon_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $onthemoon_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div> <!-- .site-branding -->

	<nav id="site-navigation" class="main-navigation site__header__menu">
		<div class="main-menu-toggled">
		<button class="menu-toggle lunar-burger" aria-controls="primary-menu" aria-expanded="false">
			<i id="offscreen-toggle-icon" class="fas fa-bars"></i>
		</button>
		
			<?php
			wp_nav_menu(
				array(
				'theme_location' => 'menu principal', 
                'container'  => 'ul', // afin d'éviter d'avoir une div autour 
				'menu_class' => 'header__menu', // ma classe personnalisée 
				'menu_id'    => 'primary-menu',
				)
			);
			?>
		
		</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
<div id="page" class="site">

	