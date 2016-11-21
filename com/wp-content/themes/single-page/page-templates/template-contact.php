<?php
/**
 * Template Name: Contact Template
 */
?>

<div class="section" id="h-<?php echo $post->post_name ?>" <?php if (has_post_thumbnail()) : ?> data-img="<?php the_post_thumbnail_url() ?>" <?php endif; ?>>
    <div class="wrapper">
        <div class="container">
            <h1 class="m-b-8 text-primary">Contact Us</h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="m-b-2">
                        <p>Our training centre</p>
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri() ?>/resources/images/i-home.png" alt="">
                        </div>
                        <div class="content">
                            <p>10 Arumugam Road #01-00, <br>
                            LTC Building A, Singapore 409957</p>
                            <p>A stone’s throw away from Macpherson MRT station!</p>
                        </div>
                    </div>
                    <div class="m-b-2">
                        <p>For inquiries,</p>
                        <div class="pull-xs-left w150">
                            <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/resources/images/i-phone.png" alt=""></div>
                            <div class="content"><p>6632 9433</p></div>
                        </div>
                        <div class="">
                            <div class="icon"><img src="<?php echo get_template_directory_uri() ?>/resources/images/i-msg.png" alt=""></div>
                            <div class="content"><p>contact@ssagroup.com</p></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="m-b-2">
                        <p>Go down to our nearest office to register now!</p>
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri() ?>/resources/images/i-home.png" alt="">
                        </div>
                        <div class="content">
                            <p><span>Paya Lebar:</span> 11 Eunos Road 8 #06-01 (Lobby A), <br>
                            Lifelong Learning Institute, Singapore 408601</p>
                            <p><span>ADMIRALTY:</span> Blk 678A Woodlands Ave 6 #03-05/06, <br>
                            Singapore 731678</p>
                            <p><span>JURONG EAST:</span> 135 Jurong Gateway Road #06-317, <br>
                            Singapore 600135  </p>
                            <p><span>MACPHERSON:</span> 10 Arumugam Road #01-00 / #08-01, <br>
                            LTC Building A, Singapore 409957</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-form">
                    	<?php echo do_shortcode('[ninja_form id=1]') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>