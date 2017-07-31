<p id="Something">Some Text</p>
<?php
/**
 * Created by PhpStorm.
 * User: death
 * Date: 7/27/2017
 * Time: 6:39 PM
 * */

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;
$app->get('/hello/{name}', function (Request $request, Response $response) {
$name = $request->getAttribute('name');
$response->getBody()->write("Hello, $name");

return $response;
});
$app->run();