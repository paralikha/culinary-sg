<?php get_header(); ?>


	 <div data-toggle="fullpage">

        <div id="main" class="main animated fadeIn">
			<!-- section -->
			<section class="section p-t-3">

				<div class="container-fluid-8 p-t-3">
					<div class="col-sm-12 p-t-3">
						<h3><?php echo sprintf(__('%s Search Results for ', THE_TEXT_DOMAIN), $wp_query->found_posts); echo '"' . get_search_query() . '"'; ?></h3>
						<div class="search-list">
						<?php
						if (have_posts()) {

							while (have_posts()) : the_post(); ?>

								<div class="search-list-item">
									<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
								</div>

							<?php endwhile;

						}
						?>
						<?php get_template_part('pagination'); ?>
						</div>

					</div>
				</div>

			</section>
			<!-- /section -->
		</div>
	</div>

<?php get_footer(); ?>
