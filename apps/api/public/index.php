<?php

error_reporting(-1);

use Symfony\Component\ClassLoader\ClassLoader;

require_once dirname(__FILE__) . '/../vendor/autoload.php';

$autoloader = new ClassLoader();
$autoloader->addPrefixes(array(
    'Gn' => dirname(__FILE__) . '/../src'
));
$autoloader->register();

header('Content-Type: application/json');

//$dbh = new \PDO('pgsql:dbname=')


echo json_encode(array(
    'success' => true,
    'message' => '@todo create API',
    'newsitems' => array(
        array(
            'id' => 1,
            'title' => 'Ornare Inceptos'
        ),
        array(
            'id' => 2,
            'title' => 'Vivamus sagittis lacus'
        )
    )
));

exit(0);
