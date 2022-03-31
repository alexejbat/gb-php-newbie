<div class="header">
    <?if(!$auth):?>
        <form method="post">
            <input type='text' name='login' placeholder='Логин'>
            <input type='password' name='pass' placeholder='Пароль'>
            Запомнить меня: <input type='checkbox' name='save'>
            <input type='submit' name='send'>
        </form>
    <?else:?>
        Добро пожаловать! <?=$user?> <a href="/?logout">Выход</a><br>
    <?endif;?>
</div>


<ul class="navMenu">
<li><a href="/">Главная</a></li>
<li><a href="/catalog">Каталог</a></li>
<li><a href="/about">О нас</a></li>
<li><a href="/gallery/">Галерея</a></li>
<li><a href="/news">Новости</a></li>
    <li><a href="/feedback">Отзывы</a></li>
<li><a href="/apicatalog">api Test</a><br></li>
</ul>

