<h2>Каталог товаров:</h2>

<div class="box">
<?php foreach ($catalog as $value):?>
    <div class="card">
        Like: <span id="like<?=$value["id"]?>"><?=$value["likes"]?></span>
        <a href="/catalog_item/?id=<?=$value["id"]?>">
            <h2><?=$value["name"]?></h2>
            <img src="/catalog_img/<?=$value["image"]?>" alt="" width="264"><br>
            Стоимость: <?=$value["price"]?><br></a>
        <button class="like" data-id="<?=$value["id"]?>">like</button><br>
        <button class="buy" data-id="<?=$value["id"]?>">В корзину</button>
    </div>
<? endforeach;?>

<script>
    let buttonsBuy = document.querySelectorAll('.buy');
    buttonsBuy.forEach((elem) => {
        elem.addEventListener('click', () => {
            let id = elem.getAttribute('data-id');
            (async () => {
                const response = await fetch('/api/buy/?id=' + id);
                const answer = await response.json();
                document.getElementById('count').innerText = answer.count;

            })();

        })
    })

    let buttonslike = document.querySelectorAll('.like');
    buttonslike.forEach((elem) => {
        elem.addEventListener('click', () => {
            let id = elem.getAttribute('data-id');
            (async () => {
                const response = await fetch('/api/addlike/?id=' + id);
                const answer = await response.json();
                document.getElementById('like' + id).innerText = answer.likes;
                console.log(answer.likes);

            })();

        })
    })
</script>
</div>
