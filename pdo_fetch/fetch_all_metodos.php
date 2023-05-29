<?php 

// 9. Fetch bound metodos - debemos emplear el metodo bindColumn();

try {
    require_once("connect_pdo.php");
    $stm = $db->prepare("SELECT * FROM clientes");
    $stm->execute();
    $clientes  = $stm->fetchAll(PDO::FETCH_ASSOC); //metodo nativo PDO
} catch (Exception $e) {

    $error = $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <table class="table table-striped">
        <th> Nombres </th>
        <th> Direccion </th>
        <th> Compras </th>
        <?php foreach($clientes as $cliente){ ?>
            <tr>
                <td> <?php echo $cliente['nombres'];?> </td>
                <td> <?php echo $cliente['direccion'];?> </td>
                <td> <?php echo $cliente['compras'];?> </td>

           


            </tr>
            <?php } ?>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>