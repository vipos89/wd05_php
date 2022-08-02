<?php

    include_once __DIR__ . '/../vendor/autoload.php';

    $controller = new App\Controllers\HomeController();
    $controller->index();
    $dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__ . "/../");
    $dotenv->load();
    var_dump(getenv('S3_BUCKET'));
