<?php foreach ($gallery as $item): ?>
<a rel="gallery" class="photo" href="/image/?id=<?= $item['id'] ?>"><img src="/gallery_img/small/<?= $item['filename'] ?>" width="150"/></a>
    <?= $item['likes'] ?>
<? endforeach; ?>

<?= $message ?>
<br>

<div class="load">
    <p>Загрузить изображение:</p>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit" value="Загрузить" name="load">
</form>
</div>