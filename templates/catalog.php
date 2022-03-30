<h2>Каталог товаров:</h2>
<div class="box">
<?php foreach ($goods as $item):?>
<div class="card">
    <a href="/catalog_item/?id=<?=$item['id']?>">
        <h2><?=$item["name"]?></h2>
    <a href="/catalog_item/?id=<?=$item['id']?>"><?=$item["description"]?></a>
    <a href="/catalog_item/?id=<?=$item['id']?>"><img src="/catalog_img/<?= $item['image']?>" alt="item" width="263px" ></a><br>

    Стоимость: <?=$item["price"]?><br>
    <button>Купить</button><hr>
</div>
<? endforeach;?>
</div>
