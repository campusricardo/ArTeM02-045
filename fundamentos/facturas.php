<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cripto Market </title>
</head>
<body>
    <form action="facturas.php" method="post">
        <select name="opt" >
            <option value="BTC"> Bitcoin </option>
            <option value="ETH"> Ethereum </option>
            <option value="USDT"> Thether </option>
        </select>
        <input type="number" placeholder="cantidad" name="cantidad">

        <input type="number" placeholder="precio" name="precio">

        <input type="submit" value=" Submit">
    </form>
</body>
</html>
<?php 
if($_POST){
    $bit = $_POST["opt"];
    $cantidad = "{$_POST["cantidad"]}";
    $precio = "{$_POST["precio"]}";
    $sum = $precio * $cantidad;
    echo " Has comprado {$cantidad } {$bit} a ${$precio} y el total es {$sum}";
};

?>
