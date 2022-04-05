<div class="container">
    <h2><?=$value["name"]?></h2>
    <img src="/catalog_img/<?=$value["image"]?>" alt="" width="250"><br>
    <?=$value["description"]?><br>
    Стоимость: <?=$value["price"]?><br>
    <button class="buy" data-id="<?=$value["id"]?>">Купить</button>

</div>
