<?php
/*
Plugin Name:  Complianz Google Consent Mode v2 para
Description: Integra el Consent Mode v2 de Google con el plugin Complianz.
Version: 1.0
Author: Evoratec
Author URI: https://evoratec.com
License: GPL2
*/


add_action('wp_enqueue_scripts', 'consentmode_complianz_script');
function consentmode_complianz_script() {
    wp_enqueue_script('consentmode-complianz', plugin_dir_url(__FILE__) . 'consentmode-complianz.js', array(), null, true);
}

?>
