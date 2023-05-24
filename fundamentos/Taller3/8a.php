<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Square Perimeter</title>
</head>
<body>
    <form action="8a.php" method="post">
        <label > Give me the value of a side of a square </label>
        <input type="number" name="lado">
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php 
if ($_POST)
{
    $lado = "{$_POST["lado"]}" * 4;
    echo "The perimeter is {$lado}";
}

?>