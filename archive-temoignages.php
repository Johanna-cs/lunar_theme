<?php
/*
  Template Name: Temoignages
  Template Post Type: page
*/
	get_header();
?>
	<?php if( is_post_type_archive( 'temoignages' )) : ?>
	<header class='page__header'> 
		<?php post_type_archive_title( '<h2 class="page__title">', '</h2>' ) ?>
	</header>
	</div>
	<div class='temoignages__page'>
		<?php while( have_posts() ) : the_post(); echo '<div class="temoignages">';?>
		<?php the_content() ?>

		
		<?php echo '</div>'; endwhile ?>
		<?php else : ?>
			<h3>Pas de témoignages</h3>
		<?php endif; ?>
	</div>
</div>
<?php
	get_footer();
?>