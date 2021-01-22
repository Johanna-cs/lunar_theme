<?php
/*
  Template Name: Page Lunar - Header
  Template Post Type: page
*/
/* 
Page avec mise en forme spéciale Lunar, titre de page => page header h2

*/
get_header();?>
<div  class='page__header'>
	<h2> <?php the_title(); ?> </h2>
</div>
	<div class='site__content'>
		<!-- .page-header -->
	
			<?php the_content(); ?>
	
	</div>
<?php get_footer();?>