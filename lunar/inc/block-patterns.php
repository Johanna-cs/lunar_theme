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

	// Image + Text 2 blocs.
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

	// Image + Text article blog.
	register_block_pattern(
		'lunar/blog-post',
		array(
			'title' => esc_html__('Article de blog','text-domain'),
			'categories' => array('text', 'Lunar'),
			'description' => esc_html_x('Un paragraphe de texte avec une image', 'text-domain'),
			'content' =>'
					<!-- wp:group -->
					<div class="wp-block-group site__post"><div class="wp-block-group__inner-container">
					<!-- wp:heading {"textAlign":"center","level":3} -->
					<h3 class="has-text-align-center">Mon titre d\'article</h3>
					<!-- /wp:heading -->
					
					<!-- wp:paragraph {"align":"center"} -->
					<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac varius ipsum. Cras eget quam est. Nam non euismod lectus. Donec tellus neque, suscipit scelerisque turpis in, elementum aliquam mauris. Quisque a dignissim turpis. Vivamus blandit congue metus eu aliquam. Donec hendrerit pretium mauris ac placerat. Duis luctus suscipit lacus eu interdum. Nunc mi velit, blandit vitae urna et, aliquam vehicula mi. Donec convallis mauris suscipit sodales blandit.</p>
					<!-- /wp:paragraph -->
					
					<!-- wp:paragraph {"align":"center"} -->
					<p class="has-text-align-center">Proin at finibus orci. Sed faucibus viverra erat. Fusce sit amet dui ex. In sodales ex pharetra sollicitudin pharetra. Ut porttitor gravida nisi ut tincidunt. Cras eros nunc, vehicula et odio non, luctus posuere nulla. Proin et egestas eros, vitae interdum sapien.</p>
					<!-- /wp:paragraph -->
					
					<!-- wp:paragraph {"align":"center"} -->
					<p class="has-text-align-center">Pellentesque vehicula lorem ac gravida scelerisque. Phasellus scelerisque mattis est id vestibulum. Nunc pulvinar lacus sed enim porttitor gravida. Praesent faucibus lacinia faucibus. Proin volutpat in dolor ac tempor. Duis imperdiet risus lacus, ut tempus nisi gravida convallis. Fusce nunc lacus, dapibus nec ligula cursus, iaculis interdum metus.</p>
					<!-- /wp:paragraph -->
					
					<!-- wp:image {"align":"center","id":390,"sizeSlug":"square_L","linkDestination":"none"} -->
					<div class="wp-block-image"><figure class="aligncenter size-square_L"><img src="http://onthemoon.local/wp-content/uploads/2020/11/pexels-cottonbro-5081928-500x500.jpg" alt="" class="wp-image-390"/></figure></div>
					<!-- /wp:image -->
					
					<!-- wp:paragraph {"align":"center"} -->
					<p class="has-text-align-center">Vestibulum dictum tempor ante. Praesent eu luctus ligula. Proin sit amet nibh eget nunc fringilla molestie ac in ligula. Nam eu orci ut ex eleifend laoreet vitae maximus erat. Sed venenatis consectetur facilisis. Sed pharetra nisl leo, nec maximus sem placerat at. Fusce lacinia dolor sit amet nunc condimentum, sit amet facilisis massa mollis. Ut in leo pulvinar, vestibulum quam sed, consequat erat. Etiam aliquet orci id nulla auctor, et dignissim nisl pellentesque. Suspendisse ultrices porta magna non volutpat. Proin semper id orci nec feugiat. Aenean eget dapibus mi, sollicitudin accumsan nulla. Quisque eleifend sodales mollis. Cras eget eros quis lorem congue iaculis. Vestibulum ac felis id odio faucibus bibendum et quis nulla.</p>
					<!-- /wp:paragraph -->
					
					<!-- wp:paragraph {"align":"center"} -->
					<p class="has-text-align-center">Vestibulum magna libero, vestibulum sed molestie vel, tempor sed tortor. Nulla pulvinar, quam id volutpat commodo, augue risus egestas lorem, non fermentum erat leo sed lacus. Maecenas pulvinar id odio non viverra. Phasellus et velit neque. Donec laoreet neque nec mi lobortis, eget porta dolor placerat. Integer gravida augue ac rhoncus dictum. Aliquam purus mauris, suscipit eu dui et, feugiat viverra nisl. Morbi ac euismod ipsum. Donec dolor nulla, maximus vel pulvinar sit amet, elementum et mi. Duis non pretium nisl, non pretium risus. Ut fringilla dapibus tincidunt. Duis faucibus mauris id congue lacinia.</p>
					<!-- /wp:paragraph --></div></div>
					<!-- /wp:group --> '
				)
		);


		// Image + Text 
	register_block_pattern(
		'lunar/paragraphe',
		array(
			'title' => esc_html__('Paragraphe','text-domain'),
			'categories' => array('text', 'Lunar'),
			'description' => esc_html_x('Un paragraphe de texte avec une image', 'text-domain'),
			'content' =>'
				<!-- wp:group -->
					<div class="wp-block-group">
						<div class="wp-block-group__inner-container">
							<!-- wp:image {"align":"right","id":528,"sizeSlug":"square_M","linkDestination":"none"} -->
								<div class="wp-block-image">
									<figure class="alignright size-square_M">
										<img src="http://onthemoon.local/wp-content/uploads/2020/11/pexels-cottonbro-5081928-300x300.jpg" alt="" class="wp-image-528"/>
									</figure>
								</div>
							<!-- /wp:image -->

							<!-- wp:paragraph {"align":"right"} -->
								<p class="has-text-align-right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce imperdiet purus et fermentum suscipit. Vivamus dignissim, risus eu auctor rhoncus, arcu sem pulvinar lectus, sit amet gravida velit est eu mauris. Nulla lobortis vulputate ipsum consectetur varius. Maecenas tristique, felis vitae ultrices tempor, quam eros fermentum sem, eu vulputate dui ipsum eu odio. Integer sit amet auctor odio, sed porta sem. Suspendisse porttitor tortor ut lorem semper, ac luctus elit efficitur. Duis ac tristique justo. Cras quis aliquam urna, in lacinia urna. Aenean varius turpis eget urna maximus, nec consequat augue bibendum. Donec arcu felis, tristique nec tortor eu, dignissim cursus urna. Integer viverra, dolor eu scelerisque faucibus, urna ligula elementum dui, sed placerat nulla elit id enim. Phasellus porttitor neque non pellentesque viverra. Phasellus aliquam eros eu nisl mollis tincidunt.</p>
							<!-- /wp:paragraph -->
						</div>
					</div>
				<!-- /wp:group -->'
		)
	);

	// Images supperposées
	register_block_pattern(
		'lunar/images',
		array(
			'title' => esc_html__('Images','text-domain'),
			'categories' => array('gallery', 'Lunar'),
			'description' => esc_html_x('Deux images supperposées', 'text-domain'),
			'content' =>'
			<!-- wp:group {"align":"full"} -->
				<div class="wp-block-group alignfull lunar__block-img">
					<div class="wp-block-group__inner-container">
						
						<!-- wp:image {"align":"right","id":222,"sizeSlug":"square_L","linkDestination":"none","className":"is-style-default"} -->
							<div class="wp-block-image is-style-default lunar__img-back">
								<figure class="alignright size-square_L">
									<img src="http://onthemoon.local/wp-content/uploads/2020/11/pexels-cottonbro-5081928-500x500.jpg" alt="" class="wp-image-222"/>
								</figure>
							</div>
						<!-- /wp:image -->

						<!-- wp:image {"align":"center","id":221,"sizeSlug":"square_M","linkDestination":"none","className":"is-style-default"} -->
							<div class="wp-block-image is-style-default lunar__img-front">
								<figure class="aligncenter size-square_M">
									<img src="http://onthemoon.local/wp-content/uploads/2020/11/pexels-cottonbro-5081919-1-300x300.jpg" alt="" class="wp-image-221"/>
								</figure>
							</div>
						<!-- /wp:image -->
						
					</div>
				</div>
			<!-- /wp:group -->'
		)
	);
	// Bandeau news + insta
	register_block_pattern(
		'lunar/bandeau-insta',
		array(
			'title' => esc_html__('Bandeau','text-domain'),
			'categories' => array('text', 'Lunar'),
			'description' => esc_html_x('Bandeau avec lien mail et instagram feed', 'text-domain'),
			'content' =>'
					<!-- wp:group {"align":"full"} -->
					<div class="wp-block-group alignfull">
					<div class="wp-block-group__inner-container  lunar__follow-me"><!-- wp:group {"align":"wide","backgroundColor":"brown-light"} -->
					<div class="wp-block-group alignwide has-brown-light-background-color has-background"><div class="wp-block-group__inner-container"><!-- wp:heading {"textAlign":"center","level":3,"textColor":"light-white"} -->
					<h3 class="has-text-align-center has-light-white-color has-text-color">Inscris-toi</h3>
					<!-- /wp:heading -->
					
					<!-- wp:paragraph {"align":"center","textColor":"light-white"} -->
					<p class="has-text-align-center has-light-white-color has-text-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vulputate est sit amet est eleifend finibus.</p>
					<!-- /wp:paragraph -->
					
					<!-- wp:buttons {"align":"center"} -->
					<div class="wp-block-buttons aligncenter"><!-- wp:button {"borderRadius":0,"backgroundColor":"light-white","textColor":"brown-light","className":"site__button"} -->
					<div class="wp-block-button site__button"><a class="wp-block-button__link has-brown-light-color has-light-white-background-color has-text-color has-background no-border-radius">Email</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons -->
					
					<!-- wp:buttons {"align":"center"} -->
					<div class="wp-block-buttons aligncenter"><!-- wp:button {"borderRadius":0,"backgroundColor":"brown-light","textColor":"light-white","className":"site__button is-style-outline"} -->
					<div class="wp-block-button site__button is-style-outline"><a class="wp-block-button__link has-light-white-color has-brown-light-background-color has-text-color has-background no-border-radius">M\'inscrire</a></div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons --></div></div>
					<!-- /wp:group -->
					
					<!-- wp:group {"align":"wide","className":"has-light-background-color has-background","backgroundColor":"light"} -->
					<div class="wp-block-group alignwide has-light-background-color has-background has-light-background-color has-background"><div class="wp-block-group__inner-container"><!-- wp:sbi/sbi-feed-block /--></div></div>
					<!-- /wp:group --></div></div>
					<!-- /wp:group -->'
			)
		);


	// Bandeau news + insta
	register_block_pattern(
		'lunar/modules',
		array(
			'title' => esc_html__('Modules','text-domain'),
			'categories' => array('text', 'Lunar'),
			'description' => esc_html_x('Petits groupes de texte', 'text-domain'),
			'content' =>
					'<!-- wp:columns {"verticalAlignment":"center"} -->
					<div class="wp-block-columns are-vertically-aligned-center lunar__block-modules"><!-- wp:column {"verticalAlignment":"center","width":"33.34%"} -->
					<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.34%"><!-- wp:group -->
					<div class="wp-block-group"><div class="wp-block-group__inner-container"><!-- wp:group -->
					<div class="wp-block-group"><div class="wp-block-group__inner-container"><!-- wp:heading {"className":"lunar__module-titre1"} -->
					<h2 class="lunar__module-titre1">1</h2>
					<!-- /wp:heading -->
					
					<!-- wp:heading {"textAlign":"center","level":3,"className":"lunar__module-titre2"} -->
					<h3 class="has-text-align-center lunar__module-titre2">module</h3>
					<!-- /wp:heading --></div></div>
					<!-- /wp:group -->
					
					<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
					<p class="has-text-align-center has-small-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce imperdiet purus et fermentum suscipit. Vivamus dignissim, risus eu auctor rhoncus, arcu sem pulvinar lectus, sit amet gravida velit est eu mauris. Nulla lobortis vulputate ipsum consectetur varius. </p>
					<!-- /wp:paragraph --></div></div>
					<!-- /wp:group --></div>
					<!-- /wp:column -->
					
					<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
					<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:group -->
					<div class="wp-block-group"><div class="wp-block-group__inner-container"><!-- wp:group -->
					<div class="wp-block-group"><div class="wp-block-group__inner-container"><!-- wp:heading {"className":"lunar__module-titre1"} -->
					<h2 class="lunar__module-titre1">2</h2>
					<!-- /wp:heading -->
					
					<!-- wp:heading {"textAlign":"center","level":3,"className":"lunar__module-titre2"} -->
					<h3 class="has-text-align-center lunar__module-titre2">module</h3>
					<!-- /wp:heading --></div></div>
					<!-- /wp:group -->
					
					<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
					<p class="has-text-align-center has-small-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce imperdiet purus et fermentum suscipit. Vivamus dignissim, risus eu auctor rhoncus, arcu sem pulvinar lectus, sit amet gravida velit est eu mauris. Nulla lobortis vulputate ipsum consectetur varius. </p>
					<!-- /wp:paragraph --></div></div>
					<!-- /wp:group --></div>
					<!-- /wp:column -->
					
					<!-- wp:column {"width":"33.33%"} -->
					<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:group -->
					<div class="wp-block-group"><div class="wp-block-group__inner-container"><!-- wp:group -->
					<div class="wp-block-group"><div class="wp-block-group__inner-container"><!-- wp:heading {"className":"lunar__module-titre1"} -->
					<h2 class="lunar__module-titre1">3</h2>
					<!-- /wp:heading -->
					
					<!-- wp:heading {"textAlign":"center","level":3,"className":"lunar__module-titre2"} -->
					<h3 class="has-text-align-center lunar__module-titre2">module</h3>
					<!-- /wp:heading --></div></div>
					<!-- /wp:group -->
					
					<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
					<p class="has-text-align-center has-small-font-size">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce imperdiet purus et fermentum suscipit. Vivamus dignissim, risus eu auctor rhoncus, arcu sem pulvinar lectus, sit amet gravida velit est eu mauris. Nulla lobortis vulputate ipsum consectetur varius. </p>
					<!-- /wp:paragraph --></div></div>
					<!-- /wp:group --></div>
					<!-- /wp:column --></div>
					<!-- /wp:columns -->'
					)
				);
}





