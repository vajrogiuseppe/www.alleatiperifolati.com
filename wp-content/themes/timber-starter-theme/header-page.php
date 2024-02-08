<?php 


$context = Timber::get_context();
$context['fascia'] = Timber::get_posts(array('post_type' => 'fascia'));

$templates = array('partial/header_page.twig'); 
Timber::render($templates, $context);


?>