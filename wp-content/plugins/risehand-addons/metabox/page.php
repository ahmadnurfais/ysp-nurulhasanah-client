<?php
return array(
	'title'      => 'Risehand Setting',
	'id'         => 'risehand_page_meta',
	'icon'       => 'el el-cogs',
	'position'   => 'normal',
	'priority'   => 'core',
	'post_types' => array( 'page'),
	'sections'   => array(
		require RISEHAND_ADDONS_DIR . 'metabox/options/theme-color.php',
		require RISEHAND_ADDONS_DIR . 'metabox/options/pageheader.php',
		require RISEHAND_ADDONS_DIR . 'metabox/options/general.php', 
	),
);