<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
        global $page, $paged;

        # the title
        wp_title( '|', true, 'right' );

        # Add the blog name.
        bloginfo( 'name' );

        # Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description";

        # Add a page number if necessary:
        if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) echo ' | ' . sprintf( __( 'Page %s', 'paralikha' ), max( $paged, $page ) );
    ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<?php wp_head(); ?>

	<script>
        var base_url = function ($string) {
            if(null == $string && undefined == $string) $string = "";
            return "<?php echo get_bloginfo('url'); ?>/" + $string;
        }
    </script>

</head>
<body <?php body_class(); ?>>

    <section id="about_us">
        <nav id="nav_collapse" class="navbar navbar-light bg-faded">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar" aria-controls="exCollapsingNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>

            <img src="<?php echo get_template_directory_uri().'/resources/images/brand_logo.png'; ?>"  width="130">
            <div class="collapse" id="exCollapsingNavbar">
                <div class="bg-inverse p-a-1">
                    <?php the_mobile_nav(); ?>
                </div>
            </div>
        </nav>

        <div id="nav_header">
            <div class="width1200">
                <nav>
                    <button class="navbar-toggler hidden-sm-up pull-xs-right" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header">☰</button>
                    <a class="navbar-brand" href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri().'/resources/images/brand_logo.png'; ?>" alt=""></a>
                    <div class="collapse navbar-toggleable-xs pull-xs-right clearfix" id="navbar-header">
                        <?php the_landing_nav("nav navbar-nav pull-xs-right"); ?>
                        <!-- <ul class="nav navbar-nav pull-xs-right">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">Home<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" role="button" href="about.html">About Us</a>
                                <ul id="menu1" class="dropdown-menu" role="menu" aria-labelledby="drop2">
                                    <li class="nav-item">
                                        <div class="nav-menu-links nav-link">
                                            <ul>
                                                <li><a href="#">Ceo's MEssage</a></li>
                                                <li><a href="#">Vision &amp; Mission</a></li>
                                                <li><a href="#">Our Personality</a></li>
                                                <li><a href="#">Our Centres</a></li>
                                                <li><a href="#">Our Intructors</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <div class="center nav-link">
                                            <p>Ceo's Message</p>
                                            <img src="<?php echo get_template_directory_uri().'/resources/images/ceo.png'; ?>" width="100" alt="">
                                            <p>Mr.Suhaimi Salleh</p>
                                        </div>
                                    </li>
                                    <li class="nav-item width280">
                                        <div class="nav-link">
                                            <p>“Apart from financial literacy, it is also an important responsibility for parents to help their children grow emotionally and socially. We are certain that every single one of them has the ability and the potential to add value to the lives of others, in one way or another by being civil and responsible citizens of the world…”
                                            </p>
                                            <a class="float-r" href="#">read more..</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" role="button" href="programs.html">Programmes</a>
                                <ul id="menu2" class="center dropdown-menu" role="menu" aria-labelledby="drop2">
                                    <li class="nav-item">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri().'/resources/images/jhb/jhb_1.png' ?>" alt="">
                                            <p>JOE HOLIDAY <br>BOOTCAMP</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri().'/resources/images/jhb/jhb_2.png' ?>" alt="">
                                            <p>JOE FAST TRACK</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri().'/resources/images/jhb/jhb_3.png' ?>" alt="">
                                            <p>JOE@SCHOOL <br>(coming soon)</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="schedule.html">Schedule</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="news_events.html">News &amp; Events </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                            <li class="-bg_yellow nav-item">
                                <a class="nav_yellow nav-link" href="registration.html">Let's Joe!</a>
                            </li>
                        </ul> -->
                    </div>
                </nav>
            </div>
        </div>
