<?php

define("ROOT", dirname(__DIR__));
define("IMG_BIG", $_SERVER['DOCUMENT_ROOT'] . "/gallery_img/big/");
define("IMG_SMALL", $_SERVER['DOCUMENT_ROOT'] . "/gallery_img/small/");
define('TEMPLATES_DIR', ROOT . '/templates/');
define('LAYOUTS_DIR', 'layouts/');

/* DB config */
define('HOST', 'localhost:3306');
define('USER', 'root');
define('PASS', '');
define('DB', 'gb_student');

include ROOT . "/engine/functions.php";
include ROOT . "/engine/db.php";
include ROOT . "/engine/render.php";
include ROOT . "/models/auth.php";
include ROOT . "/models/basket.php";
include ROOT . "/models/feedback.php";
include ROOT . "/models/log.php";
include ROOT . "/models/gallery.php";
include ROOT . "/models/news.php";
include ROOT . "/models/goods.php";
include ROOT . "/models/classSimpleImage.php";