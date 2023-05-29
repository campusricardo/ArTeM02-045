<?php 
// 1. dsn -> DATABASE SOURCE NAME 
$dsn = 'mysql:host=localhost;dbname=empresa';
// pide eso como basico

// username

$username = "campus";

//password

$password = "campus2023";

//2. Conectarse a base de datos, motor MYSQL usando PDO

$db = new PDO($dsn, $username, $password);

?>