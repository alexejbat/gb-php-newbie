<div class="container">
    <h2>Каталог товаров:</h2>
    <ul class="card__box">
        <?php foreach ($catalog as $value):?>
            <div class="item">
                <a href="/catalog/item/?id=<?=$value["id"]?>">
                    <img class="product-img" src="/catalog_img/<?=$value["image"]?>" alt=""><br>
                <div class="product-text-box">
                    <h2 class="product-text"><?=$value["name"]?></h2>
                    <p class="product-price">Стоимость: <?=$value["price"]?><br></p></a>
                    <i class="fab fa-gratipay" style="color: #f16d7f"><span id="like<?=$value["id"]?>"><?=$value["likes"]?></span></i><br>
                    <button class="like" data-id="<?=$value["id"]?>">like</button><br>
                    <button class="buy" data-id="<?=$value["id"]?>">Купить</button><br>
                </div>
            </div>
        <? endforeach;?>
    </ul>
</div>

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
