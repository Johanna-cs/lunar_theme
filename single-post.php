<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package lunar
 */

get_header();
?>
  <?php while( have_posts() ) : the_post(); ?>
    
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
      <!-- <div class="post__meta">
        <?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?>
        <p>
          Publié le <?php the_date(); ?>
          par <?php the_author(); ?>
          Dans la catégorie <?php the_category(); ?>
          Avec les étiquettes <?php the_tags(); ?>
        </p>
      </div> -->


  <?php endwhile; ?>
  <div class="site__navigation">
            <div class="site__navigation__prev">
                <?php previous_posts_link(); ?>
            </div>
            <div class="site__navigation__next">
                <?php next_posts_link(); ?> 
            </div>
        </div>
<?php get_footer(); ?>