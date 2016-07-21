<?php

require_once __DIR__ . '/../config.php';

$user = [
    'name' => 'daniel guillermo',
    'lastname' => 'romero gelvez',
    'email' => 'daniel@ejemplo.com'
];

// Determina si el sitio está online o en mantenimiento.
$online = true;

echo $twig->render('view2.twig', compact('user', 'online'));
