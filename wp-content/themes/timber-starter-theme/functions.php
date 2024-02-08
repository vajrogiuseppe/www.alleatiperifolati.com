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



function register_scenari_post_type() {
    register_post_type('scenari', array(
        'labels' => array(
            'name' => 'Scenari',
            'singular_name' => 'Scenario',
        ),
        'public' => true,
        'has_archive' => true, 
        'supports' => array('title', 'editor', 'thumbnail'),
    ));
}

add_action('init', 'register_scenari_post_type');



add_action('init', 'register_scenari_post_type');

/*function register_fascia_post_type() {
    register_post_type('Fascia', array(
        'labels' => array(
            'name' => 'Fascia',
            'singular_name' => 'Fascia',
        ),
        'public' => true,
        'has_archive' => false,
        'supports' => array('title', 'editor', 'thumbnail'),
    ));
}

add_action('init', 'register_fascia_post_type');*/

function register_video_post_type() {
    register_post_type('Video', array(
        'labels' => array(
            'name' => 'Video',
            'singular_name' => 'Video',
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
    ));
}

add_action('init', 'register_video_post_type');

function set_scenari_archive_template($archive_template) {
    global $post;

    if (is_post_type_archive('scenari')) {
        $archive_template = locate_template(array('archive-scenari.twig', 'scenari.twig'));
    }

    return $archive_template;
}

add_filter('archive_template', 'set_scenari_archive_template');




function register_autore_taxonomy() {
    $labels = array(
        'name'                       => _x( 'Autori', 'taxonomy general name', 'your-text-domain' ),
        'singular_name'              => _x( 'Autore', 'taxonomy singular name', 'your-text-domain' ),
        'search_items'               => __( 'Cerca Autori', 'your-text-domain' ),
        'popular_items'              => __( 'Autori Popolari', 'your-text-domain' ),
        'all_items'                  => __( 'Tutti gli Autori', 'your-text-domain' ),
        'edit_item'                  => __( 'Modifica Autore', 'your-text-domain' ),
        'update_item'                => __( 'Aggiorna Autore', 'your-text-domain' ),
        'add_new_item'               => __( 'Aggiungi Nuovo Autore', 'your-text-domain' ),
        'new_item_name'              => __( 'Nuovo Nome Autore', 'your-text-domain' ),
        'separate_items_with_commas' => __( 'Separa gli autori con virgole', 'your-text-domain' ),
        'add_or_remove_items'        => __( 'Aggiungi o rimuovi autori', 'your-text-domain' ),
        'choose_from_most_used'      => __( 'Scegli tra gli autori più utilizzati', 'your-text-domain' ),
        'menu_name'                  => __( 'Autori', 'your-text-domain' ),
    );

    $args = array(
        'hierarchical'          => false,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array( 'slug' => 'autore' ), 
    );

    register_taxonomy( 'autore', 'scenari', $args );
}

add_action( 'init', 'register_autore_taxonomy' );



function register_risorse_post_type() {
    register_post_type('Risorse', array(
        'labels' => array(
            'name' => 'Risorse',
            'singular_name' => 'risorse',
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
    ));
}

add_action('init', 'register_risorse_post_type');

     

new StarterSite();