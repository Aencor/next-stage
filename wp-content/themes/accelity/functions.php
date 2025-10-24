<?php

/**
 * Includes
 *
 * The $monk_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 */
$monk_includes = [
	"functions/init.php", // Initial theme setup and constants
	"functions/config.php", // Configuration
	"functions/scripts.php", // Scripts and stylesheets
	"functions/security.php", // Security focused settings
	"functions/options.php", // ACF Theme Options
	"functions/shortcodes.php", // Custom Wordpress Shortcodes for WYSIWYGs
	"functions/blocks.php" // Declare Custom Blocks
];

function nylon_include($includes) {
	if (!is_array($includes)) {
		$includes = [$includes];
	}
	foreach ($includes as $file) {
		if (!($filepath = locate_template($file))) {
			trigger_error(
				sprintf(__("Error locating %s for inclusion", "accelity"), $file),
				E_USER_ERROR
			);
		}
		require_once $filepath;
	}
}
nylon_include($monk_includes);

/*
 * Editor styles
 * Uncomment to bring custom styles or fonts into the admin editor.
 * add_theme_support('editor-styles');
 * add_editor_style('/assets/build/style-editor.css');
 *
 */

add_theme_support("disable-custom-colors");
