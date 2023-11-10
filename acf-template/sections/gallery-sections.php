<?php 
if( have_rows('images') ):
    echo '<ul>';
    // loop through the rows of data
      while ( have_rows('images') ) : the_row();
        $image = get_sub_field('image');
        echo '<li><img src="' . $image['url'] . '" alt="' . $image['alt'] . '" /></li>';
      endwhile;
    echo '</ul>';
  endif;
