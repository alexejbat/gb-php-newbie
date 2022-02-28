<?php
const IMG_DIR = 'img/';

$title = "Главная страница - страница обо мне";
$h1 = "Информация обо мне";
$year = date('Y');
$images = "2.jpg";

$content = file_get_contents('templates/main.html');

$content = str_replace('{{ title }}', $title, $content);
$content = str_replace('{{ h1 }}', $h1, $content);
$content = str_replace('{{ year }}', $year, $content);
$content = str_replace('{{ IMG_DIR }}', IMG_DIR, $content);
$content = str_replace('{{ images }}', $images, $content);

echo $content;