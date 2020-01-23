<?php
/**
 * @package VC_Custom_Widget
 * @version 1.0.0
 */
/*
Plugin Name: Visual Composer Custom Widget
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: Visual Composer custom widget development pack.
Author: Azad
Version: 1.0.0
Author URI: http://akalm.me
*/


// Before VC Init
add_action( 'vc_before_init', 'vc_before_init_actions' );
 
function vc_before_init_actions() {
     
    // Require new custom Element
    require_once( plugin_dir_path( __FILE__ ).'/vc-elements/my-first-custom-element.php' ); 
     
}