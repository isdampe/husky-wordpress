<?php defined('ABSPATH') or exit;
/*
 * Plugin Name: Husky
 * Plugin URI:  https://developer.wordpress.org/plugins/husky/
 * Description: Automaticlly highlight code blocks with Prismjs
 * Version:     0.1.0
 * Author:      isdampe
 * Author URI:  http://dam.pe/
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: husky
*/

define('HUSKY_VERSION',						'0.1.0');
define('HUSKY_PLUGIN_BASEURL',			 	plugin_dir_url(__FILE__));

include 'lib/hook.php';
