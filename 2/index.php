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
<h1> С помощью цикла do…while написать функцию для вывода чисел от 0 до 10 </h1>
<p>
<?

$a = 0;

do {
    if ($a == 0) {
        echo $a . " - ноль.<br>";
    } elseif ($a & 1 != 0) {
        echo $a . " - нечетное число.<br>";
    } else {
        echo $a . " - четное число.<br>";
    }
    $a++;
} while ($a <= 10);

?>
</p>
</body>
</html>



