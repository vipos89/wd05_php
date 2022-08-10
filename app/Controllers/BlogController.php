<?php


    namespace App\Controllers;


    use App\Models\Post;

    class BlogController
    {
//        public function index(){
//            echo "blog";
//        }

        public function page($id)
        {
            view('post', ['post'=>Post::findById($id)]);
        }

    }