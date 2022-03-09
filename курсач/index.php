<?php

include "db.php";

$games = $pdo->query('SELECT * FROM games');
$games = $games->fetchAll();

$slides = $pdo->query('SELECT * FROM slides');
$slides = $slides->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wind - интернет-магазин игр</title>
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

<section class="py-4 bg-light-grey w-100">
    <div class="d-flex flex-row justify-content-between slider">
        <img src="media/icons/slider-arrow.svg" class="d-none d-lg-block" alt="Left" id="left">
        <div class="d-flex flex-column align-items-start w-100 mx-2">
            <h5 class="text-uppercase">Выгодные предложения</h5>
            <div class="d-flex flex-row sliderImgs">
                <?php foreach($slides as $slide): ?>
                    <img src="media/<?=$slide['img']?>" class="w-100"  alt="slide">
                <?php endforeach; ?>
            </div>
            <div class="d-none d-sm-flex flex-row align-self-center slider-select">
                <div id="s0">
                    <hr class="slider-selected">
                </div>
                <?php
                for($i = 1; $i < count($slides); $i++): ?>
                    <div id="s<?= $i ?>">
                        <hr>
                    </div>
                <?php
                endfor; ?>
            </div>
        </div>
        <img src="media/icons/slider-arrow.svg" class="d-none d-lg-block" alt="Right" id="right">
    </div>
</section>

<section class="mt-5 p-2 p-lg-0">
    <div class="d-flex flex-column flex-lg-row">
        <div class="d-flex flex-column col-sm-12 col-xl-9 px-1">
            <div>
                <hr class="solid my-1">
                <div class="d-flex flex-row justify-content-around">
                    <span>НОВИНКИ</span>
                    <span>ПОПУЛЯРНОЕ</span>
                    <span>ПРЕДЗАКАЗЫ</span>
                </div>
                <hr class="dash my-1">
            </div>
            <?php foreach ($games as $game):

                $gameImg = json_decode($game['imgs'])->cover;

                ?>
                <a href="game.php?id=<?= $game['id'] ?>" class="item my-1">
                    <div class="d-flex flex-column flex-sm-row">
                        <img src="media/games/<?= $gameImg ?>" class="cat-img h-100">
                        <div class="d-flex flex-column w-100 px-1">
                            <div class="d-flex flex-row h-100 pb-1">
                                <div class="d-flex flex-column mx-1">
                                    <div class="my-auto t-size-large"><?= $game['title'] ?></div>
                                    <div class="my-auto t-light t-big"><?= $game['genre'] ?></div>
                                </div>
                                <div class="d-flex flex-column ml-a">
                                    <div class="d-flex flex-row my-auto justify-content-end">
                                        <div class="t-lined t-size-small"><?= $game['sale'] ? $game['price'] . '₽' : '' ?></div>
                                        <div class="t-price"><?= $game['price'] ? ($game['price'] - $game['price'] / 100 * $game['sale']) . '₽' : $game['price'] . '₽' ?></div>
                                    </div>
                                    <div class="mt-auto ml-a d-flex flex-row justify-content-end">
                                        <?php if ($game['sale']) {

                                            ?>
                                            <button class="b-red white mx-1"><?= $game['sale'] . '%' ?></button>
                                        <?php } ?>
                                        <button class="b-yellow white"><img src="media/icons/cart-button.svg"
                                                                            alt="To cart"
                                                                            class="cart"></button>
                                    </div>
                                </div>
                            </div>
                            <hr class="m-0">
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
        <div class="col-12 col-lg-3 px-1">

        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>