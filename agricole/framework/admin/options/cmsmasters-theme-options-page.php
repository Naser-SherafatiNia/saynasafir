<?php 
/**
 * @package 	WordPress
 * @subpackage 	Agricole
 * @version 	1.0.0
 * 
 * Page Options Functions
 * Created by CMSMasters
 * 
 */


if (!function_exists('agricole_get_custom_page_meta_fields')) {
function agricole_get_custom_page_meta_fields() {
	$cmsmasters_option = agricole_get_global_options();
	
	
	$cmsmasters_global_layout = (isset($cmsmasters_option['agricole' . '_layout']) && $cmsmasters_option['agricole' . '_layout'] !== '') ? $cmsmasters_option['agricole' . '_layout'] : 'r_sidebar';
	
	$cmsmasters_global_bottom_sidebar = (isset($cmsmasters_option['agricole' . '_bottom_sidebar']) && $cmsmasters_option['agricole' . '_bottom_sidebar'] !== '') ? (($cmsmasters_option['agricole' . '_bottom_sidebar'] == 1) ? 'true' : 'false') : 'true';
	
	$cmsmasters_global_bottom_sidebar_layout = (isset($cmsmasters_option['agricole' . '_bottom_sidebar_layout'])) ? $cmsmasters_option['agricole' . '_bottom_sidebar_layout'] : '14141414';
	
	$cmsmasters_global_bg = (isset($cmsmasters_option['agricole' . '_theme_layout']) && $cmsmasters_option['agricole' . '_theme_layout'] === 'boxed') ? true : false;
	
	$cmsmasters_global_header_overlaps = (isset($cmsmasters_option['agricole' . '_header_overlaps']) && $cmsmasters_option['agricole' . '_header_overlaps'] !== '') ? (($cmsmasters_option['agricole' . '_header_overlaps'] == 1) ? 'true' : 'false') : 'false';
	
	
	$cmsmasters_option_name = 'cmsmasters_page_';
	
	
	$tabs_array = array();
	
	
	$tabs_array['cmsmasters_layout'] = array( 
		'label' => esc_html__('Layout', 'agricole'), 
		'value'	=> 'cmsmasters_layout' 
	);
	
	
	if ($cmsmasters_global_bg) {
		$tabs_array['cmsmasters_bg'] = array( 
			'label' => esc_html__('Background', 'agricole'), 
			'value'	=> 'cmsmasters_bg' 
		);
	}
	
	
	$tabs_array['cmsmasters_heading'] = array( 
		'label' => esc_html__('Heading', 'agricole'), 
		'value'	=> 'cmsmasters_heading' 
	);
	
	
	$custom_page_meta_fields = array( 
		array( 
			'id'	=> $cmsmasters_option_name . 'tabs', 
			'type'	=> 'tabs', 
			'std'	=> 'cmsmasters_layout', 
			'options' => $tabs_array 
		), 
		array( 
			'id'	=> 'cmsmasters_layout', 
			'type'	=> 'tab_start', 
			'std'	=> 'true' 
		), 
		array( 
			'label'	=> esc_html__('Page Color Scheme', 'agricole'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_page_scheme', 
			'type'	=> 'select_scheme', 
			'hide'	=> 'false', 
			'std'	=> 'default' 
		), 
		array( 
			'label'	=> esc_html__('Page Layout', 'agricole'), 
			'desc'	=> '</br>' . esc_html__('Choosing layout with a sidebar please make sure to add widgets in the Appearance - Widgets tab. The empty sidebar won\'t be displayed.', 'agricole'), 
			'id'	=> 'cmsmasters_layout', 
			'type'	=> 'radio_img', 
			'hide'	=> '', 
			'std'	=> $cmsmasters_global_layout, 
			'options' => array( 
				'r_sidebar' => array( 
					'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg', 
					'label' => esc_html__('Right Sidebar', 'agricole'), 
					'value'	=> 'r_sidebar' 
				), 
				'l_sidebar' => array( 
					'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg', 
					'label' => esc_html__('Left Sidebar', 'agricole'), 
					'value'	=> 'l_sidebar' 
				), 
				'fullwidth' => array( 
					'img'	=> get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg', 
					'label' => esc_html__('Full Width', 'agricole'), 
					'value'	=> 'fullwidth' 
				) 
			) 
		), 
		array( 
			'label'	=> esc_html__('Header Overlaps Content', 'agricole'), 
			'desc'	=> esc_html__('enable', 'agricole'), 
			'id'	=> 'cmsmasters_header_overlaps', 
			'type'	=> 'checkbox', 
			'hide'	=> '', 
			'std'	=> $cmsmasters_global_header_overlaps 
		), 
		array( 
			'label'	=> esc_html__('Disabled Heading Block', 'agricole'), 
			'desc'	=> esc_html__('Use this checkbox to disable heading block', 'agricole'), 
			'id'	=> 'cmsmasters_heading_block_disabled', 
			'type'	=> 'checkbox', 
			'hide'	=> 'true', 
			'std'	=> 'false' 
		), 
		array( 
			'label'	=> esc_html__('Choose Right\Left Sidebar', 'agricole'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_sidebar_id', 
			'type'	=> 'select_sidebar', 
			'hide'	=> 'true', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('Bottom Sidebar', 'agricole'), 
			'desc'	=> esc_html__('Show', 'agricole'), 
			'id'	=> 'cmsmasters_bottom_sidebar', 
			'type'	=> 'checkbox', 
			'hide'	=> '', 
			'std'	=> $cmsmasters_global_bottom_sidebar 
		), 
		array( 
			'label'	=> esc_html__('Choose Bottom Sidebar', 'agricole'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_bottom_sidebar_id', 
			'type'	=> 'select_sidebar', 
			'hide'	=> 'true', 
			'std'	=> '' 
		), 
		array( 
			'label'	=> esc_html__('Choose Bottom Sidebar Layout', 'agricole'), 
			'desc'	=> '', 
			'id'	=> 'cmsmasters_bottom_sidebar_layout', 
			'type'	=> 'select', 
			'hide'	=> 'true', 
			'std'	=> $cmsmasters_global_bottom_sidebar_layout, 
			'options' => array( 
				'11' => array( 
					'label' => '1/1',
					'value'	=> '11' 
				), 
				'1212' => array( 
					'label' => '1/2 + 1/2',
					'value'	=> '1212' 
				), 
				'1323' => array( 
					'label' => '1/3 + 2/3',
					'value'	=> '1323' 
				), 
				'2313' => array( 
					'label' => '2/3 + 1/3',
					'value'	=> '2313' 
				), 
				'1434' => array( 
					'label' => '1/4 + 3/4',
					'value'	=> '1434' 
				), 
				'3414' => array( 
					'label' => '3/4 + 1/4',
					'value'	=> '3414' 
				), 
				'131313' => array( 
					'label' => '1/3 + 1/3 + 1/3',
					'value'	=> '131313' 
				), 
				'121414' => array( 
					'label' => '1/2 + 1/4 + 1/4',
					'value'	=> '121414' 
				), 
				'141214' => array( 
					'label' => '1/4 + 1/2 + 1/4',
					'value'	=> '141214' 
				), 
				'141412' => array( 
					'label' => '1/4 + 1/4 + 1/2',
					'value'	=> '141412' 
				), 
				'14141414' => array( 
					'label' => '1/4 + 1/4 + 1/4 + 1/4',
					'value'	=> '14141414' 
				) 
			) 
		), 
		array( 
			'id'	=> 'cmsmasters_layout', 
			'type'	=> 'tab_finish' 
		) 
	);
	
	
	return $custom_page_meta_fields;
}
}

