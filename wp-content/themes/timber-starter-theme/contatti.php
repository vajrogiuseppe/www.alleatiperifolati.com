<?php
/*
*  Template Name: contatti
*/



$context = Timber::get_context();

$context['risorse'] = Timber::get_posts(array('post_type' => 'risorse'));

$templates = array('templates/contatti.twig');
Timber::render($templates, $context);