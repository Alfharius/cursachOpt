<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог игр</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="icon.svg">
</head>

<body>
<header class="bg-black w-100">
    <div class="d-flex flex-row justify-content-between py-3 px-2 px-lg-0">
        <div class="d-flex flex-row align-items-center col-4 col-sm-6">
            <a href="index.php" class="col-6 col-sm-2 col-lg-2">
                <img src="logo.svg" class="col-12" alt="Лого">
            </a>
            <ul class="mb-0 mx-1 p-0 d-flex flex-row">
                <li><a href="">Каталог</a></li>
                <li><a href="">FAQ</a></li>
            </ul>
        </div>
        <div class="d-flex flex-row f-j-between">
            <img src="media/icons/search-button.svg" class="mx-1" alt="Search">
            <img src="media/icons/user-profile-button.svg" class="mx-1" alt="User">
            <img src="media/icons/featured-button.svg" class="mx-1" alt="Featured">
            <img src="media/icons/cart-button.svg" class="mx-1" alt="Cart">
        </div>
    </div>
</header>

<section class="f-j-self-start">
    <div class="f-r f-j-center m-t m-b">
        <h2 class="t-normal">КАТАЛОГ ИГР</h2>
    </div>

    <div class="f-c">
        <hr class="solid">
        <div class="f-r f-j-between">
            <div class="f-r f-j-center w-30 t-size-regular">ФИЛЬТР</div>
            <div class="f-r f-j-end f-a-end">
                Сортировать цены по убыванию
            </div>
        </div>
        <hr class="dash">
    </div>
    <div class="f-r f-j between">
        <div class="f-c f-a-start bg-light-grey w-30 p-block filter mt-2">
            <div class="f-c m-t t-size-regular">
                <h4 class="t-normal m-0">Жанры</h4>
                <ul class="genre-list">
                    <li>жанр1</li>
                    <li>жанр2</li>
                    <li>жанр3</li>
                </ul>
            </div>
            <div class="f-c">
                <h4 class="t-normal m-0">Цена</h4>
                <div class="f-r f-j-between m-t">
                    от <input class="bg-grey" type="number">
                    до <input class="bg-grey" type="number">
                </div>
            </div>
            <div class="f-c m-t t-size-regular">
                <h4 class="t-normal m-0">Скидка</h4>
                <ul class="genre-list">
                    <li>от 15%</li>
                    <li>от 30%</li>
                    <li>от 50%</li>
                </ul>
            </div>
        </div>
        <div class="d-flex flex-column mt-2">
            <a href="game.html" class="item my-1">
                <div class="d-flex flex-column flex-sm-row">
                    <img src="media/games/DiscoElysium/dobro.jpg" class="cat-img h-100">
                    <div class="d-flex flex-column w-100 px-1">
                        <div class="d-flex flex-row h-100 pb-1">
                            <div class="d-flex flex-column mx-1">
                                <div class="my-auto t-size-large">Disco Elysium</div>
                                <div class="my-auto t-light t-big">RPG</div>
                            </div>
                            <div class="d-flex flex-column ml-a">
                                <div class="d-flex flex-row my-auto justify-content-end">
                                    <div class="t-lined t-size-small">1000₽</div>
                                    <div class="t-price">400₽</div>
                                </div>
                                <div class="mt-auto ml-a d-flex flex-row justify-content-end">
                                    <button class="b-red white mx-1">30%</button>
                                    <button class="b-yellow white"><img src="media/icons/cart-button.svg" alt="To cart"
                                                                        class="cart"></button>
                                </div>
                            </div>
                        </div>
                        <hr class="m-0">
                    </div>
                </div>
            </a>
            <a href="game.html" class="item my-1">
                <div class="d-flex  flex-column flex-sm-row">
                    <img src="media/games/DiscoElysium/dobro.jpg" class="cat-img h-100">
                    <div class="d-flex flex-column w-100 px-1">
                        <div class="d-flex flex-row h-100 pb-1">
                            <div class="d-flex flex-column mx-1">
                                <div class="my-auto t-size-large">Disco Elysium</div>
                                <div class="my-auto t-light t-big">RPG</div>
                            </div>
                            <div class="d-flex flex-column ml-a">
                                <div class="d-flex flex-row my-auto justify-content-end">
                                    <div class="t-price">400₽</div>
                                </div>
                                <div class="mt-auto ml-a d-flex flex-row justify-content-end">
                                    <button class="b-yellow white"><img src="media/icons/cart-button.svg" alt="To cart"
                                                                        class="cart"></button>
                                </div>
                            </div>
                        </div>
                        <hr class="m-0">
                    </div>
                </div>
            </a>
            <a href="game.html" class="item my-1">
                <div class="d-flex  flex-column flex-sm-row">
                    <img src="media/games/DiscoElysium/dobro.jpg" class="cat-img ">
                    <div class="d-flex flex-column w-100 px-1">
                        <div class="d-flex flex-row h-100 pb-1">
                            <div class="d-flex flex-column mx-1">
                                <div class="my-auto t-size-large">Disco Elysium</div>
                                <div class="my-auto t-light t-big">RPG</div>
                            </div>
                            <div class="d-flex flex-column ml-a">
                                <div class="d-flex flex-row my-auto justify-content-end">
                                    <div class="t-lined t-size-small">1000₽</div>
                                    <div class="t-price">400₽</div>
                                </div>
                                <div class="mt-auto ml-a d-flex flex-row justify-content-end">
                                    <button class="b-red white mx-1">30%</button>
                                    <button class="b-yellow white"><img src="media/icons/cart-button.svg" alt="To cart"
                                                                        class="cart"></button>
                                </div>
                            </div>
                        </div>
                        <hr class="m-0">
                    </div>
                </div>
            </a>
            <a href="game.html" class="item my-1">
                <div class="d-flex  flex-column flex-sm-row">
                    <img src="media/games/DiscoElysium/dobro.jpg" class="cat-img h-100">
                    <div class="d-flex flex-column w-100 px-1">
                        <div class="d-flex flex-row h-100 pb-1">
                            <div class="d-flex flex-column mx-1">
                                <div class="my-auto t-size-large">Disco Elysium</div>
                                <div class="my-auto t-light t-big">RPG</div>
                            </div>
                            <div class="d-flex flex-column ml-a">
                                <div class="d-flex flex-row my-auto justify-content-end">
                                    <div class="t-price">400₽</div>
                                </div>
                                <div class="mt-auto ml-a d-flex flex-row justify-content-end">
                                    <button class="b-yellow white"><img src="media/icons/cart-button.svg" alt="To cart"
                                                                        class="cart"></button>
                                </div>
                            </div>
                        </div>
                        <hr class="m-0">
                    </div>
                </div>
            </a>
            <div-text class="f-a-self-center">ПОКАЗАТЬ <span class="orange">БОЛЬШЕ</span></div-text>
        </div>
    </div>


</section>

<footer class="bg-black">
    dssda
</footer>
</body>
</html>