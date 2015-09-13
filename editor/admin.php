<?php
$src_path = __DIR__ . '/../src/'; // путь к папке src

include_once $src_path . 'utilities/db.php'; //подключаем db.php
$categories = get_categories($connection);


function get_products($connection) {		
    $cat_stmt = $connection->prepare("SELECT * FROM `products`"); 
    $cat_stmt->execute(); 
    return $cat_stmt->fetchAll(PDO::FETCH_ASSOC); 
}

include_once 'table-products.php';
?>


  <p>Варианты работы с базой товаров<p>
<form action="edit.php" method="post">
 <p><select name="selected" size="3">

  <option selected value="Add">Добавить товар</option>
  <option value="Delete">Удалить товар</option>
  <option value="Edit">Редактировать товар</option>
 </select></p>
 <p><input type="submit" value="Отправить"></p>
</form>
