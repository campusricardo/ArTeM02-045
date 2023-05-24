<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People age </title>
</head>
<body>
<form action="4.php" method="post">
        <label> Give me the name</label>
        <input type="text" name="name1" step="">
        <label> Give me age </label>
        <input type="number" name="age1">
        <label> Give me the name</label>
        <input type="text" name="name2">
        <label> Give me age </label>
        <input type="number" name="age2">
        <label> Give me the name</label>
        <input type="text" name="name3">
        <label> Give me age </label>
        <input type="number" name="age3">
        <input type="submit" value="Submit">
    </form>
    <br>
</body>
</html>

<?php 
if($_POST){

    class user1 { 

    }
    $name1 = "{$_POST["name1"]}";
    $age1 = "{$_POST["age1"]}";

    $name2 = "{$_POST["name2"]}";
    $age2 = "{$_POST["age2"]}";

    $name3 = "{$_POST["name3"]}";
    $age3 = "{$_POST["age3"]}";
    $arrayAge = max(array($age1, $age2, $age3));
    if ($arrayAge === $age1)
    {
        echo " The older person is {$name1} with {$age1} years old";
    }
    if ($arrayAge === $age2){
        echo " The older person is {$name2} with {$age2} years old";
    }
    else {
        echo " The older person is {$name3} with {$age3} years old";
    }
}

?>