<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lunar
**/
?>

	<header class="page__header">
		<?php the_title( '<h2 class="page__title">', '</h2>' ); ?>
	</header><!-- .page-header -->

		<div class='page__content'>
			<?php the_content(); ?>
		</div><!-- page-content -->

</div><!-- .site-content -->


