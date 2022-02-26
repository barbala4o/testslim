<?php

use App\Base\Controller;
use Slim\App;

return function (App $app) {
	$app->get('/', Controller::class. ':index');
//    $app->get('/', function (Request $request, Response $response, $params) {
//        $response->getBody()->write('Hello world!');
//        var_dump(DB::table("users")->count());
//        return $response;
//    });
};


