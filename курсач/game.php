<?php

include "db.php";

$stmt = $pdo->query("select * from games where id = " . $_GET['id']);
$game = $stmt->fetch();
if (isset($game['title'])){
$gameText = json_decode($game['description']);
$minRequirements = json_decode($game['requirements'])->min;
$maxRequirements = json_decode($game['requirements'])->req;
$slides = json_decode($game['imgs'])->slider;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $game['title'] ?></title>
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

<section class="bg-light-grey py-5">
    <div class="d-flex flex-column flex-lg-row">
        <div class="d-flex flex-row justify-content-between slider col-12 col-lg-9">
            <div class="d-flex flex-column align-items-start w-100 mx-2">
                <div class="d-flex flex-row sliderImgs">
                    <img src="media/games/<?= json_decode($game['imgs'])->cover ?>" class="w-100" alt="Dobro">
                    <?php foreach ($slides as $slide): ?>
                        <img src="media/games/<?= $slide ?>" class="w-100" alt="Dobro">
                    <?php endforeach; ?>
                </div>
                <div class="d-none d-sm-flex flex-row align-self-center slider-select">
                    <div id="s0">
                        <hr class="slider-selected">
                    </div>
                    <?php
                    $count = 1;
                    foreach ($slides as $slide): ?>
                        <div id="s<?=$count?>">
                            <hr>
                        </div>
                    <?php
                    $count++;
                    endforeach; ?>
                </div>
            </div>
        </div>
        <div class="bg-grey m-l p-block f-c f-j-between col-12 col-lg-3 p-2">
            <div class="m-b t-price"><?= $game['title'] ?></div>
            <div class="my-2"><?= $gameText->topDesc ?>
            </div>
            <div class="m-b">Разработчик: <?= $game['developer'] ?></div>
            <div class="m-b">Издатель: <?= $game['publisher'] ?></div>
            <div class="m-b">Жанр: <?= $game['genre'] ?></div>
        </div>
    </div>
</section>

<section class="px-2">
    <div class="f-c mt-3 m-b">
        <hr class="solid">
        <div class="f-r f-j-start">
            <h4 class="t-normal t-size-regular t-up-case m-l f-a-self-start m-0">Покупка</h4>
        </div>
        <hr class="dash">
    </div>
    <div class="t-size-regula">
        <div class="bg-grey d-flex  flex-row justify-content-between p-3">
            <div class="d-flex flex-column">
                <div class="">Купить <?= $game['title'] ?></div>
                <div class="sale-duration">Скидка действует до 23:59 11.11.2011</div>
            </div>
            <div class="d-flex flex-column justify-content-between align-items-end">
                <div class="f-c f-a-end">
                    <div class="t-lined"><?= $game['sale'] ? $game['price'] . ' ₽' : '' ?></div>
                    <div><?= $game['price'] ? ($game['price'] - $game['price'] / 100 * $game['sale']) . ' ₽' : $game['price'] . ' ₽' ?></div>
                </div>
                <div class="game-buy">
                    <?php if ($game['sale']) { ?>
                        <a href="">
                            <button class="white b-red t-size-button">-<?= $game['sale'] ?>%</button>
                        </a>
                    <?php } ?>
                    <a href="">
                        <button class="white b-yellow t-light t-size-button">В корзину</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="f-c mt-5 m-b">
        <hr class="solid">
        <div class="f-r f-j-start">
            <h4 class="t-normal t-size-regular t-up-case m-l f-a-self-start m-0">Об игре</h4>
        </div>
        <hr class="dash">
    </div>

    <div class="m-t m-b t-size-regular">
        <p><?= $gameText->p1 ?></p>
        <p><?= $gameText->p2 ?></p>
        <p><?= $gameText->p3 ?></p>
    </div>
</section>
<section class="bg-light-grey mt-4">
    <div>
        <div class="f-c m-t-big m-b">
            <hr class="solid">
            <div class="d-flex flex-row justify-content-between">
                <h4 class="t-normal t-size-regular t-up-case m-l f-a-self-start m-0">Системные требования</h4>
                <div class="choose-req">
                    <span class="mx-3 orange" id="min">минимальные</span>
                    <span id="req">рекомендуемые</span>
                </div>
            </div>
            <hr class="dash">
        </div>

        <div class="f-c f-a-start m-t m-b">
            <div class="my-4 minimum">
                <div><span>ОС: </span><?= $minRequirements->OS ?></div>
                <div><span>Процессор: </span><?= $minRequirements->CPU ?></div>
                <div><span>ОЗУ: </span><?= $minRequirements->RAM ?> GB</div>
                <div><span>Видеокарта: </span><?= $minRequirements->GPU ?></div>
                <div><span>DirectX: </span>Версии <?= $minRequirements->DX ?></div>
                <div><span>Место на диске: </span><?= $minRequirements->MEM ?> GB</div>
            </div>
            <div class="my-4 requirement">
                <div><span>ОС: </span><?= $maxRequirements->OS ?></div>
                <div><span>Процессор: </span><?= $maxRequirements->CPU ?></div>
                <div><span>ОЗУ: </span><?= $maxRequirements->RAM ?> GB</div>
                <div><span>Видеокарта: </span><?= $maxRequirements->GPU ?></div>
                <div><span>DirectX: </span>Версии <?= $maxRequirements->DX ?></div>
                <div><span>Место на диске: </span><?= $maxRequirements->MEM ?> GB</div>
            </div>
        </div>
    </div>
</section>

<section class="copyright">
    <div>
        <div class="m-l m-r">
            © 2022 НАЗВАНИЕ ИГРЫ является собственностью ТОТОТО, Inc. Все права сохранены. © ТОТОТО, 2022. Все права
            сохранены.
        </div>
    </div>

</section>
<?php } ?>

<footer class="bg-black">

</footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>