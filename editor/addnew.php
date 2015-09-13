<?php

$username = 'root'; 
$password = '';  	

try {				
    $connection = new PDO(		
        'mysql:host=localhost;dbname=duck-store;charset=utf8',
        $username,
        $password
    );		
	 $ID=$_POST['id'];
	 $title=$_POST['title'];
	 $price=$_POST['price'];
	 $category=$_POST['category'];
	
	$new_stmt = $connection->prepare("INSERT INTO products (id, title, price, category) values ($ID,'$title',$price,'$category')"); 
	var_dump($new_stmt);
	 $new_stmt->execute(); 
function get_products($connection) {		
    $cat_stmt = $connection->prepare("SELECT * FROM `products`"); 
    $cat_stmt->execute(); 
    return $cat_stmt->fetchAll(PDO::FETCH_ASSOC); 
}

include_once 'table-products.php';

}
catch (Exception $e) {
    die($e->getMessage());
}
?>