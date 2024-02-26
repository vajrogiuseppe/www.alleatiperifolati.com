<?php
/*
*  Template Name: homepage
*/



$context = Timber::get_context();

$context['scenari'] = Timber::get_posts(array('post_type' => 'scenari'));
$context['video'] = Timber::get_posts(array('post_type' => 'video'));
$context['risorse'] = Timber::get_posts(array('post_type' => 'risorse'));

$templates = array('templates/homepage.twig');
Timber::render($templates, $context);