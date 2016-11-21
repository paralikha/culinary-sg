<?php
$args = array(
    'sort_order' => 'DESC',
    'orderby' => 'menu_order', //post_title
    'hierarchical' => true,
    'child_of' => 0,
    'post_per_page' => '3',
    'post_type' => 'news',
    'post_status' => 'publish',
);
$q = new WP_Query($args);

$i = 1;
?>
<div class="row">
    <?php
    if ($q->have_posts()) : while ($q->have_posts()) : $q->the_post();
        $id = get_the_ID();
    ?>

    	<div class="col-md-4">
            <div class="s1">
                <img src="<?php echo get_template_directory_uri() ?>/resources/images/s1.png">
            </div>
            <div class="s2">
                <h3 class="text-white bg-secondary p-1-5 m-b-2 m-t-3 text-light-weight"><?php the_title() ?></h3>
                <?php the_excerpt(); ?>
                <a class="text-primary text-black-weight" href="<?php the_permalink() ?>">Read more</a>
            </div>
        </div>

    <?php
    endwhile;
    if ($i%3 != 1) echo "</div>";
    endif; ?>
</div>