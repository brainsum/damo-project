<?php

/**
 * @file
 * Settings for the DAMo project.
 */

$settings['file_public_path'] = 'sites/default/files';
// Stuff outside the webroot.
$settings['file_temp_path'] = '../tmp';
$settings['file_private_path'] = '../private_files';
$settings['config_sync_directory'] = '../config/sync';

// Additional settings from the web/sites folder.
// Probably should put these outside of webroot, too.
if (file_exists(__DIR__ . '/docker.settings.php')) {
  include_once __DIR__ . '/docker.settings.php';
}

if (file_exists(__DIR__ . '/development.settings.php')) {
  include_once __DIR__ . '/development.settings.php';
}

if (file_exists(__DIR__ . '/local.settings.php')) {
  include_once __DIR__ . '/local.settings.php';
}
