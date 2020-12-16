<?php 
/*
  Template Name: Témoignage post
  Template Post Type: post, temoignage
*/

get_header();
?>
  <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    <div class="temoignages">

        <?php the_content(); ?>
    </div>

</div>

  <?php endwhile; endif; ?>
  
<?php get_footer(); ?>

