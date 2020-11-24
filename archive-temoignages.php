<?php
/*
  Template Name: Temoignages
  Template Post Type: page
*/
	get_header();
?>
	<?php if( is_post_type_archive( 'temoignages' )) : ?>
	<header class='page__header'> 
		<?php post_type_archive_title( '<h1 class="page__title">', '</h1>' ) ?>
	</header>
	<main class='site__content'>
	<div class='temoignages__page'>
		<?php while( have_posts() ) : the_post(); echo '<div class="temoignages">';?>
	
			<?php $field['required'] = true; ?>
			<?php 
				if ( get_field( 'photo_temoin' ) ) :
				$picture = get_field( 'photo_temoin'); 
				?>
		<div class="temoignage__container">
			<div class='temoin__picture'>
				<img 
					src="<?php echo $picture['sizes']['square_S']; ?>"
					alt="avatar de <?php $picture['title'];?>"/>
			</div>
			<div class="temoin__name">
				<h3><?php the_field( 'prenom_temoin' ); ?></h3></div>
			<div class="temoin__text">
				<?php the_field( 'texte_temoin' ); ?></div>
		</div>
		<?php echo '</div>'; endif; endwhile ?>
		<?php else : ?>
			<h1>Pas de témoignages</h1>
		<?php endif; ?>
	</main>
</div>
<?php
	get_footer();
?>