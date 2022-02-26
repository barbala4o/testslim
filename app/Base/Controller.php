<?php

namespace App\Base;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class Controller
{
	public function index(Request $request, Response $response, $params){
		echo "Hello controller";
	}
}