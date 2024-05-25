<?php
return array(
	'title'      => 'Risehand Setting',
	'id'         => 'risehand_events_meta',
	'icon'       => 'el el-cogs',
	'position'   => 'normal',
	'priority'   => 'core',
	'post_types' => array('events'),
	'sections'   => array( 
		require RISEHAND_ADDONS_DIR . 'metabox/options/events.php', 
		require RISEHAND_ADDONS_DIR . 'metabox/options/theme-color.php',
		require RISEHAND_ADDONS_DIR . 'metabox/options/pageheader.php',
		require RISEHAND_ADDONS_DIR . 'metabox/options/general.php',
	),
);