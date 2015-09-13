<?php

include_once '../src/utilities/db.php'; //подключаем db.php

 $ID=$_POST['id'];
$new_stmt = $connection->prepare("DELETE from products WHERE id=$ID"); 
 $new_stmt->execute();

function get_products($connection) {		
    $cat_stmt = $connection->prepare("SELECT * FROM `products`"); 
    $cat_stmt->execute(); 
    return $cat_stmt->fetchAll(PDO::FETCH_ASSOC); 
}
include_once 'table-products.php'; 
?>

