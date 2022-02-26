<?php

use Slim\App;
use Slim\Container;

require __DIR__ . "/../vendor/autoload.php";

$container = new Container;

$appSettings = require __DIR__. '/../config/settings.php';

$settings = $container->get('settings');
$settings->replace($appSettings);

$db = require __DIR__. '/../config/database.php';
$db($container);

$app = new App($container);

$routes = require __DIR__. "/../config/routes.php";
$routes($app);

$app->run();