<?php
//////
//////    $array = [
//////        1,
//////        2,
//////        3,
//////        4,
//////        5,
//////        6,
//////        [
//////            1,
//////            2,
//////            3,
//////            5,
//////            6,
//////            7,
//////            89,
//////            [
//////                123456789, []
//////            ]
//////        ]
//////    ];
//////    echo "<pre>";
//////  print_r($array);
//////    echo "</pre>";
//////
//////    echo $array[6][7][0];
//////    $level1 = $array[6];
//////    $level2 = $level1[7];
//////    $level3 = $level2[0];
//////
//////    echo $level3;
////
////    $array = ["love", "PHP", "I"];
////    // res I love php
////
////    echo $array[2] . " " . $array[0] . " " . $array[1];
////    //wd05
////    //     - Alekseychuck Igor
////    //      - Ivanov Ivan
////    //wd04
////    //      - Petrov Petr
////    //      - Sidorov Sidr
////
////    $posts = [
////        [
////            'title' => ' Моя первая страница 1',
////            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
////            'img' => 'https://www.kv.by/sites/default/files/pictures/mainimage/2017/05/v.jpg'
////        ],
////        [
////            'title' => ' Моя первая страница 2',
////            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
////            'img' => 'https://www.kv.by/sites/default/files/pictures/mainimage/2017/05/v.jpg'
////        ],
////        [
////            'title' => ' Моя первая страница 3',
////            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
////            'img' => 'https://www.kv.by/sites/default/files/pictures/mainimage/2017/05/v.jpg'
////        ],
////        [
////            'title' => ' Моя первая страница 4',
////            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
////            'img' => 'https://www.kv.by/sites/default/files/pictures/mainimage/2017/05/v.jpg'
////        ],
////        [
////            'title' => ' Моя первая страница 5',
////            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
////            'img' => 'https://www.kv.by/sites/default/files/pictures/mainimage/2017/05/v.jpg'
////        ]
////    ];
////
////    $i = 1000000;
////    $var = 17;
////    $counter = 0;
////    echo "<br>";
////
////    while($var < $i){
////        if ($var == 34816){
////            $var++;
////            continue;
////        }
////        $var *= 2; // $var  = $var *2;
////        $counter++;
////        echo($counter." ". $var);
////
////        echo "<br>";
////        echo "-----------<br> ";
////    }
////
//////    do{
//////        $var *= 2; // $var  = $var *2;
//////        $counter++;
//////        echo($counter." ". $var);
//////        echo "<br>";
//////        echo "-----------<br> ";
//////
//////    }while($var < $i);
//////
////    var_dump("final:".--$counter." ". $var);
////    // Наполнить массив четными числами от 0 до 1000
////    $array = [1,2,3,4,5,6,7,8,9,10];
////    $odd = [];
////    $even = [];
////    echo "<br>-----<br>";
////    foreach ($array as $key => $element){
////        echo "$key <br>";
//////        if ($element % 2 ==0){
//////            $odd[] =  $element;
//////        }else{
//////            $even[] = $element;
//////        }
////        if ($element % 2 ==0){
////            $array[$key] *= 2;
////        }
////
////        if ($key % 2 ==0){
////            $array[$key] *= 3;
////        }
////    }
//////    var_dump($odd);
//////    echo "<br>-----<br>";
//////    var_dump($even);
////
////var_dump($array);
////
////    $students = [
////        0=>'Ivanov',
////        1=>'Petrov',
////        2 =>'Sidorov',
////
////    ];
////
////   echo "<pre>";
////   print_r($students);
////   echo "</pre>";
//////$count  = count($students);
//////var_dump($count);
////
////for ($i=0; $i < count($students); $i++){
////    $students[$i] = 'Student '.  $students[$i];
////    $students[$i] = 'Student '.  $students[$i];
////    $students[$i] = 'Student '.  $students[$i];
////    $students[$i] = 'Student '.  $students[$i];
////    $students[$i] = 'Student '.  $students[$i];
////    $students[$i] = 'Student '.  $students[$i];
////}
////
////
////
////
////
////
////
////
////
////
////
////
////
////
////
//    $posts = [
//        [
//            'title' => ' Моя первая страница 1',
// //           'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
//            'img' => 'https://www.kv.by/sites/default/files/pictures/mainimage/2017/05/v.jpg'
//        ],
//        [
//            'title' => ' Моя первая страница 2',
//  //          'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
//            'img' => 'https://www.kv.by/sites/default/files/pictures/mainimage/2017/05/v.jpg'
//        ],
//        [
//            'title' => ' Моя первая страница 3',
//   //         'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
//            'img' => 'https://www.kv.by/sites/default/files/pictures/mainimage/2017/05/v.jpg'
//        ],
//        [
//            'title' => ' Моя первая страница 4',
//  //          'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
//            'img' => 'https://www.kv.by/sites/default/files/pictures/mainimage/2017/05/v.jpg'
//        ],
//        [
//            'title' => ' Моя первая страница 5',
// //           'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
//            'img' => 'https://www.kv.by/sites/default/files/pictures/mainimage/2017/05/v.jpg'
//        ]
//    ];
//
//foreach ($posts as $key => $post){
//    foreach ($post as $keyName => $item){
//        echo $keyName.":".$item."<br>";
//    }
//}
//
//for ($i=0 ; $i< count($posts); $i++){
//    $post = $posts[$i];
//    foreach ($post as $keyName => $item){
//        echo $keyName.":".$item."<br>";
//    }
//}
//
//// while выводить на экран рандомное число от 0 до 100
//// пока это число не будет > 80
