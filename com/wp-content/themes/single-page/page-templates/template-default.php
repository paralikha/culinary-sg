<div class="section" id="h-<?php echo $post->post_name ?>" <?php if (has_post_thumbnail()) : ?> data-img="<?php the_post_thumbnail_url() ?>" <?php endif; ?>>
    <div class="wrapper">
        <div class="container">
            <h1 class="m-b-8 text-white"><?php the_title(); ?></h1>
            <div class="row">
                <div class="col-md-8">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</div>