<?php

namespace husky;

defined('ABSPATH') or exit;


/**
 * Adds required styling and javascript for loading prismjs
 * @return {void}
 */
function enqueue_scripts($hook) {

	wp_enqueue_style('husky-prism-css', sprintf('%sassets/vendor/prismjs/themes/one-dark.css', HUSKY_PLUGIN_BASEURL));
	wp_enqueue_script('husky-prism-js', sprintf('%sassets/vendor/prismjs/prism.js', HUSKY_PLUGIN_BASEURL));

}
add_action('wp_enqueue_scripts', '\husky\enqueue_scripts');
