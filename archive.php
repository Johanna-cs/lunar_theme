<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lunar
 */

get_header();
?>


	<header class="page__header">
		<?php
		the_archive_title( '<h1 class="page__title">', '</h1>' );
		the_archive_description( '<div class="archive__description">', '</div>' );
		?>
	</header>
		<div class='site__blog'>
            <!-- .page-header -->
			<main class='site__content'>
			<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  
			<article class="site__post">
				<a href="<?php the_permalink(); ?>" class="post__link">
					<?php the_post_thumbnail('square_M'); ?>
				</a>
					<h3><?php the_title(); ?></h3>					
						<p><?php the_excerpt(); ?></p>
						<p>
						
					</p>
			</article>

			<?php endwhile; endif; ?>
			
    </main> <!-- .page-content -->
</div>

<?php get_footer(); ?>