<?php
/*
Plugin Name: WP never use Woocommerce Analytics
Description: Disable new UI analytics if unwanted
Version: 1.0
*/
defined( "ABSPATH" )
    or die( "trying" );

add_filter( 'woocommerce_admin_disabled', '__return_true' );