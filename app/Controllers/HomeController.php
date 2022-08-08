<?php


    namespace App\Controllers;


    use App\Models\User;

    class HomeController
    {
        public function index()
        {
            // @TODO sql
            $h1 = 'Hello world';
            include __DIR__.'/../views/index.php';
        }

        public function about(){
            include __DIR__.'/../views/about.php';
        }

        public function notFound(){
            echo "404 page";
        }
    }