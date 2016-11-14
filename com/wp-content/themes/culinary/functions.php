<?php
require_once __DIR__ . '/inc/bs4navwalker/bs4navwalker.php';
include get_template_directory() . "/inc/globals.php";

/**
 * Features
 * Enable more features for the theme
 *
 */
if (function_exists('add_theme_support'))
{
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true);
    add_image_size('medium', 250, '', true);
    add_image_size('small', 120, '', true);
    add_image_size('custom-size', 700, 200, true);

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain(THE_TEXT_DOMAIN, get_template_directory() . '/languages');
}

/**
 * Enqueue Styles & Scripts
 *
 */

// add_action('login_enqueue_scripts', 'the_enqueue_login_styles', 10);
add_action('admin_head', 			'the_enqueue_admin_styles');
add_action('init',  				'the_enqueue_editor_styles');
add_action('wp_enqueue_scripts', 	'the_enqueue_styles');
add_action('init', 					'the_enqueue_header_scripts');
add_action('wp_print_scripts',  	'the_enqueue_footer_scripts');
add_action('login_enqueue_scripts', 'the_enqueue_login_styles');
add_filter('login_headerurl', 'the_login_url');
add_filter('login_headertitle', 'the_login_url_text');

function the_login_url() {
    return 'http://journey-of-entrepreneurship.com.sg';
}


function the_login_url_text() {
    return get_bloginfo('name');
}

function the_enqueue_login_styles() {
    wp_enqueue_style('login-styles', get_template_directory_uri() . '/login-style.css');
}

function the_enqueue_admin_styles() {
    wp_enqueue_style('admin', get_template_directory_uri() . '/admin-style.css', false, THE_VERSION);
    // wp_register_script('admin', get_template_directory_uri() . '/js/admin.js', array(), THE_VERSION);
    // wp_enqueue_script('admin');
}

function the_enqueue_editor_styles() {
    add_editor_style(get_template_directory_uri() . '/editor-style.css?v='. THE_VERSION);
}

function the_enqueue_styles()
{
	# Vendor (CDN)
    wp_register_style('aos', get_template_directory_uri() . '/vendor/aos/dist/aos.css', array(), '2.1.1', 'all');
    wp_enqueue_style('aos');

    wp_register_style('animate', get_template_directory_uri() . '/vendor/animate.css/animate.css', array(), '2.1.1', 'all');
    wp_enqueue_style('animate');

    wp_register_style('imagehover', get_template_directory_uri() . '/vendor/imagehover.css/imagehover.min.css', array(), '2.1.1', 'all');
    wp_enqueue_style('imagehover');

	// wp_register_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css', array(), '4.6.3', 'all');
    wp_register_style('font-awesome', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css', array(), '4.6.3', 'all');
    wp_enqueue_style('font-awesome');

    //wp_register_style('tether', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.3/css/tether.min.css', array(), '1.3.3', 'all');
    wp_register_style('tether', get_template_directory_uri() . '/vendor/tether/dist/css/tether.min.css', array(), '1.3.3', 'all');
    wp_enqueue_style('tether');

    // LightGallery
    wp_register_style('lightGallery', get_template_directory_uri() . '/vendor/lightGallery/dist/css/lightgallery.min.css', array(), '1.3.5', 'all');
    wp_enqueue_style('lightGallery');

    wp_register_style('lightSlider', get_template_directory_uri() . '/vendor/lightSlider/dist/css/lightslider.min.css', array(), '1.1.5', 'all');
    wp_enqueue_style('lightSlider');

	# Vendor (Local & Core)

	# Main Style
    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), THE_VERSION, 'all');
    wp_enqueue_style('style'); // Enqueue it!

    wp_register_style('wordpress', get_template_directory_uri() . '/wordpress.css', array(), THE_VERSION, 'all');
    wp_enqueue_style('wordpress'); // Enqueue it!
}

