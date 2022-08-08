<?php

    include_once __DIR__ . '/../vendor/autoload.php';

    use App\Controllers\BlogController;
    use App\Controllers\HomeController;
    use App\Helpers\Debugger;
    use Bramus\Router\Router;

    $dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__ . "/../");
    $dotenv->load();

//    $id = '15';
//    $post = App\Models\Post::findById($id);
//    Debugger::debug($post);
    // select * from users where id = 15;DELETE * FROM USERS; limit 1
//    $connection = App\Core\DB::getDBConnection();
//
//    $post = App\Models\Post::findById(15);
//    Debugger::debug(App\Models\User::findById(1));
//    Debugger::debug(App\Models\Post::getAll());

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
