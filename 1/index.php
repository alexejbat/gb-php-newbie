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
<h1> С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка. </h1>
<p>
<?

$a = 0;

while ($a <= 100) {
    if ($a % 3 == 0) {
        echo "$a ";
    }
    $a++;
}

?>
</p>
</body>
</html>



