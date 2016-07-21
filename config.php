<?php

require_once __DIR__ . '/vendor/autoload.php';

define('APP_ROOT', __DIR__);

$loader = new Twig_Loader_Filesystem(APP_ROOT . '/views');
$twig = new Twig_Environment($loader);
