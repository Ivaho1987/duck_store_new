<aside class="column column3">
	<h2>Каталог</h2>
	<ul>
		<?php 
		include_once __DIR__ .'/../utilities/db.php';

		$categories = get_categories($connection);
		
		foreach($categories as $category){		//боковое меню с категориями, цикл для сформированного масиива категории из базы
			echo "<li><a href='index.php?page=category&id=" // список ссылок названий категорий
				.$category['id']."'>"
				.$category['title']."</a></li>";
		}
		?>
	</ul>
</aside>
