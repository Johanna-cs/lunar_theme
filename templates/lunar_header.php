<?php
/**
 * The header for Lunar Template
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package onthemoon
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class('site__lunar'); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'onthemoon' ); ?></a>
        <header id="masthead" class="lunar__header" role="banner">
            <nav id="site-navigation" class="lunar__header">
                <div class='lunar__header__menu'>
                    <a href="<?php echo home_url( '/' ); ?>">
                    <?php the_custom_logo(); ?>
                    </a>
                    <?php 
                    wp_nav_menu(  
                        array( 
                            'theme_location' => 'lunar', 
                            'container' => 'div', 
                            'container_class' => 'lunar__header__menu',
                            'menu_class' => 'lunar__header__menu', 
                        )  ); ?>
                </div>
                </nav>
        </header>
</div>
    <?php wp_body_open(); ?>