function the_enqueue_header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
    	// wp_register_script('conditionizr', get_template_directory_uri() . '/js/lib/conditionizr-4.3.0.min.js', array(), '4.3.0');
     //    wp_enqueue_script('conditionizr');

     //    wp_register_script('modernizr', get_template_directory_uri() . '/js/lib/modernizr-2.7.1.min.js', array(), '2.7.1');
     //    wp_enqueue_script('modernizr');
    }
}

function the_enqueue_footer_scripts()
{
	# Vendor (CDN)
    // wp_register_script('tether', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.3/js/tether.min.js', array('jquery'), '1.3.3', true);
    wp_register_script('tether', get_template_directory_uri() . '/vendor/tether/dist/js/tether.min.js', array('jquery'), '1.3.3', true);
    wp_enqueue_script('tether');

	# Vendor (Local & Core)
    wp_register_script('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/dist/js/bootstrap.min.js', array('jquery'), '4.0.0-apha.3', true);
    wp_enqueue_script('bootstrap');

    wp_register_script('nicescroll', get_template_directory_uri() . '/vendor/nicescroll/jquery.nicescroll.js', array('jquery'), '3.5.0-BETA5', true);
    wp_enqueue_script('nicescroll');

    wp_register_script('lightSlider', get_template_directory_uri() . '/vendor/lightSlider/dist/js/lightslider.min.js', array('jquery'), '3.5.0-BETA5', true);
    wp_enqueue_script('lightSlider');

    wp_register_script('aos', get_template_directory_uri() . '/vendor/aos/dist/aos.js', array('jquery'), '1.3.3', true);
    wp_enqueue_script('aos');

    # Main
    wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), THE_VERSION, true);
    wp_enqueue_script('custom');

    // if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
    //     wp_register_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), THE_VERSION, true);
    //     wp_enqueue_script('scripts');
    // }
}

/**
 * Navigation Menus
 *
 */

add_action('init', 'the_register_nav_menus');

function the_register_nav_menus()
{
    register_nav_menus(array(
        'landing-menu' 	=> __('Landing Page Menu', THE_TEXT_DOMAIN),
        'main-menu' 	=> __('Main Menu', THE_TEXT_DOMAIN),
        'mobile-menu'   => __('Mobile Menu', THE_TEXT_DOMAIN),
        'social-menu' 	=> __('Social Menu', THE_TEXT_DOMAIN),
        'footer-menu' 	=> __('Footer Menu', THE_TEXT_DOMAIN),
        'sidebar-menu' 	=> __('Sidebar Menu', THE_TEXT_DOMAIN),
        'extra-menu' 	=> __('Extra Menu', THE_TEXT_DOMAIN),
    ));
}

function the_landing_nav($class = "")
{
    wp_nav_menu(array(
        'theme_location'  => 'landing-menu',
        'menu'            => '',
        'container'       => 'div',
        'container_class' => "menu-container",
        'container_id'    => '',
        'menu_class'      => 'menu',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul class="menu-list landing-menu '.$class.'">%3$s</ul>',
        'depth'           => 0,
        'walker'          => ''
    ));
}

function the_main_nav($class = "")
{
    wp_nav_menu(array(
        'theme_location'  => 'main-menu',
        'menu'            => '',
        'container'       => 'div',
        'container_class' => 'menu-container collapse navbar-toggleable-xs',
        'container_id'    => 'main-menu',
        'menu_class'      => 'menu',
        'menu_id'         => '',
        'echo'            => true,
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul class="'.$class.'">%3$s</ul>',
        'depth'           => 2,
        'fallback_cb'     => 'bs4navwalker::fallback',
        'walker'          => new bs4Navwalker()
    ));
}

