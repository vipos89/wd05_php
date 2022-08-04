<?php


    namespace App\Helpers;


    class Debugger
    {
        public static function debug($val){
            echo "<pre>";
            print_r($val);
            echo "</pre>";

        }

    }