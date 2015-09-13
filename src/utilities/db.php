<?php

$username = 'root';  //имя пользователя для базы
$password = '';  	// пароль базы данных

try {				// есди код внути трай не выполняется то выполняеся catch
    $connection = new PDO(		// подключение к базе данных через драйвер PDO
        'mysql:host=localhost;dbname=duck-store;charset=utf8',
        $username,
        $password
    );

    function get_categories($connection) {		//создаем функцию get_categories для работы с бд
        $cat_stmt = $connection->prepare("SELECT * FROM `categories`"); // подготоваливает запрос к sql базе данных 
        $cat_stmt->execute(); // исполняет запрос к базе данных 
        return $cat_stmt->fetchAll(PDO::FETCH_ASSOC); //возращает ассоциативный массив запроса
    }
    
} catch (Exception $e) {
    die($e->getMessage());
}

