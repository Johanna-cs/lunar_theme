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
	<h2 class="page__title">
		<?php wp_title('');?></h2>
	</header>
		<div class='site__blog'>
            <!-- .page-header -->
			
		<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  
			<article class="site__post">
				<a href="<?php the_permalink(); ?>" class="post__link">
						<?php the_post_thumbnail('square_M'); ?>
				
					<h3><?php the_title(); ?></h3>	
				</a>				
						<p class="site__post__text"><?php the_excerpt(); ?></p>
						<li class='site__post__meta__li'><?php the_category(); ?></li>
			</article>

			<?php endwhile; endif; ?>
			
     <!-- .page-content -->
</div>

<?php get_footer(); ?>