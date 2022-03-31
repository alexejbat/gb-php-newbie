<html>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="/css/style.css" />
<title>Результат загрузки файла</title>
</head>
<body>
<?php

function getGallery($path) {
   // return array_splice(scandir($path), 2);
    return getAssocResult("SELECT * FROM `images` ORDER BY likes DESC");
}

function getOneImage(int $id) {
    return getAssocResult("SELECT * FROM `images` WHERE id = {$id}")[0];
}

function addLikes(int $id) {
    executeSql("UPDATE `images` SET likes = likes + 1 WHERE id = {$id}");
}

function loadImage() {
    $path_big = IMG_BIG . $_FILES["image"]["name"];
    $path_small = IMG_SMALL . $_FILES["image"]["name"];
    //Проверяем файл
    //Проверка на тип файла
    $imageinfo = getimagesize($_FILES['image']['tmp_name']);

    if ($imageinfo['mime'] != 'image/png' && $imageinfo['mime'] != 'image/gif' && $imageinfo['mime'] != 'image/jpeg') {
        echo "Можно загружать только jpg-файлы, неверное содержание файла, не изображение.";
        exit;
    }

//Проверка на размер файла
    if ($_FILES["image"]["size"] > 1024 * 5 * 1024) {
        echo("Размер файла не больше 5 мб");
        exit;
    }

//Проверка расширения файла
    $blacklist = [".php", ".phtml", ".php3", ".php4"];
    foreach ($blacklist as $item) {
        if (preg_match("/$item\$/i", $_FILES['image']['name'])) {
            header("Location: /gallery&status=error1");
            die();
            echo "Загрузка php-файлов запрещена!";
            exit;
        }
    }

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $path_big)) {

        $filename = mysqli_real_escape_string(getDb(), $_FILES['image']['name']);
        executeQuery("INSERT INTO `images`(`filename`) VALUES ('$filename')");
//Изменение размера
        $image = new SimpleImage();
        $image->load($path_big);
        $image->resizeToWidth(150);
        $image->save($path_small);
        header("Location: /gallery&status=OK");
        die();
    } else {
        echo "Ошибка<br>";
    }
}
?>

</body>
</html>
