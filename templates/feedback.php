<h2>Наши отзывы</h2>

<?=$message?>

<form action="/feedback/<?=$action?>/" method="post">
    <p>Оставьте ваш отзыв:</p><br>
    <input hidden type="text" name="id_feedback" value="<?=$id_feed?>"><br>
    <input type="text" name="name" placeholder="Ваше ФИО" value="<?=$name?>"><br>
    <input type="text" name="feedback" placeholder="Ваш отзыв" value="<?=$feedback?>"><br>
    <input type="submit" value="<?=$buttonText?>"><br>
</form>

<?php foreach ($feedback as $value): ?>

    <div style="..."><strong><?=$value['name']?></strong>: <?=$value['feedback']?>
        <a href="/feedback/edit/?id=<?=$value['id']?>">[Править]</a>
        <a href="/feedback/?delete=<?=$value['id']?>">[Удалить]</a>
    </div>

<?endforeach;?>