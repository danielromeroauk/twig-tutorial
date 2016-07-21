<?php

require_once __DIR__ . '/../config.php';

$people = [
  'Daniel',
  'Juan',
  'Pedro',
  'Carlos'
];

echo $twig->render('view3.twig', compact('people'));
