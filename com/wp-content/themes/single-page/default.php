<div class="section text-center" id="h-<?php echo $post->post_name ?>" <?php if (has_post_thumbnail()) : ?> data-img="<?php the_post_thumbnail_url() ?>" <?php endif; ?>>
    <div class="container">
    	<div class="col-sm-12">
    		<h1 class="header-text"><?php the_title() ?></h1>
    		<?php the_content(); ?>
    	</div>
    </div>
</div>