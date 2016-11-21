<?php
/**
* Template Name: Showcase Template
*/
?>

<div class="section second text-center" id="h-<?php echo $post->post_name ?>" <?php if (has_post_thumbnail()) : ?> data-img="<?php the_post_thumbnail() ?>" <?php endif; ?>>
    <div class="wrapper">
        <div class="container">
            <h1 class="m-b-8"><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    </div>
</div>