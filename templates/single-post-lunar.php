<?php 
/*
  Template Name: Lunar_article
  Template Post Type: post
*/

get_header(); ?>
  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    <div class="lunar__post__content">
      <?php the_post_thumbnail('square_M'); ?>

      <h1><?php the_title(); ?></h1>
        <div class='lunar__post__meta__container'>
          <p class="lunar__post__meta"><?php the_category(); ?></p>
          <p class="lunar__post__meta"><?php the_date(); ?></p>
          <p class="lunar__post__meta"><?php the_author(); ?></p>
        </div>
        <div class='lunar__post__container' ><?php the_content(); ?></div>
</div>

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