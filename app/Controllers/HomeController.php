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
    }