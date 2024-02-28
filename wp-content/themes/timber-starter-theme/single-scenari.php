<?php
/*
 * Template Name: single scenari  
 */
$context = Timber::get_context();
$context['risorse'] = Timber::get_posts(array('post_type' => 'risorse'));
$context['scenari'] = Timber::get_posts(array('post_type' => 'scenari'));
$context['fascia'] = Timber::get_posts(array('post_type' => 'fascia'));
$context['video'] = Timber::get_posts(array('post_type' => 'video'));

$templates = array('templates/scenari/single/single-scenari.twig'); 
Timber::render($templates, $context);
