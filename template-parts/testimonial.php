<?php
/*
Block Name: Témoignage
Block Description: An example custom ACF block.
Post Types: temoignages
*/

$picture = get_field( 'photo_temoin' );
$title = get_field( 'prenom_temoin' );
$description = get_field( 'texte_temoin' );
$field['required'] = true;
$size = 'square_S';


echo '<div class="temoignage__container">';
	if( !empty( $picture ) )
		echo wp_get_attachment_image( $picture, $size, null, array( 'class' => 'temoin__picture' ) );
	if( !empty( $title ) )
		echo '<h3 class="temoin__name">' . $title . '</h3>';
	if( !empty( $description ) )
		echo '<div class="temoin__text">' . $description . '</div>';
echo '</div>';

