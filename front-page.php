<?php
/*
  Template Name: Accueil - sans header
  Template Post Type: page
*/
/**
 * The template for displaying front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lunar
 */

get_header(); ?>

      <div class='site__content'>
              <!-- .page-header -->
        
       
            <?php
                the_content();

                
                // If comments are open or we have at least one comment, load up the comment template.
              if ( comments_open() || get_comments_number() ) :
                   comments_template();
               endif;
            ?>




            <?php get_sidebar('sidebarFollow'); ?>
    </div>


<?php get_footer();?>