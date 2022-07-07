<?php

    $fp = fopen(__DIR__.'/1.txt', 'w+');
//    $content = fread($fp, 100000000);
//    echo $content;
    fwrite($fp, 'ololo');
    fwrite($fp, 'ololo');
    fwrite($fp, 'ololo');
    fwrite($fp, 'ololo');
    fwrite($fp, 'ololo');
    fwrite($fp, 'ololo');
    fwrite($fp, 'ololo');
    fwrite($fp, 'ololo');
    fwrite($fp, 'ololo');

//    echo "<br>2: ";print_r($content);
    fclose($fp);


    echo "<br>";
    $fp = fopen(__DIR__.'/1.txt', 'r');
    $content = fread($fp, 100000000);
    print_r($content);
    fclose($fp);



