<?php
/*
  Template Name: Lunar_temoignages
*/
	get_header();
	if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
	<div class='lunar_temoin_header'> 
		<h1><?php the_title(); ?></h1>
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
	endwhile; endif;
	get_footer();
?>