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
<h1>
    Задание выполнить примеры из методички
</h1>
<p>
    <h2>
        Написать самую первую программу на PHP
    </h2>
<!-- Примеры из методички -->
<?php
echo "Hello, World!";
?>
<br>
<h2>
    Переменные и константы
</h2>
<?php
$name = "Aleksei user";
echo "Hello, $name!";
?>
<br>
<h2>
    Константы
</h2>
<?php
define('MY_CONST', 100);
echo MY_CONST;
?>
<br>
<h2>
    Типы данных
</h2>
<?php
$int10 = 42;
$int2 = 0b101010;
$int8 = 052;
$int16 = 0x2A;
echo "Десятеричная система $int10 <br>";
echo "Двоичная система $int2 <br>";
echo "Восьмеричная система $int8 <br>";
echo "Шестнадцатеричная система $int16 <br>";
?>
<br>
<h2>
    Размер числа с плавающей точкой
</h2>
<?php
$precise1 = 1.5;
$precise2 = 1.5e4;
$precise3 = 6E-8;
echo "$precise1 | $precise2 | $precise3";
?>
<br>
<h2>
    Переменные и константы
</h2>
<?php
$a = 1;
echo "$a";
echo '$a';
?>
<br>
<h2>
    Приведение типов можно провести и вручную
</h2>
<?php
$a = 10;
$b = (boolean) $b;
?>
<br>
<h2>
    Операции со строками
</h2>
<?php
$a = 'Hello,';
$b = 'world';
$c = $a . $b;
echo $c;
?>
<br>
<h2>
    Математические операции
</h2>
<?php
$a = 4;
$b = 5;
echo $a + $b . '<br>';    // сложение
echo $a * $b . '<br>';    // умножение
echo $a - $b . '<br>';    // вычитание
echo $a / $b . '<br>';  // деление
echo $a % $b . '<br>'; // остаток от деления
echo $a ** $b . '<br>'; // возведение в степень
?>
<br>
<h2>
    Математическое действие и сразу же присвоить значение переменной
</h2>
<?php
$a = 4;
$b = 5;
$a += $b;
echo 'a = ' . $a;
$a = 0;
echo $a++;     // Постинкремент
echo ++$a;    // Преинкремент
echo $a--;     // Постдекремент
echo --$a;    // Предекремент
?>
<br>
<br>
<h2>
    Операции сравнения
</h2>
<?php
$a = 4;
$b = 5;
var_dump($a == $b);  // Сравнение по значению
var_dump($a === $b); // Сравнение по значению и типу
var_dump($a > $b);    // Больше
var_dump($a < $b);    // Меньше
var_dump($a <> $b);  // Не равно
var_dump($a != $b);   // Не равно
var_dump($a !== $b); // Не равно без приведения типов
var_dump($a <= $b);  // Меньше или равно
var_dump($a >= $b);  // Больше или равно?>

</p>
</body>
</html>