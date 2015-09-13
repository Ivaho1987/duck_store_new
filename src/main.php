<?php

$statement = $connection->prepare('SELECT * FROM `products`'); //подготавливает запрос к бд
$statement->execute(); //выполняет запрос 

$products = $statement->fetchAll(PDO::FETCH_ASSOC); // возращает ассоциативный массив

include_once __DIR__ . '/templates/_header.php';	//подключает
include_once __DIR__ . '/templates/_top_menu.php';	//подключает
include_once __DIR__ . '/templates/_main.php';		//подключает
include_once __DIR__ . '/templates/_footer.php';	//подключает
