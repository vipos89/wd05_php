<?php
include_once 'db.php';

    if ($_SERVER['REQUEST_METHOD']== 'POST'){
        $title = $_POST['title'];
        $content = $_POST['content'];
        $sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content');";
        mysqli_query($connection, $sql);
    }
