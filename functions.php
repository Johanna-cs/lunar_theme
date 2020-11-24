<?php 
function lunar_supports(){
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
	// add_theme_support( 'custom-header' );
    // Déclarer l'emplacement des menus
    register_nav_menus( array(
        'menu principal' => 'Menu principal',
        'footer' => 'Bas de page',
        'social media' => 'Réseaux Sociaux',
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
add_action('after_setup_theme', 'lunar_supports');
// function lunar_custom_header_setup() {
//     $defaults = array(
//         // Default Header Image to display
//         'default-image'         => lunar_get_custom_logo(),
//         // Display the header text along with the image
//         'header-text'           => false,
//         // Header text color default
//         'default-text-color'        => '000',
//         // Header image width (in pixels)
//         'width'             => 1000,
//         // Header image height (in pixels)
//         'height'            => 198,
//         // Header image random rotation default
//         'random-default'        => false,
//         // Enable upload of image file in admin 
//         'uploads'       => false,
//         // function to be called in theme head section
//         'wp-head-callback'      => 'wphead_cb',
//         //  function to be called in preview page head section
//         'admin-head-callback'       => 'adminhead_cb',
//         // function to produce preview markup in the admin screen
//         'admin-preview-callback'    => 'adminpreview_cb',
//         );
// }
// add_action( 'after_setup_theme', 'lunar_custom_header_setup' );

/**
 * Get the information about the logo.
 *
 * @param string $html The HTML output from get_custom_logo (core function).
 * @return string
 */
function lunar_get_custom_logo( $html ) {

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

add_filter( 'get_custom_logo', 'lunar_get_custom_logo' );
function lunar_register_post_types() {
	
    // CPT Témoignages
    $labels = array(
        'name' => 'Témoignages',
        'all_items' => 'Tous les témoignages',  // affiché dans le sous menu
        'singular_name' => 'Témoignage',
        'add_new_item' => 'Ajouter un témoignage',
        'edit_item' => 'Modifier le témoignage',
        'menu_name' => 'Témoignages'
    );

	$args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
		'has_archive' => true,
		'rewrite'     => array( 'slug' => 'temoignage' ), // my custom slug
        'supports' => array( 'title', 'editor','thumbnail', 'page-attributes'),
        'menu_position' => 5, 
        'menu_icon' => 'dashicons-testimonial',
	);

	register_post_type( 'temoignages', $args );
}
add_action( 'init', 'lunar_register_post_types' ); // Le hook init lance la fonction




function lunar_register_assets() {
    
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
        'lunar', 
        get_template_directory_uri() . '/js/script.js', 
        array( 'jquery' ), 
        '1.0', 
        true
    );
    
}
add_action( 'wp_enqueue_scripts', 'lunar_register_assets' );
function template_enqueue_style() {
	
	/** Call specific css enqueue */
	  wp_enqueue_style( 
		'lunar', 
		get_template_directory_uri() . '/css/lunar_main.css',
		array(), 
		'1.0'
	);
	
	wp_enqueue_style( 
		'lunar', 
		get_template_directory_uri() . '/css/lunar_specific.css',
		array(), 
		'1.0'
	);
	  /** Call regular enqueue */
	  wp_enqueue_style( 
		'style',
		get_stylesheet_uri(), 
		array(), 
		'1.0'
	);

	}
  
  add_action( 'wp_enqueue_scripts', 'template_enqueue_style' );