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
<h1> Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания </h1>
<p>
<?

function translit($txt) {

    $translit = array (
            "а" => "a", "б" => "b", "в" => "v", "г" => "g", "д" => "d",
            "е" => "e", "ё" => "yo", "ж" => "zh", "з" => "z", "и" => "i",
            "й" => "i", "к" => "k", "л" => "l", "м" => "m", "н" => "n",
            "о" => "o", "п" => "p", "р" => "r", "с" => "s", "т" => "t",
            "у" => "u", "ф" => "f", "х" => "h", "ц" => "ts", "ч" => "ch",
            "ш" => "sh", "щ" => "sh", "ь" => "", "ы" => "y", "ъ" => "",
            "э" => "e", "ю" => "yu", "я" => "ya", " " => " ",
            'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D',
		    'Е' => 'E', 'Ё' => 'E', 'Ж' => 'Zh', 'З' => 'Z', 'И' => 'I',
		    'Й' => 'Y', 'К' => 'K', 'Л' => 'L',  'М' => 'M', 'Н' => 'N',
		    'О' => 'O', 'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T',
		    'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C', 'Ч' => 'Ch',
		    'Ш' => 'Sh', 'Щ' => 'Sch', 'Ь' => '', 'Ы' => 'Y', 'Ъ' => '',
		    'Э' => 'E',  'Ю' => 'Yu', 'Я' => 'Ya',
    );

    for ($i = 0; $i <= mb_strlen($txt) - 1; $i++) {
        $text .= $translit[mb_substr($txt,$i,1)];
    }

    return $text;
}

echo translit('Я обучаюсь новому языку програмирования, который называется пиэйчпи');

?>
</p>
</body>
</html>



