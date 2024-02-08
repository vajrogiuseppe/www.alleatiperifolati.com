<?php
/*
 * Template Name: Video Archivio 
 */
$context = Timber::get_context();
$context['scenari'] = Timber::get_posts(array('post_type' => 'scenari'));
$context['fascia'] = Timber::get_posts(array('post_type' => 'fascia'));
$context['video'] = Timber::get_posts(array('post_type' => 'video'));

$templates = array('templates/video/archive/archive-video.twig'); 
Timber::render($templates, $context);
