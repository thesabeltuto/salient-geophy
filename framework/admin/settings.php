<?php
add_action('admin_menu', 'create_admin_menu_geophy');
add_action('init', 'salient_geophy_css');

function create_admin_menu_geophy() {
	add_menu_page ('Theme Support', 'Theme Support','manage_theme','salient_geophy_support','salient_geophy_support', '', 27); //after soulmedic-geo menu
}

function salient_geophy_css() {
	wp_register_style('salient_geophy_css.css', THEME_URL.'/framework/admin/admin.css', '', $GLOBALS['THEME_CSS_VERSION'], '');
	wp_enqueue_style('salient_geophy_css.css');
}
?>