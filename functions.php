<?php 
function onthemoon_supports(){
    // Ajouter la prise en charge des images mises en avant
    add_theme_support( 'post-thumbnails' );
    // Définir d'autres tailles d'images
    add_image_size( 'square_S', 200, 200, true );
    add_image_size( 'square_M', 300, 300, true );
    add_image_size( 'square_L', 500, 500, true );

    // Ajouter automatiquement le titre du site dans l'en-tête du site
    add_theme_support( 'title-tag' );
    add_theme_support('menus');
    add_theme_support( 'custom-logo' );
    // Déclarer l'emplacement des menus
    register_nav_menus( array(
        'menu basique' => 'Menu basique',
        'footer' => 'Bas de page',
        'social media' => 'Réseaux Sociaux',
        'lunar' => 'Menu Lunar',
    ) );
    	// Custom logo.
	$logo_width  = 150;
	$logo_height = 90;

	// If the retina setting is active, double the recommended width and height.
	if ( get_theme_mod( 'retina_logo', false ) ) {
		$logo_width  = floor( $logo_width * 2 );
		$logo_height = floor( $logo_height * 2 );
	}

	add_theme_support(
		'custom-logo',
		array(
			'height'      => $logo_height,
			'width'       => $logo_width,
			'flex-height' => true,
			'flex-width'  => true,
		)
    );
    	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
    );
    // Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );
}
add_action('after_setup_theme', 'onthemoon_supports');
// Déclarer une sidebar pour intégrer des widgets
// register_sidebar( array(
// 	'id' => 'blog-sidebar',
//     'name' => 'Blog',
//     'before_widget'  => '<div class="site__sidebar__widget %2$s">',
//     'after_widget'  => '</div>',
//     'before_title' => '<p class="site__sidebar__widget__title">',
//     'after_title' => '</p>',
// ) );
/**
 * Get the information about the logo.
 *
 * @param string $html The HTML output from get_custom_logo (core function).
 * @return string
 */
function onthemoon_get_custom_logo( $html ) {

	$logo_id = get_theme_mod( 'custom_logo' );

	if ( ! $logo_id ) {
		return $html;
	}

	$logo = wp_get_attachment_image_src( $logo_id, 'full' );

	if ( $logo ) {
		// For clarity.
		$logo_width  = esc_attr( $logo[1] );
		$logo_height = esc_attr( $logo[2] );

		// If the retina logo setting is active, reduce the width/height by half.
		if ( get_theme_mod( 'retina_logo', false ) ) {
			$logo_width  = floor( $logo_width / 2 );
			$logo_height = floor( $logo_height / 2 );

			$search = array(
				'/width=\"\d+\"/iU',
				'/height=\"\d+\"/iU',
			);

			$replace = array(
				"width=\"{$logo_width}\"",
				"height=\"{$logo_height}\"",
			);

			// Add a style attribute with the height, or append the height to the style attribute if the style attribute already exists.
			if ( strpos( $html, ' style=' ) === false ) {
				$search[]  = '/(src=)/';
				$replace[] = "style=\"height: {$logo_height}px;\" src=";
			} else {
				$search[]  = '/(style="[^"]*)/';
				$replace[] = "$1 height: {$logo_height}px;";
			}

			$html = preg_replace( $search, $replace, $html );

		}
	}

	return $html;

}

add_filter( 'get_custom_logo', 'onthemoon_get_custom_logo' );

function onthemoon_register_assets() {
    
    // Déclarer jQuery
    wp_deregister_script( 'jquery' ); // On annule l'inscription du jQuery de WP
    wp_enqueue_script( // On déclare une version plus moderne
        'jquery', 
        'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', 
        false, 
        '3.3.1', 
        true 
    );
    
    // Déclarer le JS
	wp_enqueue_script( 
        'onthemoon', 
        get_template_directory_uri() . '/js/script.js', 
        array( 'jquery' ), 
        '1.0', 
        true
    );
    
    // Déclarer style.css à la racine du thème
    wp_enqueue_style( 
        'style',
        get_stylesheet_uri(), 
        array(), 
        '1.0'
    );
  	
    // Déclarer un autre fichier CSS
    wp_enqueue_style( 
        'onthemoon', 
        get_template_directory_uri() . '/css/onthemoon.css',
        array(), 
        '1.0'
    );
    wp_enqueue_style( 
        'lunar', 
        get_template_directory_uri() . '/css/Lunar/lunar__main.css',
        array(), 
        '1.0'
    );
}
add_action( 'wp_enqueue_scripts', 'onthemoon_register_assets' );
