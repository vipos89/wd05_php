<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_FILES['img'])){
        if (!file_exists(__DIR__.'/uploads') || !is_dir(__DIR__.'/uploads')){
            mkdir(__DIR__.'/uploads');
            chmod(__DIR__.'/uploads', 0777);
        }

        $fileCount = count($_FILES['img']['name']);
        for ($i=0; $i<$fileCount; $i++){
              $fileName = $_FILES['img']['name'][$i];
              $ext = explode('.', $fileName);
              $ext = $ext[1];
              while (file_exists(__DIR__.'/uploads/'.$fileName)){
                  $fileName = rand(0,100000).".".$ext;
              }
              move_uploaded_file($_FILES['img']['tmp_name'][$i], __DIR__.'/uploads/'.$fileName);
        }
        $files = scandir(__DIR__.'/uploads');
        for ($i=2; $i<count($files); $i++){

            if(is_file(__DIR__.'/uploads/'. $files[$i])){
                echo __DIR__.'/uploads'. $files[$i]. "<br>";
            }
        }


    }



}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" enctype="multipart/form-data" method="post">
    <input type="file" name="img[]" multiple>
    <button type="submit" >Send</button>

</form>

</body>
</html>
