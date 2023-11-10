<?php 
if(has_post_thumbnail()) {
$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
if(!empty($large_image_url[0])) { ?>
<img src="<?php echo $large_image_url[0];?>" class="card-img-top" alt="<?php the_title();?>">
<?php }
} 
the_content();  
