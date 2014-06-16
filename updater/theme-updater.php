<?php
/**
 * One-click updater for the Summit Theme
 *
 * @package EDD Theme Updater
 */

// Includes the files needed for the theme updater
if ( !class_exists( 'EDD_Theme_Updater_Admin' ) ) {
	include( dirname( __FILE__ ) . '/theme-updater-admin.php' );
}

// Loads the updater classes
$updater = new EDD_Theme_Updater_Admin(

	array(
		'remote_api_url' => 'https://easydigitaldownloads.com', // Site where EDD is hosted
		'item_name' => 'Theme Name', // Name of theme
		'theme_slug' => 'theme-slug', // Theme slug
		'version' => '1.0.0', // The current version of this theme
		'author' => 'Easy Digital Downloads' // The author of this theme
	)

);