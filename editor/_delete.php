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

<form name="_delete" method="post" action="deletenew.php">
  <p>Введит ID товара, который хотите удалить:</p>
   <input type="text" size="2" name="id">
 <p><input type="submit" value="Отправить">
 </form>