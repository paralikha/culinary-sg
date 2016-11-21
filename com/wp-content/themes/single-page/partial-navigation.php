    <header class="header">
        <nav class="nav-main navbar navbar-light bg-faded">
            <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header" aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-toggleable-xs" id="navbar-header">
                <a class="navbar-brand" href="<?php echo get_site_url(); ?>"><img src="<?php echo get_option('logo'); ?>" width="150" alt="<?php echo get_bloginfo('name'); ?>"></a>
                <?php if ($post->post_type == 'page') : ?>
                <?php the_main_nav("mymenu", "nav navbar-nav pull-xs-right") ?>
                <?php else: ?>
                    <ul class="nav navbar-nav pull-xs-right">
                        <li><a href="<?php echo get_site_url(); ?>">Home</a></li>
                    </ul>
                <?php endif; ?>
            </div>
        </nav>
    </header>

    <nav class="nav-collapse navbar navbar-light bg-faded">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar" aria-controls="exCollapsingNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <img class="pull-xs-left" src="<?php echo get_option('logo'); ?>"  width="130" alt="<?php echo get_bloginfo('name'); ?>">
        <div class="clear"></div>
        <div class="collapse" id="exCollapsingNavbar">
            <div class="bg-inverse p-a-1">
                <?php if ($post->post_type == 'page') : ?>
                <?php the_main_nav("mymenu") ?>
                <?php else: ?>
                    <ul class="nav navbar-nav pull-xs-right">
                        <li><a href="<?php echo get_site_url(); ?>">Home</a></li>
                    </ul>
                <?php endif; ?>
                <!-- <ul id="mymenu">
                    <li data-menuanchor="home" class="active">
                        <a href="#home">Home <span class="sr-only">(current)</span></a></li>
                    <li data-menuanchor="about">
                        <a href="#about">About</a></li>
                    <li data-menuanchor="courses">
                        <a href="#courses">Courses</a></li>
                    <li data-menuanchor="schedule">
                        <a href="#schedule">Schedule</a></li>
                    <li data-menuanchor="n_e">
                        <a href="#n_e">News &amp; Events</a></li>
                    <li data-menuanchor="contactus">
                        <a href="#contactus">Contact</a></li>
                    <li class="nav-item">
                        <a href="#"><span><i class="fa fa-facebook-square" aria-hidden="true"></i></span></a></li>
                </ul> -->
            </div>
        </div>
    </nav>
