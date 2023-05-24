
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> XD Numbers </title>
</head>
<body>
    
<form action="2.php" method="post">
        <label for=""> Give a number and i will tell you if it's even or odd and if it's </label>
        <input type="number" name="numero">
        <input type="submit" value="Submit">
    </form>
    <br>
</body>
</html>
<?php 

$numero = "{$_POST["numero"]}";
if ($numero > 10){
    $text = "y es mayor a 10";
}
else {
    $text = "y no es mayor a 10";
}
if ($numero % 2 == 0)
{
    echo "El numero es par {$text}";
}
else{
    echo "El numero no es par {$text}";
}

?>
