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
<form name="_edit" method="post" action="_editnew.php">
  <p>Введит ID товара, который Вы хотите отредактрировать:</p>
   <input type="text" size="2" name="id">
 <p>Введите новое название, если хотите его отредактировать:</p>
   <input type="text" size="30" name="title">
  <p>Введите новую цену, если хотите ее отредактировать:</p>
   <input type="text" size="4" name="price">
  <p>Введите новую категорию, если хотите ее отредактировать:</p>
   <input type="text" size="30" name="category">
 <p><input type="submit" value="Отправить">
 </form>
