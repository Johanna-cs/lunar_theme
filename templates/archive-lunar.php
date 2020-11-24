<?php 
/*
  Template Name: Lunar_blog
  Template Post Type: archive pages
*/

get_header(); ?>
<div class='lunar__site__blog'>
    <header class="lunar__page__header">
        <?php
        the_archive_title( '<h1 class="lunar__page__title">', '</h1>' );
        the_archive_description( '<div class="lunar__archive__description">', '</div>' );
        ?>
    </header>
<!-- .page-header -->
	<main class='lunar__site__content'>
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
	
			<article class="lunar__site__post">
				<h2><?php the_title(); ?></h2>

				<?php the_post_thumbnail(); ?>
				
				<p class="lunar__post__meta">
					Publié le <?php the_time( get_option( 'date_format' ) ); ?> 
					par <?php the_author(); ?> • <?php comments_number(); ?>
				</p>
				
					<?php the_excerpt(); ?>
					
					<p>
					<a href="<?php the_permalink(); ?>" class="lunar__post__link">Lire la suite</a>
				</p>
			</article>

			<?php endwhile; endif; ?>
			
    </main>

</div>
<?php get_footer(); ?>