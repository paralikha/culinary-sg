<?php

get_header(); ?>

		<div class="wrapper page">
			<img class="rocket_bg" src="<?php echo get_template_directory_uri(). '/resources/images/r.png' ?>">
			<div class="container">
				<div class="about_box">
					<div class="block -bg_violet edge_top">
					  	<h2><?php the_title() ?></h2>
					</div>
					<div class="row page-content">
						<div class="col-sm-9">
							<?php echo wpautop($post->post_content); ?>

							<?php
							if (get_the_child_pages_as_content() != null) {
								the_child_pages_as_content();
							} ?>
						</div>
						<div class="col-sm-3">
							<img class="img-responsive img-fluid" src="<?php echo get_template_directory_uri() ?>/resources/images/rocket_2.png">
						</div>
					</div>
					<img class="j_1_img" src="<?php echo get_template_directory_uri() ?>/resources/images/j_1.jpg">
				</div>
			</div>
		</div>
	</section>

	<div class="divider_bg"></div>

	<?php get_template_part('section', 'enroll'); ?>

<?php

get_footer(); ?>