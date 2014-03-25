<?php

error_reporting(-1);

use Symfony\Component\ClassLoader\ClassLoader;

require_once dirname(__FILE__) . '/../vendor/autoload.php';

$autoloader = new ClassLoader();
$autoloader->addPrefixes(array(
    'Gn' => dirname(__FILE__) . '/../src'
));
$autoloader->register();
