<?php
/**
 * Template Name: Jumbotron Template
 */

?>

<div class="section text-center" id="h-<?php echo $post->post_name ?>" <?php if (has_post_thumbnail()) : ?> data-img="<?php the_post_thumbnail_url() ?>" <?php endif; ?>>
    <div class="title-text header-text">
        <?php the_content() ?>
        <a data-menuanchor="contact" href="#contact" class="ripplelink h2 btn-enroll">Enrol Now</a>
    </div>
</div>