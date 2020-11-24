<?php
/*
  Template Name: Lunar_temoignages
  Template Post Type: page, temoignage
*/
	get_header();
	if( is_post_type_archive( 'temoignage' )) : 
?>
<?php if( have_posts() ) : ?>
	<div class='lunar_temoin_header'> 
		<h1>Témoignages page</h1>
		<?php while( have_posts() ) : ?>
	</div>
	<?php $field['required'] = true; ?>
	<?php 
		if ( get_field( 'photo_temoin' ) ) :
		$picture = get_field( 'photo_temoin'); 
		?>
	<div class="lunar_temoin_container">
		<div class='lunar_temoin_picture'>
			<img 
				src="<?php echo $picture['sizes']['square_S']; ?>"
				alt="avatar de <?php $picture['title'];?>"/>
		</div>
		<?php endif; ?>
		
		
		<div class="lunar_temoin_name">
			<h3><?php the_field( 'prenom_temoin' ); ?></h3></div>
		<div class="lunar_temoin_text">
			<?php the_field( 'texte_temoin' ); ?></div>
	</div>

	<?php 
	endwhile;
	endif;?>
<?php
	endif;
	get_footer();
?>