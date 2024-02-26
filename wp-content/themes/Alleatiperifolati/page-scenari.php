<?php
/*
 * Template Name: Scenari Archive
 */
$context = Timber::get_context();
$context['scenari'] = Timber::get_posts(array('post_type' => 'scenari'));
$context['fascia'] = Timber::get_posts(array('post_type' => 'fascia'));
$context['video'] = Timber::get_posts(array('post_type' => 'video'));
$context['risorse'] = Timber::get_posts(array('post_type' => 'risorse'));

$templates = array('templates/scenari/archive/archive-scenari.twig'); 
Timber::render($templates, $context);
