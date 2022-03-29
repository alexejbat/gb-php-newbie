<?php

function getGoods() {
    return getAssocResult("SELECT * FROM `goods`");
//    $sql = "SELECT * FROM `goods`";
//    $goods = getAssocResult($sql);
 //   return $goods;
}

function getGoodsItem($id) {
 //  return getOneResult("SELECT image FROM `goods` WHERE id = {$id}")[0];
    $id = (int)$id;
    $sql = "SELECT * FROM `goods` WHERE id = {$id}";
    $catalog_item = getAssocResult($sql);

    // В случае если изображения нет, вернем пустое значение.
    $result = [];
        if (isset($catalog_item[0]))
        $result = $catalog_item[0];

        return $result;
}