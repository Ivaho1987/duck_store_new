<?php

include_once '../src/utilities/db.php'; //подключаем db.php

  $ID = $_POST['id'];
  $title = $_POST['title'];
  $price = $_POST['price'];
  $category = $_POST['category'];

if($title){
	$new_stmt = $connection->prepare("UPDATE products SET title='$title' WHERE id=$ID ;"); 
	 $new_stmt->execute();	
};
if($price){
	$new_stmt = $connection->prepare("UPDATE products SET price=$price WHERE id=$ID ;"); 
	 $new_stmt->execute();	
};
if($category){
	$new_stmt = $connection->prepare("UPDATE products SET category='$category' WHERE id=$ID ;"); 
	 $new_stmt->execute();	
};

function get_products($connection) {		
    $cat_stmt = $connection->prepare("SELECT * FROM `products`"); 
    $cat_stmt->execute(); 
    return $cat_stmt->fetchAll(PDO::FETCH_ASSOC); 
}

include_once 'table-products.php';
 ?>

