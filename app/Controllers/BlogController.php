<?php


    namespace App\Controllers;


    class BlogController
    {
        public function index(){
            echo "blog";
        }

        public function page($id){
            var_dump($id);
            echo "blog page";
        }

    }