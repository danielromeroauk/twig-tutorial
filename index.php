<?php

require_once './vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('./views');
$twig = new Twig_Environment($loader);

$user = [
    'name' => 'daniel guillermo',
    'lastname' => 'romero gelvez',
    'email' => 'daniel@ejemplo.com'
];

echo $twig->render('index.twig', compact('user'));
