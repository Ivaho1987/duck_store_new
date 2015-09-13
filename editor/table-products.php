<?php
$products = get_products($connection);

echo"<table>
  <caption>Товары</caption>
  <tr>
   <th>ID</th>
   <th>Название</th>
   <th>Цена</th>
   <th>Категория</th>
</tr>";

foreach($products as $product){	
	echo "<tr><td>".$product['id']."</td><td>".$product['title']."</td><td>".$product['price']."</td><td>".$product['category']."</td></tr>";
}

?>