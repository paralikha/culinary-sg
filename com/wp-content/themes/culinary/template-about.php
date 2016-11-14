<?php
/**
 * Template Name: Contact Page
 */

get_header(); ?>

		<div class="wrapper">
            <img class="rocket_bg" src="<?php echo get_template_directory_uri().'/resources/images/r.png' ?>">
			<div class="container">
				<div class="about_box">
					<div class="block -bg_violet edge_top">
					  	<h2><?php the_title() ?></h2>
					</div>
					<div class="row">
						<div class="j_contact">
							<div class="col-md-8">
								<div class="margin20 -bg_yellow edge_top_relative s-title"><p>Headquarters</p></div>
								<p class="p_margin">11 Eunos Road 8 #07-01 (Lobby A) <br>
								Lifelong Learning Institute <br>
								Singapore 408601 </p>

								<p class="p_margin">For <span>general inquiries</span>, please contact 6632 9514 / 6632 9519 <br>
								or email contact@joe-academy.sg <br> </p>

								<p class="p_margin">For <span>franchising inquiries</span>, please contact 6632 9530 <br>
								or email license@joe.academy </p>

								<p class="p_margin"><a class="margin40" href="https://www.facebook.com/letsjoe.sg/ ">
									<img src="<?php echo get_template_directory_uri().'/resources/images/fb_icon.png'; ?>" alt="">
								</a></p>
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