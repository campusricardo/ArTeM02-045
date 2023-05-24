<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Arithmetic Operations </title>
</head>
<body>
    <form action="5.php" method="post">
        <label for="">Give me 2 numbers</label>
        <input type="number" name="1" placeholder="First">
        <input type="number" name="2" placeholder="Second">
        <input type="submit">
    </form>
</body>
</html>

<?php 
/* Construir el algoritmo que lea por teclado dos números,
si el primero es mayor al segundo informar su suma y
diferencia, en caso contrario, informar el producto y la
división del primero respecto al segundo. */

if ($_POST)
{
    $one = "{$_POST["1"]}";
    $two = "{$_POST["2"]}";
        if ($one > $two)
        {
            $total = $one + $two;
            $total2 = $one - $two;
            echo " The sum of the two values is {$total} y it's difference is {$total2}";
        }
        if ( $one < $two)
        {
            $total1 = $one * $two;
            $total2 =  $one / $two;
            echo "The product is{$total1} and it's division is {$total2}";
        }
}



?>