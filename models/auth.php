<?php

if (isset($_POST['send'])) {
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    if (!auth($login, $pass)) {
        die('Не верный логин пароль');
    } else {
        if (isset($_POST['save'])) {
            $hash = uniqid(rand(), true);
            $id = (int)$_SESSION['id'];
            executeQuery("UPDATE `users` SET `hash` = '{$hash}' WHERE `users`.`id` = {$id}");
            setcookie("hash", $hash, time() + 36000, '/');
        }
        header("Location:" . $_SERVER['HTTP_REFERER']);
    }
}

function auth($login, $pass) {
    $login = mysqli_real_escape_string(getDb(), strip_tags(stripslashes($login)));
    $passDb = getAssocResult("SELECT * FROM users WHERE login = '{$login}'")[0];
    if (password_verify($pass, $passDb['pass'])) {
        $_SESSION['login'] = $login;
        $_SESSION['id'] = $passDb['id'];
        return true;
    }
    return false;
}

function is_auth() {
    if (isset($_COOKIE["hash"]) && !isset($_SESSION['login'])) {
        $hash = $_COOKIE["hash"];
        $user = getAssocResult("SELECT * FROM `users` WHERE `hash`='{$hash}'")[0]['login'];
        if (!empty($user)) {
            $_SESSION['login'] = $user;
        }
    }
    return isset($_SESSION['login']);
}

if (isset($_GET['logout'])) {
    session_destroy();
    setcookie("hash", "", time() - 36000, '/');
    header("Location: /");
}

function get_user() {
    return $_SESSION['login'];
}