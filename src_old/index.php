<?php

//    $array = [1,20,3,4];
//    echo empty($array); // bool
//    echo "<br>";
//    echo count($array);
//    echo "<br>";
//    echo min(['sdfsdfdsfsdfds', 'dddd', 'sdfsdfsdfds']);
//    echo "<br>";
//    echo max($array);
//    echo "<br>";
//    echo array_sum($array);
//    echo "<br>";
//    $var = array_shift($array);
//    echo $var;
//    echo "<br>";
//    var_dump($array);
//    echo "<br>";
//    unset($array[0]);
//    var_dump($array);
//    echo "<br>";
//    $posts = [1,4,5,6,16, 7,8,2,3,333,9];
//    $postId = 12;
//    echo in_array($postId, $posts);
//    $str = implode(' , ', $posts);
//    echo $str;
//    echo "<br>";
//    $array2 = explode(' , ', $str);
//    var_dump($array2);
//    echo "<br>";
//    sort($posts);
//    echo "<br>";
//    var_dump($posts);

    $posts = [1,4,5,6,16, 7,8,2,3,333,9];
    $keys = array_keys($posts);
    array_values($posts);
    array_reverse($posts);
    array_flip($posts);


    $array = [
        1 => 'active',
        0 => 'not active',

    ];
    $posts2 = array_flip($array);

    print_r($posts2);

    $status = 'active';

    echo $posts2[$status];

    $res = array_merge($posts, $array, $posts2);
    echo "<pre>";
    print_r($res);
    echo "</pre>";

    $res = array_map(function ($element){
        return $element."ololo";
    }, $res);

    $res2 = array_filter($posts, function ($element){
        return $element> 10;
    }, 0);

    echo "<pre>";
    print_r($res2);
    echo "</pre>";

    foreach ($res as $key => $element){
        $res[$key] = $element."ololo";
    }













