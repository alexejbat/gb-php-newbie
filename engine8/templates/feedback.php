<div class="container">


<h2>Ваши отзывы</h2>

<?=$message?>

<form class="feed__form" action="/feedback/<?=$action?>/" method="post">
    Оставьте отзыв: <br>
    <input hidden type="text" name="id_feedback" value="<?=$id_feed?>"><br>
    <input type="text" name="name" placeholder="Ваше имя" value="<?=$name?>"><br>
    <input type="text" name="feedback" placeholder="Ваш отзыв" value="<?=$text?>"><br>
    <input class="submit" type="submit" value="<?=$button?>">
</form>

<?foreach ($feedback as $value): ?>

    <div style="margin-top: 10px"><strong><?=$value['name']?></strong>: <?=$value['feedback']?>
        <a class="feed" href="/feedback/edit/?id_feed=<?=$value['id']?>"><i class="fas fa-edit"></i></a>
        <a class="feed" href="/feedback/delete/?id_feed=<?=$value['id']?>"><i class="fas fa-backspace"></i></a>
    </div>

<?endforeach;?>

</div>
