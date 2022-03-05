<div id="text">
    <?php foreach ($gallery as $filename):?>
        <a href="/public/gallery_img/big/<?=$filename?>"><img src="/public/gallery_img/small/<?=$filename?>"></a>
    <? endforeach; ?>
</div>