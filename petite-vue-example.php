<?php
/*
Plugin Name: Petite Vue example
Description: Petite Vue example in the front end
Author: Roumi
Author URI: https://github.com/roumilb
License: GPLv3
Version: 1.0.0
Text Domain: petite-vue
*/

// We add a new shortcode for our petite-vue application
add_shortcode('petite-vue-example-1', 'shortcodeExample1');
// We register the scripts
add_action('wp_enqueue_scripts', 'initScripts');

function initScripts()
{
    // Just register, we enqueue them later, this way they won't be loaded in every page of your website
    wp_register_script('petite-vue-library', 'https://unpkg.com/petite-vue');
    wp_register_script('petite-vue-example-1', plugins_url('/js/example-1.js', __FILE__), ['petite-vue-library']);
}

function shortcodeExample1()
{
    // Add the script to make your petite-vue application works
    wp_enqueue_script('petite-vue-library');
    wp_enqueue_script('petite-vue-example-1');

    // Replace the shortcode with the html of the application
    return file_get_contents(__DIR__.'/views/example-1.html');
}