function the_mobile_nav($class = "")
{
    wp_nav_menu(array(
        'theme_location'  => 'mobile-menu',
        'menu'            => '',
        'container'       => 'div',
        'container_class' => 'menu-container collapse navbar-toggleable-xs',
        'container_id'    => 'mobile-menu',
        'menu_class'      => 'menu',
        'menu_id'         => '',
        'echo'            => true,
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul class="'.$class.'">%3$s</ul>',
        'depth'           => 2,
        'fallback_cb'     => 'bs4navwalker::fallback',
        'walker'          => new bs4Navwalker()
    ));
}

function the_social_nav($class = '')
{
	wp_nav_menu(array(
        'theme_location'  => 'social-menu',
        'menu'            => '',
        'container'       => 'div',
        'container_class' => "menu-social-menu-container $class",
        'container_id'    => '',
        'menu_class'      => 'menu',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => '',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul class="social-menu">%3$s</ul>',
        'depth'           => 0,
        'walker'          => ''
    ));
}

function the_footer_nav($class = "")
{
    wp_nav_menu(array(
        'theme_location'  => 'footer-menu',
        'menu'            => '',
        'container'       => 'div',
        'container_class' => "menu-footer-menu-container $class",
        'container_id'    => '',
        'menu_class'      => 'menu',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => '',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul class="footer-menu">%3$s</ul>',
        'depth'           => 0,
        'walker'          => new bs4Navwalker()
    ));
}

/**
 * Favicons
 *
 */
add_action('login_head', 'the_print_favicons');
add_action('admin_head', 'the_print_favicons');
add_action('wp_head', 	 'the_print_favicons');

function the_print_favicons()
{
    ?>
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/favicons/apple-touch-icon.png?v=<?php echo THE_VERSION; ?>">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon-32x32.png?v=<?php echo THE_VERSION; ?>" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicons/favicon-16x16.png?v=<?php echo THE_VERSION; ?>" sizes="16x16">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/favicons/manifest.json?v=<?php echo THE_VERSION; ?>">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/favicons/safari-pinned-tab.svg?v=<?php echo THE_VERSION; ?>" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
    <!-- /Favicons -->
    <?php
}

/**
 * Facebook Open Graph
 *
 * @param  string $output outs to <head>
 * @return string
 */
function the_add_opengraph_nameser( $output ) {
    if (is_single())
        return $output . ' xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml"';
}
add_filter('language_attributes', 'the_add_opengraph_nameser');

add_action('wp_head', 'the_fb_opengraph_meta');
/**
 * Facebook Open Graph Meta tags
 *
 * @return HTML [description]
 */
function the_fb_opengraph_meta() {
    if (is_single()) {
        global $post;
        if(get_the_post_thumbnail($post->ID, 'thumbnail')) {
            $thumbnail_id = get_post_thumbnail_id($post->ID);
            $thumbnail_object = get_post($thumbnail_id);
            $image = $thumbnail_object->guid;
        } else {
            $image = ''; // Change this to the URL of the logo you want beside your links shown on Facebook
        }
        //$description = get_bloginfo('description');
        $description = the_modified_excerpt( $post->post_content, $post->post_excerpt );
        $description = strip_tags($description);
        $description = str_replace("\"", "'", $description); ?>
        <!--FB Meta-->
        <meta property="og:title" content="<?php the_title(); ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:image" content="<?php echo get_opengraph_image(); ?>" />
        <meta property="og:url" content="<?php the_permalink(); ?>" />
        <meta property="og:description" content="<?php echo $description ?>" />
        <meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>" />
        <!--/FB Meta--><?php
    }
}

function the_modified_excerpt($text, $excerpt){
    if ($excerpt) return $excerpt;

    $text = strip_shortcodes( $text );
    $text = apply_filters('the_content', $text);
    $text = str_replace(']]>', ']]&gt;', $text);
    $text = strip_tags($text);
    $excerpt_length = apply_filters('excerpt_length', 30);
    $excerpt_more = apply_filters('excerpt_more', ' ' . '[...]');
    $words = preg_split("/[\n]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY);
    if ( count($words) > $excerpt_length ) {
        array_pop($words);
        $text = implode(' ', $words);
        $text = $text . $excerpt_more;
    } else {
        $text = implode(' ', $words);
    }
    return apply_filters('wp_trim_excerpt', $text, $excerpt);
}

function get_opengraph_image() {
    global $post, $posts;
    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), '', '');
    if ( has_post_thumbnail($post->ID) ) {
        $ogimage = $src[0];
    } else {
        $ogimage = '';
        $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
        $ogimage = $matches[1][0];
    }
    if(empty($ogimage)) {
        $ogimage = get_stylesheet_uri() . '/img/logos/main.png';
    }
    return $ogimage;
}


