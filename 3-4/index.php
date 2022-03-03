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
    <h2>4 арифметические операции в виде функций с двумя параметрами :</h2>
<p>
    <?
    function add($a, $b) {
        return $a + $b;
    }

    function reduce($a, $b) {
        return $a - $b;
    }

    function divide($a, $b) {
        return ($b == 0) ? "Ошибка" : $a / $b;
    }

    function multiply($a, $b) {
        return $a * $b;
    }

    function mathOperation($a, $b, $operation = '') {
        if ($operation) {
            switch($operation) {
                case "add": return "Сумма чисел: " . add($a, $b) ."<br>";
                case "reduce": return "Разность чисел: " . reduce($a, $b) ."<br>";
                case "divide": return "Частное чисел: " . divide($a, $b) ."<br>";
                case "multiply": return "Произведение чисел: " . multiply($a, $b);
                default: return "Неверная операция";
            }
        }
        return "Сумма чисел: " . add($a, $b) ."<br>" .
            "Разность чисел: " . reduce($a, $b) ."<br>" .
            "Частное чисел: " . divide($a, $b) ."<br>" .
            "Произведение чисел: " . multiply($a, $b);
    }

    $a = mt_rand(-99, 100);
    $b = mt_rand(-99, 100);

    echo "a = {$a};<br>
      b = {$b};<br>";




    ?>
</p>
<br><br>
    <h2>В зависимости от   переданного значения выполнить операцию :</h2>
<p>
    <?
    echo mathOperation($a, $b);
    ?>
</p>
</body>
</html>
