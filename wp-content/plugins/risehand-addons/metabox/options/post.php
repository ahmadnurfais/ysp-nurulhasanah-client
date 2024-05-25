<?php
return array(
	'id'     => 'risehand_post_settings',
	'title'  => esc_html__( "Post Settings", "risehand" ),
	'fields' => array(
		array(
			'id'       => 'post_featured_image',
			'type'     => 'switch', 
			'title' => esc_html__('Featured Image Enable / Disable', 'risehand-addons') ,
			'default'  => false,
		), 
 
	),
);

