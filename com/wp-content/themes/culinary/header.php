<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<?php wp_head(); ?>

	<script>
        /**
         * Base URL
         *
         * @param  string $string The base url
         * @return string
         */
        var base_url = function ($string) {
            if(null == $string && undefined == $string) $string = "";
            return "<?php echo get_site_url(); ?>/" + $string;
        }
    </script>

</head>
<body <?php body_class(); ?>>

    <header class="header">
        <nav class="nav-main navbar navbar-light bg-faded">
            <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header" aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-toggleable-xs" id="navbar-header">
                <a class="navbar-brand" href="index.html"><img src="resources/images/brand-logo.png" width="150" alt="<?php  ?>"></a>
                <?php the_main_nav("nav navbar-nav pull-xs-right") ?>
                <!-- <ul class="nav navbar-nav pull-xs-right">
                    <li class="nav-item active"><a class="nav-link h2" href="index.html">Home <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a class="nav-link h2" href="about.html">About</a></li>
                    <li class="nav-item"><a class="nav-link h2" href="courses.html">Courses</a></li>
                    <li class="nav-item"><a class="nav-link h2" href="schedule.html">Schedule</a></li>
                    <li class="nav-item"><a class="nav-link h2" href="n_e.html">News &amp; Events</a></li>
                    <li class="nav-item"><a class="nav-link h2" href="#">Contact</a></li>
                    <li class="nav-item"><a href="#"><span><i class="fa fa-facebook-square" aria-hidden="true"></i></span></a></li>
                </ul> -->
            </div>
        </nav>
    </header>