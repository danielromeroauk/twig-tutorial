<?php

require_once './vendor/autoload.php';

$loader = new Twig_Loader_Array(array(
    'index' => 'Hola {{ who }}, {{ hello }}.',
));
$twig = new Twig_Environment($loader);

/*
$params = [
    'who' => 'gente del futuro',
    'hello' => 'bienvenidos al primer tutorial de Twig'
];

echo $twig->render('index', $params);
*/

$who = 'gente del futuro';
$hello = 'sean todos bienvenidos al primer tutorial';

echo $twig->render('index', compact('who', 'hello'));