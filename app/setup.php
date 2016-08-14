<?php

require_once __DIR__.'/../../CVWebsite/vendor/autoload.php';

$templatePath = __DIR__.'/../../CVWebsite/templates';

$loader = new Twig_Loader_Filesystem($templatePath);
$twig = new Twig_Environment($loader);