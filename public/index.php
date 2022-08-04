<?php

    include_once __DIR__ . '/../vendor/autoload.php';

    use App\Controllers\BlogController;
    use App\Controllers\HomeController;
    use App\Helpers\Debugger;
    use Bramus\Router\Router;

    $dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__ . "/../");
    $dotenv->load();

    $host = getenv('DB_HOST');
    $dbname = getenv('DB_NAME');

    $connectionString = "mysql:host={$host};dbname={$dbname}";

    $connection  = new PDO($connectionString, getenv('DB_USER'), getenv('DB_PASSWORD'));

    $res = $connection->query('select * from posts');
    $posts = $res->fetchAll(PDO::FETCH_OBJ );
    Debugger::debug($posts);















    $router = new Router();
    $router->get('/', HomeController::class.'@index');
    $router->get('/about', HomeController::class.'@about');
    $router->get('/blog', BlogController::class."@index");
    $router->get('/blog/{id}', BlogController::class."@page");
    $router
        ->match('GET|POST|PUT|DELETE', '.*',
            HomeController::class.'@notFound'
        );





    $router->run();
