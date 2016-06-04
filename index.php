<?php

require_once './vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('./views');

$twig = new Twig_Environment($loader, []);

$who = 'gente del futuro';
$hello = 'sean todos bienvenidos';

echo $twig->render('index.twig', compact('who', 'hello'));