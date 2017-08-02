<?php
/**
 * Created by PhpStorm.
 * User: death
 * Date: 7/29/2017
 * Time: 7:04 PM
 */

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../../vendor/autoload.php';
$container = new \Slim\Container;
$app = new \Slim\App($container);


$settings = $container->get('settings');
$settings->replace([
    'displayErrorDetails' => true,
    'determineRouteBeforeAppMiddleware' => true,
    'debug' => true
]);

$container = $app->getContainer();

$app->post('/SignIn', \Controller\SigninController::class . ':validation');
$app->post('/SignUp', \Controller\SignupController::class . ':createAccount');

$app->run();
