<h2>Каталог товаров:</h2>
<div class="box">
<?php foreach ($catalog as $value):?>
<div class="card">
    <h2><?=$value["name"]?></h2>
    Стоимость: <?=$value["price"]?><br>
    <button>Купить</button><hr>
</div>
<? endforeach;?>
</div>
