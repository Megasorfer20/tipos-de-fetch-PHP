<?php
//9- fetch bound metodos -  debemos emplear el método bindColumn()

try {
    require_once('conect_PDO.php');
    $stm = $db->prepare("SELECT nombres,direccion,compras FROM clientes");
    $stm->execute();
    $stm->bindColumn(1,$nombres);
    $stm->bindColumn('direccion',$direccion);
    $stm->bindColumn('compras',$compras);

} catch (Exception $th) {
    $error = $th->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <table class="table table-striped">
        <th>nombre</th>
        <th>direccion</th>
        <th>compras</th>
        <?php while($row=$stm->fetch(PDO::FETCH_BOUND)){ ?>

            <tr>
                <td><?= $nombres;?></td>
                <td><?= $direccion;?></td>
                <td><?= $compras;?></td>
            </tr>

        <?php }?>
    </table>
</body>
</html>