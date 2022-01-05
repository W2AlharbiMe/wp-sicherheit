<?php
/*
Plugin Name: Wordpress Sicherheit(Security)
Description: plugin to disable some wordpress settings that would improve security
Version: 1.0.0
Author: Abdullah Alharbi
Author URI: https://github.com/W2AlharbiMe/wp-sicherheit
*/


// NOTE: `sh_` is the prefix of this plugin


require_once 'disable-pingback.php';
require_once 'disable-html-head-tags.php';
require_once 'disable-shortlinks.php';
