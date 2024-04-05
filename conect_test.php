<?php
// 3- testear la coneccion

try {
    require_once('conect_PDO.php');


} catch (Exception $error) {
    $errorXD = $error->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Conectando a base de datos MYSQL</h1>
    <?php
    if ($db){
        echo "<h2>Coneccion a base de datos satisfactoriamente</h2>";
    }elseif (isset($errorXD)){
        echo "<h2>{$errorXD}</h2>";
    }
    
    ?>
</body>
</html>