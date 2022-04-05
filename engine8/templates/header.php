<header class="header">
    <div class="container top__box">
        <div class="top__box__left">
            <a class="top__logo" href="/index/">
                <img src="/img/logo.png" alt="logo">
                <p class="logo__name">BRAN</p>
                <span class="last__logo__name">D</span>
            </a>
            <form class="top__box__form" action="#">
                <ul class="browse__menu">
                    <li>
                        <a href="#">Browse
                            <i class="fas fa-caret-down"></i>
                        </a>
                    </li>
                </ul>
                <search></search>
                <input class="search__items" type="Search" placeholder="Seacrh for items..." aria-label="search">
                <button class="seacrh__button" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
        <div class="top__box__right">
            <a class="menu__link" href="/basket/"><img src="/img/cart.svg" alt=""><span id="count"><?=$count?></span></a>
            <!-- <cart ref="cart"></cart>-->
            <a class="button__account my-account" href="/users/">My Account</a>
        </div>
    </div>
</header>
