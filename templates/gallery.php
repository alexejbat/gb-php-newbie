<div id="text">
    <?php foreach ($gallery as $filename):?>
        <a href="/public/gallery_img/big/<?=$filename?>"><img src="/public/gallery_img/small/<?=$filename?>"></a>
    <? endforeach; ?>
</div>
<br><br>
<br>
<div id="upload">
    <br>
    <form action="../engine/upload.php" method="post" enctype="multipart/form-data">
        <p><input type="file" name="userfile" id="file"></p>
        <p><input type="submit" value="Загрузить фаил"></p>
    </form>
</div>