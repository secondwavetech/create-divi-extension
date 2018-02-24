<?php

if ( ! class_exists( 'ET_Builder_Module' ) ) {
	return;
}

$module_files = glob( __DIR__ . '/modules/*/*.php', GLOB_ONLYDIR );

// Load custom Divi Builder modules
foreach ( (array) $module_files as $module_file ) {
	if ( $module_file ) {
		require_once $module_file;
	}
}
