<?php

require_once 'twig/lib/Twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('twig/lib/Twig/templates');
$twig = new Twig_Environment($loader, array(
     // 'cache' => 'C:\xampp\htdocs\bouclette\cache',
));
$template = $twig->loadTemplate('boucle.html');

echo $template->render(array());

