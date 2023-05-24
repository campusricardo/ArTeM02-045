<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Circuits </title>
</head>
<body>
<form action="3.php" method="post">
        <label> Give me the resistance</label>
        <input type="number" name="resistance">
        <label> Give me the current in the circuit </label>
        <input type="number" name="current">
        <input type="submit" value="Submit">
    </form>
    <br>
</body>
</html>


<?php 
if($_POST){
    $resistance = "{$_POST["resistance"]}";
    $current = "{$_POST["current"]}";
    $vol = $resistance * $current;
    echo "The voltaje of the circuit {$vol}";
}


?>