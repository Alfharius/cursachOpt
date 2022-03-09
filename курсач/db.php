<?php

$pdo = new PDO('mysql:host=localhost;dbname=game_store;charset=utf8', 'root', 'root', [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

/*
$stmt = $pdo->prepare("select * from users where login=? and password=?");
$stmt->execute(['log', 'pas']);
*/

/*
$stmt = $pdo->query("select * from users");
$users = $stmt->fetchAll();
*/

