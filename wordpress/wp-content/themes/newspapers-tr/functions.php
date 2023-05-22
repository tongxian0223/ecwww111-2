<?php

/**
 * Theme functions and definitions
 *
 * @package Newspapers tr
 */
if (!function_exists('newspapersx_enqueue_styles')) :
	/**
	 * @since 1.0.0
	 */
	function newspaperstr_enqueue_styles()
	{
		wp_enqueue_style('newspaperss-style-parent', get_template_directory_uri() . '/style.css');
		wp_enqueue_style('newspaperstr-style', get_stylesheet_directory_uri() . '/style.css', array('newspaperss-style-parent'), '1.0');
	}

endif;
add_action('wp_enqueue_scripts', 'newspaperstr_enqueue_styles', 9999);


/**
 * Block Patterns.
 */
require get_theme_file_path('/block-patterns.php');


/* Remove parent theme page templates */

function newspaperstr_remove_page_templates($page_templates)
{
	unset($page_templates['header.php']);
	unset($page_templates['front-page.php']);
	unset($page_templates['index.php']);

	return $page_templates;
}
add_filter('theme_page_templates', 'newspaperstr_remove_page_templates');
