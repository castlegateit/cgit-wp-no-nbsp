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
add_filter('the_content', function($content) {
    return preg_replace('/<p>(&nbsp;)*<\/p>/i', '', $content);
});

/**
 * Remove empty paragraphs on save
 */
add_filter('content_save_pre', function($content) {
    return preg_replace('/^(&nbsp;)+\r?$/im', '', $content);
});
