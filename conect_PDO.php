<?php
// 1- dsn -> DATABASE SOURCE NAME
$dsn = 'mysql:host=localhost;dbname=empresa';

//Username
$username = 'campus';

//password
$password = 'campus2023';

// 2- Conectarse a base de datos, motor mysql usando PDO

$db = new PDO($dsn, $username, $password);

?>