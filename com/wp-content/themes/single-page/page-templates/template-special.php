<?php
/**
 * Template Name: Special Template
 */
?>

<div class="section text-center section-special" id="h-<?php echo $post->post_name ?>" <?php if (has_post_thumbnail()) : ?> data-img="<?php the_post_thumbnail_url() ?>" <?php endif; ?>>
    <div class="wrapper">
        <div class="container">
            <div class="col-sm-8 offset-sm-2">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>