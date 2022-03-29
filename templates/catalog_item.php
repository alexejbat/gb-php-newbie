<div>
    <h1><?= $goods_item['name']; ?></h1>
<img src="/catalog_img/<?= $goods_item['image'] ?>" alt="item" width="300px">
<h3>Описание:</h3>
<p><?= $goods_item['description']; ?></p>
<p>Цена: <?= $goods_item['price']; ?></p>
<button>Купить</button>
</div>