<?php
/**
 * Template Name: Front Page
 */

get_header(); ?>
        <div class="wrapper">
            <div class="container">
                <div class="intro_slider">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <img class="animated bounceInLeft" src="<?php echo get_template_directory_uri().'/resources/images/r.png'; ?>" alt="">
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <?php echo do_shortcode('[testimonials]')//the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about_box home">
                    <div class="row">
                        <div class="col-md-3 hero_image">
                            <div class="hero_box hero_box-gray">
                                <p>“Apart from financial literacy, it is also an important responsibility for parents to help their children grow emotionally and socially. We are certain that every single ”</p>
                                <p class="font_del pull-xs-right primary">-CEO's Message</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="hero_box center hero_box-yellow">
                                <h2>Who said only <span>adults</span> <br> can be entrepreneurs?</h2>
                                <h2 class="second -bg_violet">Your child could be the next <br> Mark Zuckerberg.</h2>
                                <div class="clear"></div>
                                <a class="third -bg_white-x ripplelink" href="<?php echo site_url('lets-joe') ?>">Enrol now!</a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="hero_box transform no_pattern">
                                <h2 class="transform">JOE is a holistic <br> <span>4-phased</span> programme designed for “tweens and teens aged 9 – 16).</h2>
                                <a class="ripplelink float-r" target="_blank" href="<?php echo site_url('programmes') ?>">Learn more</a>
                            </div>
                        </div>
                    </div>


                    <div class="clear"></div>
                    <div class="bg-dg">
                        <div class="row">
                            <div class="hero_bottom">
                                <div class="col-md-5">
                                    <img src="<?php echo get_template_directory_uri().'/resources/images/hero_img.jpg'; ?>">
                                    <a href="news_events.html">See more photos</a>
                                </div>
                                <div class="col-md-7">
                                    <div class="hero_text">
                                        <h1 class="dark_gray">Launch your child's <span class="primary">entrepreneurship</span> journey now!</h1>
                                        <img class="pull-xs-right" src="<?php echo get_template_directory_uri().'/resources/images/rocket_2-800.png'; ?>" alt="rocket_2">
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="phases">
        <div class="wrapper -bg_violet">
            <div class="container">
                <div class="center title">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>

    <section id="phases">
        <div class="wrapper -bg_gray">
            <div class="container">
                <div class="phases_content">
                <h2>What we learn in JOE</h2>
                    <ul>
                        <li>
                            <div data-aos="fade-up">
                                <p>Phase 1</p>
                                <div class="border_sample">
                                    <figure class="imghvr-flip-vert">
                                        <img src="<?php echo get_template_directory_uri().'/resources/images/icons/p_1.png' ?>" alt="">
                                        <figcaption>
                                            <img src="<?php echo get_template_directory_uri().'/resources/images/icons/hover_bg.png' ?>" alt="">
                                            <p>Creativity <br>
                                            Passion <br>
                                            Perseverance <br>
                                            Risk-Taking <br>
                                            Innovation <br>
                                            Envisioning <br>
                                            Ethics </p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div data-aos="fade-down">
                                <p>Phase 2</p>
                                <div class="border_sample">
                                    <figure class="imghvr-flip-vert">
                                        <img src="<?php echo get_template_directory_uri().'/resources/images/icons/p_2.png' ?>" alt="">
                                        <figcaption>
                                            <img src="<?php echo get_template_directory_uri().'/resources/images/icons/hover_bg.png' ?>" alt="">
                                            <p>Teamwork <br>
                                            Communication <br>
                                            Networking <br>
                                            Presentation <br>
                                            Negotiation <br>
                                            Time Management
                                            </p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div data-aos="fade-up">
                                <p>Phase 3</p>
                                <div class="border_sample">
                                    <figure class="imghvr-flip-vert">
                                        <img src="<?php echo get_template_directory_uri().'/resources/images/icons/p_3.png' ?>" alt="">
                                        <figcaption>
                                            <img src="<?php echo get_template_directory_uri().'/resources/images/icons/hover_bg.png' ?>" alt="">
                                            <p>Basic Economics <br>
                                            Basic Business <br>
                                            Competition <br>
                                            Marketing <br>
                                            Financial Planning<br>
                                            Business Planning
                                            </p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div data-aos="fade-down">
                                <p>Phase 4</p>
                                <div class="border_sample">
                                    <figure class="imghvr-flip-vert">
                                        <img src="<?php echo get_template_directory_uri().'/resources/images/icons/p_4.png' ?>" alt="">
                                        <figcaption>
                                            <img src="<?php echo get_template_directory_uri().'/resources/images/features/img_1.jpg' ?>" alt="">
                                            <p class="caption">Putting knowledge into application</p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <img class="rocket_bg1" src="<?php echo get_template_directory_uri().'/resources/images/rocket_bg.png' ?>" alt="">
                    <img class="rocket_bg2" src="<?php echo get_template_directory_uri().'/resources/images/rocket_bg.png' ?>" alt="">
                    <img class="rocket_bg3" src="<?php echo get_template_directory_uri().'/resources/images/rocket_bg.png' ?>" alt="">
            </div>
        </div>
    </section>

    <section id="featured_img">
        <div class="row no-gutter">
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100"><img src="<?php echo get_template_directory_uri().'/resources/images/features/img_1.jpg' ?>" alt=""></div>
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300"><img src="<?php echo get_template_directory_uri().'/resources/images/features/img_3.jpg' ?>" alt=""></div>
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="500"><img src="<?php echo get_template_directory_uri().'/resources/images/features/img_1.jpg' ?>" alt=""></div>
        </div>
    </section>

    <section id="learn_joe">
        <div class="wrapper">
            <div class="container">
                <div class="learn_joe_content">
                    <img class="rocket" src="<?php echo get_template_directory_uri().'/resources/images/rocket_bg.png'; ?>" width="100" alt="">
                    <div class="margin_b margin30 -bg_violet edge_top_relative" data-aos="fade-up" data-aos-delay="700">

                        <h1>How we learn in JOE</h1></div>
                    <div data-aos="fade-up" data-aos-delay="800">
                        <h2>Learning is made fun at JOE! <br> Many of its activities are experiential-based to create the best learning environment.</h2>
                    </div>

                    <ul data-aos="fade-up" data-aos-delay="900">
                        <li><img src="<?php echo get_template_directory_uri().'/resources/images/learn/1.png' ?>" alt=""> <p>Idea Journal</p></li>
                        <li><img src="<?php echo get_template_directory_uri().'/resources/images/learn/2.png' ?>" alt=""> <p>Storytelling</p></li>
                        <li><img src="<?php echo get_template_directory_uri().'/resources/images/learn/3.png' ?>" alt=""> <p>Teamwork</p></li>
                        <li><img src="<?php echo get_template_directory_uri().'/resources/images/learn/4.png' ?>" alt=""> <p>Video Screening</p></li>
                        <li><img src="<?php echo get_template_directory_uri().'/resources/images/learn/5.png' ?>" alt=""> <p>Problem-Solving</p></li>
                        <li><img src="<?php echo get_template_directory_uri().'/resources/images/learn/6.png' ?>" alt=""> <p>Real-life Application</p></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('section', 'enroll'); ?>


<?php get_footer(); ?>