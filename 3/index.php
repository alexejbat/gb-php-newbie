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
<h1> Вывести в цикле значения массива: </h1>
<p>
<?

$towns = [
    "Московская область" => ["Москва", "Зеленоград", "Клин"],
    "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштандт"],
    "Рязанская область" => ["Рязань", "Щацк", "Скопин", "Кораблино"],
];

foreach ($towns as $key => $region) {
    echo $key . ':<br>' . implode(', ', $region) . '.' . '<br>';
}

?>
</p>
</body>
</html>



