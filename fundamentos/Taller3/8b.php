<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Area of a rectangle </title>
</head>
<body>
    <form action="8b.php" method="post">
        <label > Give me the base of a rectangule </label>
        <input type="number" name="base">
        <label > Give me the height of a rectangule </label>
        <input type="number" name="height">
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php 
if ($_POST)
{
    $base = "{$_POST["base"]}";
    $height = "{$_POST["height"]}";
    $area = $base * $height;
    echo "The area of the rectangle is {$area}";
}

?>