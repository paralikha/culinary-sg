	<footer>
        <div class="container">
            <div class="wrapper">
                <div class="row">
                    <div class="col-md-4">
                        <h2><?php _e('JoE', THE_TEXT_DOMAIN); ?></h2>
                        <p><?php bloginfo('description') ?></p>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-6">
	                            <?php the_footer_nav(); ?>
                            </div>
                            <div class="col-md-6">
                                <h3>Find us here!</h3>
                                <?php the_social_nav(); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <form action="">
                            <div class="footer_input">
                                <p>Register to our mailing</p>

                                <div id="mc_embed_signup">
                                <form action="//ssagroup.us2.list-manage.com/subscribe/post?u=127beb85a5c7f8f3e42bef741&amp;id=3f2feac50d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll">

                                <div class="mc-field-group">
                                    <div class="form-group">
                                        <input type="email" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL">
                                    </div>
                                    <input type="submit" value="Join!" name="subscribe" id="mc-embedded-subscribe" class="pull-xs-right btn ripplelink -bg_yellow button">
                                </div>
                                    <div id="mce-responses" class="clear">
                                        <div class="response" id="mce-error-response" style="display:none"></div>
                                        <div class="response" id="mce-success-response" style="display:none"></div>
                                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_127beb85a5c7f8f3e42bef741_3f2feac50d" tabindex="-1" value=""></div>
                                    </div>
                                </form>
                                </div>
                                <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                                <!--End mc_embed_signup-->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>

	<!-- analytics -->
	<?php get_analytics() ?>

	<?php wp_footer(); ?>
</body>
</html>
