<?php
/**
* Plugin Name: My Plugin
* Plugin URI:https://www.yourwebsiteurl
* Description: My first plugin in wordpress
* Version:1.0
* Author: Gurpreet kaur dhaliwal
* Author URI: https://yourwebsiteurl.com /
**/

 function dh_modify_read_more_link() {
   return '<a class="more-link" href="' . get_permalink() . '">Read more!</a>';

 }
add_filter( 'the_content_more_link', 'dh_modify_read_more_link' );
