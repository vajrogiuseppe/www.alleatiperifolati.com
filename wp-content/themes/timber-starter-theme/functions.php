<?php
/**
 * Timber starter-theme
 * https://github.com/timber/starter-theme
 */

// Load Composer dependencies.
require_once __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/src/StarterSite.php';

Timber\Timber::init();

// Sets the directories (inside your theme) to find .twig files.

function pmi_external_styles() {
    wp_register_style( 'custom-css', get_stylesheet_directory_uri().'/css/custom.css',array(), rand(1, 100) );
    wp_enqueue_style( 'custom-css' );
}

add_action( 'wp_enqueue_scripts', 'pmi_external_styles' );

// Aggiungi il supporto per il logo personalizzato
add_theme_support('custom-logo');

// Aggiungi il supporto per la favicon
add_theme_support('favicon', array(
    'size' => array(16, 32, 64),
));

new StarterSite();
