<?php
$loader = require 'vendor/autoload.php';
$loader->register();

use Duck\GreyDuck;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
$response = new Response();

switch ($request->getPathInfo()) {
    case '/':
        $duck = new GreyDuck();
        $display = $duck->display();
        $response->setContent($display);
        break;

    default:
        $response->setContent('Not found !');
        $response->setStatusCode(Response::HTTP_NOT_FOUND);
}

$response->send();
