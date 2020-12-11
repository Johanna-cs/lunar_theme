<?php
/**
 * Block Patterns
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern/
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern_category/
 *
 * @package WordPress
 * @subpackage Lunar
 * @since 1.0.0
 */


/**
 * Register Block Pattern Category.
 */
	if ( function_exists( 'register_block_pattern_category' ) ) {
		register_block_pattern_category(
			'lunar',
			array( 'label' => esc_html__( 'Lunar', 'lunar'  ) ) );
	}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {

	// Image + Text.
	register_block_pattern(
		'lunar/text-2bloc',
		array(
			'title' => esc_html__('Deux blocs texte/image','text-domain'),
			'categories' => array('text', 'Lunar'),
			'description' => esc_html_x('Un paragraphe de texte avec une image', 'text-domain'),
			'content' =>'
			<!-- wp:group {"align":"full"} -->
			<div class="wp-block-group alignfull"><div class="wp-block-group__inner-container"><!-- wp:image {"align":"right","id":222,"sizeSlug":"square_L","linkDestination":"none","className":"is-style-default"} -->
			<div class="wp-block-image is-style-default"><figure class="alignright size-square_L"><img src="http://onthemoon.local/wp-content/uploads/2020/11/pexels-cottonbro-5081928-500x500.jpg" alt="" class="wp-image-222"/></figure></div>
			<!-- /wp:image -->
			
			<!-- wp:image {"align":"center","id":221,"sizeSlug":"square_M","linkDestination":"none","className":"is-style-default"} -->
			<div class="wp-block-image is-style-default"><figure class="aligncenter size-square_M"><img src="http://onthemoon.local/wp-content/uploads/2020/11/pexels-cottonbro-5081919-1-300x300.jpg" alt="" class="wp-image-221"/></figure></div>
			<!-- /wp:image --></div></div>
			<!-- /wp:group -->
			
			<!-- wp:group -->
			<div class="wp-block-group"><div class="wp-block-group__inner-container"><!-- wp:heading {"textAlign":"right","level":3} -->
			<h3 class="has-text-align-right">Ce que tu proposes</h3>
			<!-- /wp:heading -->
			
			<!-- wp:group -->
			<div class="wp-block-group"><div class="wp-block-group__inner-container"><!-- wp:image {"align":"left","id":223,"sizeSlug":"square_L","linkDestination":"none"} -->
			<div class="wp-block-image"><figure class="alignleft size-square_L"><img src="http://onthemoon.local/wp-content/uploads/2020/11/pexels-cottonbro-5081969-500x500.jpg" alt="" class="wp-image-223"/></figure></div>
			<!-- /wp:image --></div></div>
			<!-- /wp:group -->
			
			<!-- wp:paragraph -->
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vulputate est sit amet est eleifend finibus. Nam auctor a augue id rutrum. Maecenas dignissim lorem sit amet lobortis auctor. Vivamus vulputate justo in ex aliquam mollis. Etiam sollicitudin neque id condimentum tristique. Phasellus ut pellentesque dolor, non egestas orci. Integer a ullamcorper sapien. Nunc vestibulum cursus est. Ut in euismod ligula. Quisque vitae condimentum augue, nec finibus eros. Etiam urna mi, dapibus id nisl eu, tristique facilisis sapien. Ut sapien eros, sollicitudin ut nisl quis, varius laoreet diam. Morbi sed nibh nulla. Proin massa ipsum, blandit eget velit sed, convallis mattis sem.</p>
			<!-- /wp:paragraph --></div></div>
			<!-- /wp:group -->',
			)
	);

	// Bandeau 3 colonnes
	register_block_pattern(
		'lunar/bandeau_3col',
		array(
			'title' => esc_html__('Bandeau 3 colonnes', 'text-domain'),
			'categories' => array('text', 'buttons', 'Lunar'),
			'description' => esc_html_x('Un bandeau avec trois colonnes et boutons', 'text-domain'),
			'content' => '
				<!-- wp:columns {"verticalAlignment":"top","align":"wide","textColor":"black","style":{"color":{"background":"#eee8e1"}}} -->
				<div class="wp-block-columns alignwide are-vertically-aligned-top has-black-color has-text-color has-background" style="background-color:#eee8e1"><!-- wp:column {"verticalAlignment":"top"} -->
				<div class="wp-block-column is-vertically-aligned-top"><!-- wp:heading {"textAlign":"center","level":3} -->
				<h3 class="has-text-align-center">MON OFFRE</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vulputate est sit amet est eleifend finibus. Nam auctor a augue id rutrum. </p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"align":"center"} -->
				<div class="wp-block-buttons aligncenter"><!-- wp:button {"borderRadius":0,"backgroundColor":"brown-light","className":"site__button"} -->
				<div class="wp-block-button site__button"><a class="wp-block-button__link has-brown-light-background-color has-background no-border-radius">EN SAVOIR PLUS</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
				<!-- /wp:column -->

				<!-- wp:column {"verticalAlignment":"top"} -->
				<div class="wp-block-column is-vertically-aligned-top"><!-- wp:heading {"textAlign":"center","level":3} -->
				<h3 class="has-text-align-center">LE PODCAST</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vulputate est sit amet est eleifend finibus. Nam auctor a augue id rutrum. </p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"align":"center"} -->
				<div class="wp-block-buttons aligncenter"><!-- wp:button {"borderRadius":0,"backgroundColor":"brown-light","className":"site__button"} -->
				<div class="wp-block-button site__button"><a class="wp-block-button__link has-brown-light-background-color has-background no-border-radius">éCOUTER</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:heading {"textAlign":"center","level":3} -->
				<h3 class="has-text-align-center">LA FORMATION</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center"} -->
				<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vulputate est sit amet est eleifend finibus. Nam auctor a augue id rutrum. </p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons {"align":"center"} -->
				<div class="wp-block-buttons aligncenter"><!-- wp:button {"borderRadius":0,"backgroundColor":"brown-light","className":"site__button"} -->
				<div class="wp-block-button site__button"><a class="wp-block-button__link has-brown-light-background-color has-background no-border-radius">découvrir</a></div>
				<!-- /wp:button --></div>
				<!-- /wp:buttons --></div>
				<!-- /wp:column --></div>
				<!-- /wp:columns -->'
			)
		);



}
