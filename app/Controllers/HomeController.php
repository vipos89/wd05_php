<?php


    namespace App\Controllers;


    use App\Models\User;

    class HomeController
    {
        public function index()
        {
            $user = new User();
            $user->sayHello();
        }

        public function about(){
            echo "about";
        }

        public function notFound(){
            echo "404 page";
        }
    }