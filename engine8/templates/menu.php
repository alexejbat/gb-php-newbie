<?if (!$auth) :?>

    <form method="post" action="/auth/login/">
        <input type='text' name='login' placeholder='Логин'>
        <input type='password' name='pass' placeholder='Пароль'>
        Save? <input type='checkbox' name='save'>
        <input type='submit' name='send'>
    </form>

<? else: ?>
    Добро пожаловать! <?=$user?> <a href="/auth/logout/">Выход</a><br>
<? endif; ?>
<nav class="header__menu">
    <div class="container">
        <ul class="menu">
            <li><a class="menu__link" href="/">Главная</a></li>
            <li><a class="menu__link" href="/catalog/">Каталог</a></li>
            <li><a class="menu__link" href="/gallery/">Галерея</a></li>
            <li><a class="menu__link" href="/feedback/">Отзывы</a></li>
            <!--<li><a class="menu__link" href="/feedback2/">Отзывы(async)</a></li>-->
            <!--<li><a class="menu__link" href="/basket/">Корзина <span id="count"><?=$count?></span></a></li>-->
<?if (is_admin()):?>
            <li><a href="/admin/">Заказы</a></li>
            <li><a href="/users/">Пользователи</a></li>
<?endif;?>

        </ul>
    </div>
</nav>