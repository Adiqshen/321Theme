<?php

/*
Theme Name: 321Theme
Theme URI: http://adiqshen.com/wordpressSpr15/
Author: Adiqshen Media
Author URI: http://adiqshen.com/wordpressSpr15/
Description: 321 Custom Theme
Version: 1.0
*/

// Register Menus
register_nav_menus(array('main-menu' => __('Main'),));
// Theme Support
add_theme_support( 'post-thumbnails' );
// Side-bars
register_sidebars( 3, array(
    'before_widget' =>'<div class="event">',
    'after_widget' =>'</div">',
    'before_title' =>'<h3>',
    'after_title' =>'</h3>',
));
// Title Tag
function get_my_title_tag() {
    global $post;   
    if (is_front_page()) {
        bloginfo('description');
    }
    elseif (is_page() || is_single()) {
        the_title();   
    } 
    else {  
        bloginfo('description');   
    } 
    if ( $post->post_parent ) {    
        echo ' ... ';
        echo get_the_title($post->post_parent);       
    }
    echo ' ... ';
    bloginfo('name');
    echo ' ... ';
    echo 'Seattle, WA.';
}
// Excerpts
add_post_type_support( 'page', 'excerpt' );

?>