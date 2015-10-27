<?php
/**
 * Created by PhpStorm.
 */
require_once 'Twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache' => 'compilation_cache',
    'auto_reload'   => true
));

echo $twig->render('books.html.twig', array());
