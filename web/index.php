<?php

$rootDir = dirname(__DIR__) . '/';

include_once $rootDir . 'vendor/autoload.php';

$app = new \Deimos\Micro\Project($rootDir);
echo $app->execute();
