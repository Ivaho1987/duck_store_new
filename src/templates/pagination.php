<?php


include_once __DIR__ .'/../utilities/db.php';

$statement = $connection->prepare('SELECT * FROM `products`'); //подготавливает запрос к бд
$statement->execute(); //выполняет запрос 

$products = $statement->fetchAll(PDO::FETCH_ASSOC); // возращает ассоциативный массив

$total=count($products); // всего страниц с товарами
$page=1;
if(isset($_GET['page'])) {
	$page=$_GET['page'];
}
if(!is_int($page)) {
	$page=1;
}
$data_set = array_slice($products, $page-1, 2);
?>