<?php
/*
Plugin Name: Marksale
Description: Easy Integration of Marksale
Version: 1.0.0
Author: Marksale Team
Author URI: http://www.marksale.de/
Plugin URI: https://github.com/WeiseUndStark/Marksale_Wordpress
*/

if ( !function_exists( 'add_action' ) ) {
	die();
}

/**
 * Method to write Marksale Code into the footer
 *
 * @return void
 */
function marksale(){
	$marksaleTrackingId = get_option('marksaleTrackingId');
	if(!empty($marksaleTrackingId)) {
		echo '<!--noptimize--><script type="text/javascript">var _mstc = {}; _mstc.id = "' . $marksaleTrackingId . '"; _mstc.endpoint = "https://tracking.weiseundstark.de/api/";</script><script src="https://tracking.weiseundstark.de/tracker.js"></script><!--/noptimize-->';
	}
}

/**
 * Method to include the mainSettings page
 *
 * @return void
 */
function marksale_admin_settings(){
	require_once("marksale_admin.php");
}

/**
 * Method to create the Marksale Menu on the options Page
 *
 * @return void
 */
function marksale_menu(){
	add_options_page('Marksale', 'Marksale', 'administrator', 'marksale', 'marksale_admin_settings');
}

if(is_admin()){
	add_Action('admin_menu', 'marksale_menu');
}

add_action('wp_footer','marksale');
