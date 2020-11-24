<?php 
/*
  Template Name: Lunar_témoignage-single
  Template Post Type: post, temoignage
*/

get_header();
?>
<?php while( have_posts() ) : the_post(); ?>
    </div>
      <?php $field['required'] = true; ?>
        <?php 
          if ( get_field( 'photo_temoin' ) ) :
          $picture = get_field( 'photo_temoin'); 
          ?>
        <div class="lunar_temoin_container">
          <div class='lunar_temoin_picture'>
            <img 
              src="<?php echo $picture['sizes']['square_S']; ?>"
              alt="avatar de <?php $picture['title'];?>"/>
          </div>
        <?php endif; ?>
          
          
          <div class="lunar_temoin_name">
            <h3><?php the_field( 'prenom_temoin' ); ?></h3></div>
          <div class="lunar_temoin_text">
            <?php the_field( 'texte_temoin' ); ?></div>
    </div>

  
<?php
  endwhile;
get_footer();
?>