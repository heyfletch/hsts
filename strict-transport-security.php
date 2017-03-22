<?php
/*
Plugin Name: Add Strict Transport Security Header
Plugin URI: https://www.merchantguru.com
Description: Adds HSTS Header with preload and includeSubDomains
Author: Merchant Guru
Version: 0.1
Author URI: https://www.merchantguru.com
*/

// Add HSTS Header for 1 Year with Preload request
add_action( 'send_headers', 'mg_strict_transport_security' );

function mg_strict_transport_security() {
  header( 'Strict-Transport-Security: max-age=31536000; includeSubDomains; preload' );
}
