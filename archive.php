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

<div class='site__blog'>
            <header class="page__header">
				<?php
				the_archive_title( '<h1 class="page__title">', '</h1>' );
				the_archive_description( '<div class="archive__description">', '</div>' );
				?>
            </header>
            <!-- .page-header -->
			<main class='site__content'>
			<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  
				<article class="site__post">
					<h2><?php the_title(); ?></h2>

					<?php the_post_thumbnail(); ?>
					
					<p class="post__meta">
						Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
						par <?php the_author(); ?> • <?php comments_number(); ?>
					</p>
					
						<?php the_excerpt(); ?>
						
						<p>
						<a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
					</p>
				</article>

			<?php endwhile; endif; ?>
			
    </main>

</div>

<?php get_footer(); ?>