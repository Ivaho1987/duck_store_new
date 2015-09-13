<?php

if (!empty($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    $statement = $connection->prepare('SELECT * FROM `products` WHERE id = :id');
    $statement->execute(['id' => $id]);
    $product = $statement->fetch(PDO::FETCH_ASSOC);

    if (!$product) {
        die("Такой утки не обнаружено");
    }

    include_once __DIR__ . '/templates/_header.php';
    include_once __DIR__ . '/templates/_top_menu.php';
    include_once __DIR__ . '/templates/_single_item.php';
    include_once __DIR__ . '/templates/_footer.php';
} else {
    die("Такой утки не обнаружено");
}
