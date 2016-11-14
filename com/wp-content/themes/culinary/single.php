<?php

get_header(); ?>

    <div id="page" data-toggle="smoothState">

        <?php get_template_part('partial', 'nav') ?>

        <div id="main" class="main animated fadeIn delay-half">
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                <!-- section -->
                <section class="section" data-tooltip="<?php the_title(); ?>">
                    <div class="container">
                        <div class="row">
                            <main role="main" class="col-md-9">
                                <article id="post-<?php the_ID(); ?>" <?php post_class('blog-card blog-single bg-white'); ?>>
                                    <figure class="blog-single-thumbnail">
                                        <?php the_post_thumbnail('wide'); ?>
                                    </figure>
                                    <div class="blog-block">
                                        <h3 class="blog-single-title text-uppercase"><?php the_title(); ?></h3>
                                        <div class="blog-single-metadata">
                                            <p class="blog-single-author text-uppercase"><i class="fa fa-edit">&nbsp;</i>by: <?php the_author_posts_link(); ?></p>
                                            <p class="blog-single-date text-uppercase"><i class="fa fa-calendar">&nbsp;</i><?php the_pretty_date(); ?></p>
                                            <p class="blog-single-post-categories"><i class="fa fa-tag">&nbsp;</i><?php the_category(', '); ?></p>
                                        </div>
                                        <?php the_content(); ?>
                                    </div>
                                    <div class="blog-block">
                                        <?php wp_link_pages(); ?>
                                    </div>
                                </article>

                                <?php comments_template(); ?>

                            </main>


                            <div class="col-md-3">
                                <?php get_sidebar(); ?>
                            </div>


                        </div>
                    </div>
                </section>
                <!-- /section -->
                <?php endwhile; ?>
            <?php endif; ?>

            <?php get_template_part("partial", "logos"); ?>

        </div>

    </div>

<?php get_footer(); ?>