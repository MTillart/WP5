<?php
/**
 * Plugin Name: Very Ultimate Plugin
 * Plugin URI: http://plugin.plugin.ee
 * Description: This is the very ultimate okugin I ever created.
 * Version: 1.0
 * Author: Merliti Tillart
 **/
 
 function dh_modify_read_more_link() {
 return '<a class="more-link" href="' . get_permalink() . '">Click to Read!</a>';
}
add_filter( 'the_content_more_link', 'dh_modify_read_more_link' );