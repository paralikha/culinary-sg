<?php
/**
 * Template Name: Registration Page
 */

get_header(); ?>

		<div class="wrapper">
			<img class="rocket_bg" src="<?php echo get_template_directory_uri(). '/resources/images/r.png' ?>">
			<div class="container">
				<div class="about_box">
					<div class="block -bg_violet edge_top">
					  	<h2><?php the_title() ?></h2>
					</div>
					<div class="row">
						<div class="j_registration">
							<div class="col-md-8">
								<?php # echo do_shortcode('[mail_form]') ?>
								<?php echo do_shortcode('[ninja_form id=2]') ?>
							</div>
							<div class="col-md-4">
								<img src="<?php echo get_template_directory_uri(). '/resources/images/rocket_2.png' ?>" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="divider_bg"></div>

	<?php # get_template_part('section', 'enroll'); ?>

<?php get_footer(); ?>