/**
 * Widgets
 *
 */

add_action('widgets_init', 'the_register_widget_areas');

function the_register_widget_areas() {

    register_sidebar(array(
        'id'            => 'widget-area-1',
        'name'          => 'Blog Sidebar Area 1',
        'description' => __('First Widget After the Search Form', THE_TEXT_DOMAIN),
        'class' => 'post-categories',
        'before_widget' => '<div class="sidebar-widget">',
        'after_widget' => "</div>",
        'before_title'  => '<h6 class="sidebar-widget-title">',
        'after_title'   => '</h6>',
    ));

}


function the_comment_form($args=array(), $post_id=null)
{
    if (null == $post_id) $post_id = get_the_ID();
    $args = array_merge(array(
        'id_form'           => 'commentform',
        'class_form'      => 'comment-form',
        'id_submit'         => 'submit',
        'class_submit'      => 'comment-submit btn btn-primary',
        'name_submit'       => 'submit',
        'title_reply'       => __('Leave a Reply'),
        'title_reply_to'    => __('Leave a Reply to %s'),
        'cancel_reply_link' => __('Cancel Reply'),
        'label_submit'      => __('Comment'),
        'submit_button' => '<div class="form-group row"><div class="col-sm-10 offset-sm-2"><input name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s" /></div></div>',
        'format'            => 'xhtml',
        'comment_notes_before'    => '<p class="comment-note">' . _x('Your email will not be published.', THE_TEXT_DOMAIN) . '</p>',

        'fields' => apply_filters('comment_form_default_fields', array(
            'author' => '<div class="form-group row"><label for="author" class="comment-form-author col-sm-2 col-form-label text-sm-right">'._x('Name', THE_TEXT_DOMAIN).'</label><div class="col-sm-10"><input id="author" type="text" name="author" aria-required="true" required class="form-control"></div></div>',
            'email' => '<div class="form-group row"><label for="email" class="comment-form-email col-sm-2 col-form-label text-sm-right">'._x('Email', THE_TEXT_DOMAIN).'</label><div class="col-sm-10"><input id="email" type="text" name="email" aria-required="true" required class="form-control"></div></div>',
        )),

        'comment_field' =>  '<div class="form-group row"><label for="comment" class="comment-form-comment col-sm-2 col-form-label text-sm-right">' . _x('Comment', THE_TEXT_DOMAIN ) . '</label>' .
            '<div class="col-sm-10"><textarea id="comment" class="form-control" name="comment" cols="45" rows="8" aria-required="true" required>' .
            '</textarea></div></div>',
    ), $args);
    return comment_form($args);
}

/**
 * Custom Comment Form Callback
 *
 * @param  HTML     $comment
 * @param  array    $args
 * @param  int      $depth
 * @return HTML
 */
function the_comments($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);

    if ('div' == $args['style'] ) {
        $tag = 'div';
        $add_below = 'comment';
    } else {
        $tag = 'li';
        $add_below = 'div-comment';
    } ?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>" class="comment">
    <?php if ('div' != $args['style'] ) : ?>
    <div id="div-comment-<?php comment_ID() ?>" class="comment-block">
    <?php endif; ?>
    <div class="comment-author vcard">
    <?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['180'] ); ?>
    <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
    </div>
<?php if ($comment->comment_approved == '0') : ?>
    <em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
    <br />
