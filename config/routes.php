<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\PhpRenderer;
use Slim\App;

return function (App $app) {

    $app->get('/', function (Request $request, Response $response, $args) {

        $renderer = new PhpRenderer('../app/views');
        return $renderer->render($response, "home.php", $args);
    });

};