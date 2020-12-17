<?php 
function lunar_supports(){

	load_theme_textdomain( 'lunar' );
    // Ajouter la prise en charge des images mises en avant
    add_theme_support( 'post-thumbnails' );
    // Définir d'autres tailles d'images
    add_image_size( 'square_S', 200, 200, true );
    add_image_size( 'square_M', 300, 300, true );
	add_image_size( 'square_L', 500, 500, true );

	add_filter( 'image_size_names_choose','lunar_custom_image_sizes' );

	function lunar_custom_image_sizes( $sizes ) {
		return array_merge( $sizes, array(
			//Add your custom sizes here
			'square_S' => __( 'Carré miniature' ),
			'square_M' => __( 'Carré M' ),
			'square_L' => __( 'Carré L' ),
			) );
	}

    // Ajouter automatiquement le titre du site dans l'en-tête du site
    add_theme_support( 'title-tag' );
    add_theme_support('menus');
	add_theme_support( 'custom-logo' );
	add_theme_support( 'widgets' );
	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );
	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );
	// Add support for customize line height.
	add_theme_support( 'custom-line-height' );
	// Add support for experimental link color control.
	add_theme_support( 'experimental-link-color' );
	// Add support for experimental cover block spacing.
	add_theme_support( 'custom-spacing' );

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
	// Custom Gutenberg color palette
	add_theme_support( 'editor-color-palette',
    array(
		array( 'name' => 'light-white', 'slug'  => 'light-white', 'color' => '#F5F1ED' ),
		array( 'name' => 'light', 'slug'  => 'light', 'color' => '#EEE8E1' ),
		array( 'name' => 'grey', 'slug'  => 'grey', 'color' => '#474747' ),
		array( 'name' => 'brown-light', 'slug'  => 'brown-light', 'color' => '#B68869' ),
		array( 'name' => 'brown', 'slug'  => 'brown', 'color' => '#785338' ),
	)
);
	// Custom Gutenberg block editor 
	add_theme_support('editor-styles');
	// Style for Gutenberg block editor
	add_editor_style( 'style-editor.css' );

}
add_action('after_setup_theme', 'lunar_supports');

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
		'can_export' => true,
		'rewrite'     => array( 'slug' => 'temoignage' ), // my custom slug
        'supports' => array( 'title', 'editor','thumbnail', 'page-attributes', 'custom-fields', 'revisions'),
        'menu_position' => 5, 
		'menu_icon' => 'dashicons-testimonial',
		'template' => array( // Définir un modèle 
            array( 'core/image', array(
				'size' => 'square_S',
				'className' => 'temoin__picture',
            ) ),
            array( 'core/heading', array(
				'placeholder' => 'Prénom & nom ',
				'className' => 'temoin__name',
            ) ),
            array( 'core/paragraph', array(
				'placeholder' => 'Le témoignage',
				'className' => 'temoin__text',
            ) ),
		),
		'template_lock' => 'all', // Verrouiller le modèle pour empêcher les modifications
	);

	register_post_type( 'temoignages', $args );
}
add_action( 'init', 'lunar_register_post_types' ); // Le hook init lance la fonction


// function lunar_temoignage_acf_block() {
	
// 	// check function exists
// 	if( function_exists('acf_register_block') ) {
		
// 		// register a testimonial item block
// 		acf_register_block(array(
// 			'name'				=> 'temoignage',
// 			'title'				=> __('Témoignage'),
// 			'description'		=> __('A custom block for testimonial items.'),
// 			'render_template'	=> 'template-parts/testimonial.php',
// 			'category'			=> 'layout',
// 			'icon'				=> 'dashicons-testimonial',
// 			'keywords'			=> array( 'Lunar', 'Témoignage', 'Testimonial' ),
// 			'align' 			=> 'full',
// 			'post-type'			=> array('temoignages'),
			
// 		));
// 	} 
// }
// add_action( 'init', 'lunar_temoignage_acf_block' );


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
	wp_enqueue_script( 
		'lunar-navigation', 
		get_template_directory_uri() . '/js/navigation.js', 
		array(),
		'1.0',
		true 
	);
    
}
add_action( 'wp_enqueue_scripts', 'lunar_register_assets' );
function template_enqueue_style() {
	
	/** Call specific css enqueue */
	  wp_enqueue_style( 
		'lunar', 
		get_template_directory_uri() . '/style-lunar.css',
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

	wp_enqueue_style( 'font-awesome', 
	'//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css' );

	}
  
  add_action( 'wp_enqueue_scripts', 'template_enqueue_style' );

  /**
 * REQUIRED FILES
 * Include required files.
 */
require get_template_directory() . '/inc/block-patterns.php';
