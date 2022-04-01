<header class="header">
    <div class="header-left">
        <h2 class="head-text"><span>Интернет-магазин</span></h2>
    </div>
    <div class="header-right">
        <a class ="a-header" href="/header/"><i class="fa fa-user-circle fa-2x" aria-hidden="true"></i></a>
        <a class ="a-header" href="/basket/"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i></a><span id="count"><?=$count?>
    </div>
</header>

<?php if(!$auth):?>

<?else:?>
    Добро пожаловать! <?=$user?> <a href="/?logout">Выход</a><br>
<?endif;?>

<ul class="navMenu">
<li><a href="/">Главная</a></li>
<li><a href="/catalog">Каталог</a></li>
<li><a href="/about">О нас</a></li>
<li><a href="/gallery/">Галерея</a></li>
<li><a href="/news">Новости</a></li>
    <li><a href="/feedback">Отзывы</a></li>
<!--<li><a href="/apicatalog">api Test</a><br></li>-->
</ul>

