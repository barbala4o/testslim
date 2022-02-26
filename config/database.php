<?php

use Illuminate\Database\Capsule\Manager;
use Slim\Container;

return function (Container $container) {
	$capsule = new Manager;
	$capsule->addConnection($container['settings']['db']);
	$capsule->setAsGlobal();
	$capsule->bootEloquent();
	$container['db'] = $capsule;
};