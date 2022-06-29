<?php

    if ($_SERVER['REQUEST_METHOD']== 'POST'){
        echo "POST";
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    }
