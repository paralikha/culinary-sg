<?php
/**
 * Template Name: Simple Template
 */
?>

<div class="section text-center" id="h-<?php echo $post->post_name ?>" <?php if (has_post_thumbnail()) : ?> data-img="<?php the_post_thumbnail_url() ?>" <?php endif; ?>>
    <div class="wrapper">
        <div class="container">
        	<?php the_content(); ?>
        </div>
    </div>
</div>