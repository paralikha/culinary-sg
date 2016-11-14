<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class('blog blog-card'); ?> data-tooltip="<?php the_title(); ?>">

		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<?php the_post_thumbnail('cover'); ?>
		<?php endif; ?>
		<!-- /post thumbnail -->

		<!-- calendar meta -->
		<div class="blog-calendar floated-top-left">
            <span class="blog-calendar-month"><?php the_month(); ?></span>
            <hr class="separator">
            <span class="blog-calendar-year"><?php the_year(); ?></span>
        </div>
        <!-- /calendat meta -->

        <div class="blog-block text-xs-left bg-secondary">
			<!-- post title -->
			<a class="h3 blog-title" data-toggle="tooltip" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			<!-- /post title -->

			<p class="blog-author text-uppercase text-sm-right"><?php the_author_posts_link(); ?></p>
	        <div class="floated-bottom-left">
		        <?php the_social_nav('blog-social'); ?>
	        </div>
			<?php edit_post_link(); ?>
		</div>


	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e('Sorry, nothing to display.', THE_TEXT_DOMAIN); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
