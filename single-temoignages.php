<?php 
/*
  Template Name: Témoignage post
  Template Post Type: post, temoignage
*/

get_header();
?>
  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    <div class="lunar_temoin_container">
      <?php the_image('square_S'); ?>

        <?php the_content(); ?>
    </div>

</div>

  <?php endwhile; endif; ?>
  
<?php get_footer(); ?>