<?php endif; ?>

    <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
        <?php
            printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','');
        ?>
    </div>

    <?php comment_text() ?>

    <div class="reply">
    <?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
    </div>
    <?php if ('div' != $args['style'] ) : ?>
    </div>
    <?php endif; ?>
<?php }


function get_the_month()
{
    return date("M", strtotime(get_the_date()));
}

function the_month()
{
    echo get_the_month();
}

function get_the_year()
{
    return date("Y", strtotime(get_the_date()));
}

function the_year()
{
    echo get_the_year();
}

function get_the_pretty_date($format='F d, Y \a\t h:i a')
{
    return date($format, strtotime(get_the_date()));
}

function the_pretty_date($format='F d, Y \a\t h:i a')
{
    echo get_the_pretty_date($format);
}

/**
 * TinyMCE Extension
 * enable <span> tag usage
 *
 * @param  $init
 * @return $init
 */
function the_extensionTinyMCE($init) {
    // Command separated string of extended elements
    $ext = 'span[id|name|class|style]';

    // Add to extended_valid_elements if it alreay exists
    if ( isset( $init['extended_valid_elements'] ) ) {
        $init['extended_valid_elements'] .= ',' . $ext;
    } else {
        $init['extended_valid_elements'] = $ext;
    }

    // Super important: return $init!
    return $init;
}
add_filter('tiny_mce_before_init', 'the_extensionTinyMCE');

/**
 * SEO & Analytics
 */

function get_analytics() {
	return; // some analytic scripts here
}

function get_truncated($string, $count = 25, $ellipsis = '...') {
    return substr($string, 0, $count) . $ellipsis;
}

function wpse110867_is_latest_post( $post_id, $query_args = array() ){ static $latest_post_id = false; $post_id = empty( $post_id ) ? get_the_ID() : $post_id ; if( !$latest_post_id ){ $query_args['numberposts'] = 1; $query_args['post_status'] = 'publish'; $last = wp_get_recent_posts( $query_args ); $latest_post_id = $last['0']['ID']; } return $latest_post_id == $post_id; }

function the_child_pages_as_content() {
    global $post;
    $my_wp_query = new WP_Query();
    $all_wp_pages = $my_wp_query->query(array('post_type' => 'page', 'orderby'=>'menu_order', 'order'=>'DESC', 'posts_per_page'=> '-1'));

    $pages = get_page_children($post->ID, $all_wp_pages);
    ?>
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="about_tab">
                <ul class="nav nav-tabs" role="tablist">
                <?php
                foreach ($pages as $key => $page) { ?>

                    <li class="nav-item">
                        <a class="nav-link <?php echo $key <> 0 ?: 'active' ?>" data-toggle="tab" href="#<?php echo $page->post_name ?>" role="tab"><?php echo $page->post_title ;?></a>
                    </li>

                <?php
                } ?>
            </div>
        </div>
        <div class="col-md-9">
            <div class="about_tab">
                <div class="tab-content">
                    <?php
                    foreach ($pages as $key => $post) {
                        setup_postdata($post);
                        ?>
                        <div class="tab-pane <?php echo $key <> 0 ?: 'active' ?>" id="<?php echo $post->post_name ?>" role="tabpanel">
                            <h2 class="margin_b"><?php $pos = strrpos(get_the_title(), " "); echo substr_replace(get_the_title(), "<br>", $pos, strlen(" ")) ?></h2>
                            <div class="row">
                                <div class="col-sm-12">
                                    <?php the_content() ?>
                                </div>
                            </div>
                        </div>
                        <?php
                    } wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>
    <?php
}

function get_the_child_pages_as_content() {
    global $post;
    $my_wp_query = new WP_Query();
    $all_wp_pages = $my_wp_query->query(array('post_type' => 'page', 'orderby'=>'menu_order', 'order'=>'DESC', 'posts_per_page'=> '-1'));

    $pages = get_page_children($post->ID, $all_wp_pages);
    return $pages;
}