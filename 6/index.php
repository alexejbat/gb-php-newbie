<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Второй урок</title>
    <link rel="stylesheet" type="text/css" href="css/index.css"
</head>
<body>
<h1>Функция возведения числа в степень: </h1>
<p>
<?
function power($val, $pow) {
    if ($pow == 1) {
        return $val;
    } elseif ($pow < 0) {
        return power(1 / $val, -$pow);
    }
    return $val * power($val, $pow - 1);
}

echo power(2, 0) . "<br>";
echo power(2, -2) . "<br>";
echo power(2, 2);

?>
</p>
</body>
</html>



