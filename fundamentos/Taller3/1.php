<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> School </title>
</head>
<body>
    <form action="1.php" method="post">
    <label for="">Put your name here </label>
    <input type="text" name="nombre">
    <label for=""> Put your grades here</label>
    <input type="number" min="1" max="5" name="nota1" step="0.01">
    <input type="number" min="1" max="5" name="nota2" step="0.01">
    <input type="number" min="1" max="5" name="nota3" step="0.01">
    <input type="submit" value="Submit">
    </form>
    <br>

</body>
</html>

<?php

    $nombre = "{$_POST["nombre"]}";
    $nota1 = "{$_POST["nota1"]}";
    $nota2 = "{$_POST["nota2"]}";
    $nota3 = "{$_POST["nota3"]}";
    $total = ($nota1 + $nota2 + $nota3) / 3;
    if ( $total >= 3.9)
    {
        echo " <br> The student {$nombre} is scholarship because he or she obtain an average of {$total}";
    }
    else { 
        echo " <br> The student {$nombre}  isn't scholarship because he or she obtain an average of{$total}";
    }

?>

