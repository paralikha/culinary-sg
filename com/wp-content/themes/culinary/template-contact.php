<?php
/**
 * Template Name: Contact Page
 */

get_header();
wp_reset_postdata(); ?>

		<div class="wrapper page">
            <img class="rocket_bg" src="<?php echo get_template_directory_uri().'/resources/images/r.png' ?>">
			<div class="container">
				<div class="about_box">
					<div class="block -bg_violet edge_top">
					  	<h2><?php the_title() ?></h2>
					</div>
					<div class="row page-content">
						<div class="j_contact">
							<div class="col-md-8">
								<?php the_content(); ?>
							</div>
							<div class="col-md-4">
								<img src="<?php echo get_template_directory_uri().'/resources/images/rocket_2.png'; ?>" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="divider_bg"></div>

	<?php get_template_part('section', 'enroll'); ?>

<?php get_footer(); ?>