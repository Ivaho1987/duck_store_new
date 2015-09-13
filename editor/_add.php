<?php


include_once '../src/utilities/db.php'; //подключаем db.php



$categories = get_categories($connection);


function get_products($connection) {		
    $cat_stmt = $connection->prepare("SELECT * FROM `products`"); 
    $cat_stmt->execute(); 
    return $cat_stmt->fetchAll(PDO::FETCH_ASSOC); 
}
include_once 'table-products.php';
?>

<form name="_add" method="post" action="addnew.php">
  <p>Новый ID:</p>
   <input type="text" size="2" name="id">
  <p>Название:</p>
   <input type="text" size="30" name="title">
  <p>Цена:</p>
   <input type="text" size="4" name="price">
  <p>Категория:</p>
   <input type="text" size="30" name="category">
  </p>
 <p><input type="submit" value="Отправить">
 </form>


