<?php

    include_once __DIR__ . '/../vendor/autoload.php';
    include_once __DIR__ . '/../app/Core/core_functions.php';

    use App\Controllers\BlogController;
    use App\Controllers\HomeController;
    use App\Helpers\Debugger;
    use Bramus\Router\Router;

    $dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__ . "/../");
    $dotenv->load();

    $router = new Router();
    $router->get('/', HomeController::class.'@index');
    $router->get('/about', HomeController::class.'@about');
    #$router->get('/blog', BlogController::class."@index");

    $router->get('/blog/{id}', BlogController::class."@page");

    $router
        ->match('GET|POST|PUT|DELETE', '.*',
            HomeController::class.'@notFound'
        );

    $router->run();
