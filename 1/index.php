<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Первый урок</title>
    <link rel="stylesheet" type="text/css" href="css/index.css"
</head>
<body>
<h2>Рандомные числа :</h2>
<p>
    <?
    $a = mt_rand(-100, 100);
    $b = mt_rand(-100, 100);

    echo "a = {$a}; b = {$b}<br><br>";

    if ($a >= 0 && $b >= 0) { // если a и b положительны
    echo "а и б положительные";
    } elseif ($a < 0 && $b < 0) { // если a и b отрицательны
    echo "а и б отрицательные";
    } else { // если a или b разных знаков, т.е. хотя бы одно из них отрицательно
    echo "а и б разных знаков";
    }
    ?>
</p>
</body>
</html>
