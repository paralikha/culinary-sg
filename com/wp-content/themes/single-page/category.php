<?php get_header(); ?>

	<div id="page" data-toggle="smoothState">

        <?php get_template_part('partial', 'nav') ?>

        <div id="main" class="main animated fadeIn delay-half">
		    <section class="section section-table" data-tooltip="<?php the_title(); ?>">
                <div class="section-cell section-cell-centered">
                    <div class="container">
                    	<div class="row">
                    	</div>
                        <div class="row" data-toggle="jscroll">
                    		<div class="col-sm-9">
                    			<h1 class="h2 main-title"><?php _e('Categories for ', THE_TEXT_DOMAIN); single_cat_title(); ?></h1>

		                        <div class="row">
			                        <div class="col-md-12">
			                        	<div class="jscroll-row">
											<?php get_template_part('loop'); ?>
								        </div>
			                        </div>
							        <div class="col-sm-12">
		                                <div class="m-x-auto pagination text-xs-centered">
		                                    <?php # paginate_links(); ?>
		                                    <?php posts_nav_link(' ', ' ', 'Next Page'); ?>
		                                </div>
		                            </div>
		                        </div>
                    		</div>
							<div class="col-md-3">
					            <?php get_sidebar(); ?>
					        </div>
					    </div>
					</div>
			    </div>
			</section>

	        <?php get_template_part("partial", "logos"); ?>
		</div>
	</div>


<?php get_footer(); ?>