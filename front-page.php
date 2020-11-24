<?php
/*
  Template Name: Accueil 
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
          <main id="primary" class="site-main">

            <?php
                the_content();

                
                // If comments are open or we have at least one comment, load up the comment template.
              if ( comments_open() || get_comments_number() ) :
                   comments_template();
               endif;
            ?>
        <div> 
          <h4> Trouver sa voix </h4>
          <p> Coucou c'est moi le texte </p>
        <div>

        </main><!-- #main -->


            <?php get_sidebar('sidebarFollow'); ?>



    </div>


<?php get_footer();?>