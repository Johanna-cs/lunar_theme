<?php
/**
 *   Template Name: Article de blog
 *    Template Post Type: post

 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package lunar
 */


/*

*/

get_header(); ?>
  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  <div  class='site__post__header'>
	    <h3> <?php the_title(); ?> </h3>
      <div class='site__post__meta__container'>
          <li class='site__post__meta__li'><?php the_category(); ?></li>
          <p><?php the_date(); ?></p>
          <p><?php the_author(); ?></p>

        </div>
  </div>
    <div class="site__post__content">
        <?php the_content(); ?></div>
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