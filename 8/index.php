<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Третий урок</title>
    <link rel="stylesheet" type="text/css" href="css/index.css"
</head>
<body>
<h1> Вывести на экран только города, начинающиеся с буквы «К» </h1>
<p>
<?

$towns = [
    "Московская область" => ["Москва", "Зеленоград", "Клин"],
    "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштандт"],
    "Рязанская область" => ["Рязань", "Щацк", "Скопин", "Кораблино"],
];

foreach ($towns as $key => $region) {
    echo $key . ':<br>';
    $str = "";
    foreach ($region as $town){
        if (mb_substr($town, 0, 1, "UTF-8") === 'К') {
            $str .= $town . ", ";
        }
    }
    $str = mb_substr($str , 0, -2) . '.<br>';
    echo "{$str} <br>";
}

?>
</p>
</body>
</html>



