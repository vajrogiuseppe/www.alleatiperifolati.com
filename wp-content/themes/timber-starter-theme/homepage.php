<?php
/*
*  Template Name: homepage
*/




$context = Timber::get_context();

$templates = array('templates/homepage.twig');
Timber::render($templates, $context);



