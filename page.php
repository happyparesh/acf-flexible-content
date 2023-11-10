<?php 
get_header();
/* Start the Loop */
while ( have_posts() ) :
    the_post();
    //post content
    global $post;    
    $post_id = $post->ID;
    get_template_part( 'template-parts/content', get_post_type($post_id));
    // ACF - Flexible Content fields.
    $sections = get_field( 'post_sections' );
    if ( $sections ) :
        foreach ( $sections as $section ) :
            $template = str_replace( '_', '-', $section['acf_fc_layout'] );
            get_template_part( 'acf-template/sections/' . $template, '', $section );
        endforeach;
    endif;
endwhile; // End of the loop.
get_footer();
