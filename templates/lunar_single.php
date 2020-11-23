<?php 
/*
  Template Name: Lunar_article
  Template Post Type: post
*/

get_header(); ?>
  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    <article class="post__content">
      <?php the_post_thumbnail('medium_large'); ?>

      <h1><?php the_title(); ?></h1>
        <div class='post__meta__container'>
          <p class="post__meta"><?php the_category(); ?></p>
          <p class="post__meta"><?php the_date(); ?></p>
          <p class="post__meta"><?php the_author(); ?></p>
        </div>
      <?php the_content(); ?>
    </article>

  <?php endwhile; endif; ?>
  <div class="site__navigation">
            <div class="site__navigation__prev">
                <?php previous_posts_link(); ?>
            </div>
            <div class="site__navigation__next">
                <?php next_posts_link(); ?> 
            </div>
        </div>
<?php get_footer(); ?>