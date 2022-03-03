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
<h2>Рандомные числа от [0...15]:</h2>
<p>
    <?
    $a = mt_rand(0, 15);

    switch ($a) {
        case 0: echo $a++ . "<br>";
        case 1: echo $a++ . "<br>";
        case 2: echo $a++ . "<br>";
        case 3: echo $a++ . "<br>";
        case 4: echo $a++ . "<br>";
        case 5: echo $a++ . "<br>";
        case 6: echo $a++ . "<br>";
        case 7: echo $a++ . "<br>";
        case 8: echo $a++ . "<br>";
        case 9: echo $a++ . "<br>";
        case 10: echo $a++ . "<br>";
        case 11: echo $a++ . "<br>";
        case 12: echo $a++ . "<br>";
        case 13: echo $a++ . "<br>";
        case 14: echo $a++ . "<br>";
        case 15: echo $a++ . "<br>";
    }
    ?>
</p>
<br><br>
<h2>Рекурсия от [0...15]:</h2>
<p>
    <?
    $a = mt_rand(0, 15);

    function foo($a) {
        echo $a++ ."<br>";
       if ($a <= 15) foo($a);
    }

    foo($a);
    ?>
</p>
</body>
</html>
