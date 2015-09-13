<?php

$src_path = __DIR__ . '/../src/'; // путь к папке src

include_once $src_path . 'utilities/db.php'; //подключаем db.php
include_once $src_path . 'utilities/url.php';	//подключаем url.php

$categories = get_categories($connection); //используем функцию, возращает массив с id и категориями

$page = get_page();

switch ($page) { 		// подключает страницу в зависимости от запроса page
    case 'main':
        include_once $src_path . 'main.php';
        break;
    case 'catalog':
        include $src_path . 'catalog.php';
        break;
    case 'product':
        include $src_path . 'single-item.php';
        break;
    default:
        echo "<h1>Oooops. 404</h1>";
        break;
}
