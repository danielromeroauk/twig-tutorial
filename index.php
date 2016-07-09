<?php

require_once './vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('./views');
$twig = new Twig_Environment($loader);

$user = [
    'name' => 'daniel guillermo',
    'lastname' => 'romero gelvez',
    'email' => 'daniel@ejemplo.com'
];

// Determina si el sitio está online o en mantenimiento.
$online = true;

echo $twig->render('view2.twig', compact('user', 'online'));
