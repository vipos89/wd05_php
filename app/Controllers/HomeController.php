<?php


    namespace App\Controllers;


    use App\Helpers\Debugger;
    use App\Models\Post;
    use App\Models\User;

    class HomeController
    {
        public function index()
        {
            $h1 = 'Hello world';
            $posts = Post::getAll();
            view('index',  compact('h1', 'posts'));

        }

        public function about(){
            view('about');
        }

        public function notFound(){
            view('404');
        }
    }