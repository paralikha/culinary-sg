<!-- sidebar -->
<aside class="sidebar" role="complementary">
    <div class="sidebar-block">
		<?php #get_template_part('searchform'); ?>
        <div class="sidebar-widget-group">
			<?php if(!is_active_sidebar('widget-area-1') || !dynamic_sidebar('widget-area-1'))  ?>

			<div class="sidebar-widget">
				<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
			</div>

        </div>
    </div>
</aside>
<!-- /sidebar -->
