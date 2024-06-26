

<?php
/*
 Plugin Name: Dashcleaner
 description: A plugin to remove annoying WordPress Dashboard widgets

*/

add_action( 'wp_dashboard_setup', 'bt_remove_dashboard_widgets' );


function bt_remove_dashboard_widgets() {

remove_meta_box( 'dashboard_primary','dashboard','side' ); 
remove_meta_box( 'dashboard_plugins','dashboard','normal' ); 
remove_meta_box( 'dashboard_right_now','dashboard', 'normal' ); 
remove_action( 'welcome_panel','wp_welcome_panel' ); 
remove_action( 'try_gutenberg_panel', 'wp_try_gutenberg_panel'); 
remove_meta_box('dashboard_quick_press','dashboard','side'); 
remove_meta_box('dashboard_recent_drafts','dashboard','side'); 
remove_meta_box('dashboard_secondary','dashboard','side'); 
remove_meta_box('dashboard_incoming_links','dashboard','normal');
remove_meta_box('dashboard_recent_comments','dashboard','normal'); 
remove_meta_box('dashboard_activity','dashboard', 'normal'); 
remove_meta_box( 'e-dashboard-overview', 'dashboard', 'normal'); 
}

?>