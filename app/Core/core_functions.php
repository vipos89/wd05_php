<?php
    function view($viewName, $vars = []){
        foreach ($vars as $varName => $varValue){
            $$varName = $varValue;
        }
        $view = __DIR__."/../views/{$viewName}.php";
        include __DIR__.'/../views/layout.php';
    }


