<?php
/**
 * Search results page
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */

 $context['title'] = 'Risultati di ricerca: ' . get_search_query();

 // Aggiungi la logica di ricerca
 $search_query = get_search_query();
 $args = array(
     's' => $search_query,
 );
 
 // Ottieni il contesto esistente
 $context = Timber::get_context();
 
 // Aggiungi i risultati della ricerca al contesto con una chiave diversa
 $context['search_results'] = Timber::get_posts($args);
 
 // Aggiungi i post di diversi tipi al contesto
 $context['scenari'] = Timber::get_posts(array('post_type' => 'scenari'));
 $context['fascia'] = Timber::get_posts(array('post_type' => 'fascia'));
 $context['video'] = Timber::get_posts(array('post_type' => 'video'));
 $context['risorse'] = Timber::get_posts(array('post_type' => 'risorse'));
 
 $templates = array( 'search.twig' ); 
 
 Timber::render( $templates, $context );
 
