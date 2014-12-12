<?php

/*

Plugin Name: Castlegate IT WP No NBSP
Plugin URI: http://github.com/castlegateit/cgit-wp-no-nbsp
Description: Remove empty paragraphs containing non-breaking spaces.
Version: 1.0
Author: Castlegate IT
Author URI: http://www.castlegateit.co.uk/
License: MIT

*/

/**
 * Remove empty paragraphs on output
 */
function cgit_no_nbsp($content) {
    return preg_replace('/<p>(&nbsp;)*<\/p>/i', '', $content);
}

add_filter('the_content', 'cgit_no_nbsp');

/**
 * Remove empty paragraphs on save
 */
function cgit_no_nbsp_editor($content) {
    return preg_replace('/^(&nbsp;)+\r?$/im', '', $content);
}

add_filter('content_save_pre', 'cgit_no_nbsp_editor');
