<?php

require_once './vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('./views');
$twig = new Twig_Environment($loader);

$person = [
    'name' => 'Pedro',
    'age' => 21,
    'name-company' => 'adsiar'
];

echo $twig->render('index.twig', compact('person'));
