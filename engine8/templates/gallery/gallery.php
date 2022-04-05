<?php foreach ($gallery as $item): ?>
<a rel="gallery" class="photo" href="/gallery/image/?id=<?=$item['id']?>"><img src="/gallery_img/small/<?= $item['filename'] ?>" width="150"/></a>
    <?= $item['likes']?>
<? endforeach; ?>
<br>
<p>Загрузить изображение:</p>
<div class="container upload-form">
    <form class="upload-form" method="post" enctype="multipart/form-data">
        <img>
        <input type="file" name="image">
        <input type="submit" value="Загрузить" name="load">
    </form>
</div>

