<?php 
// 3. Testear la conexion 

try {
    require_once("connect_pdo.php");
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
    <title>Document</title>
</head>
<body>
    <h1> Conectando a base de datos MYSQL</h1>
    <?php 
    if ($db){
        echo "<h2> Conexion a base de datos satisfactoriamente </h2>";
    } elseif(isset($error)) {
        echo "<p> $error </p>";
    }
    ?>
</body>
</html>