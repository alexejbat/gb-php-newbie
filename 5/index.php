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
<h1>Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.</h1>
<p>

    <a>Вариант 1:</a><br><br>
<?

echo str_replace(" ", "_", "Hello World !");

?>
</p>
<br><br>
<a>Вариант 2:</a>
<br><br>
<form method="get" >
    <textarea name="write" placeholder="Введите текст" ></textarea><br>
    <input type="submit" value="Заменить">
</form>

<?

error_reporting(0);

function replace($text) {
    for ($i = 0; $i <= mb_strlen($text) - 1; $i++ ) {
        if (mb_substr($text,$i,1) == " ") {
            $newtext.= "_";
        }
        else {
            $newtext.= mb_substr($text,$i,1);
        }
    }
    return $newtext;
}

echo replace($_GET[write]);

?>

</body>
</html>



