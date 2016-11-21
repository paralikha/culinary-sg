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

    <?php get_template_part("partial", "navigation"); ?>