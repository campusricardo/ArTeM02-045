<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Final Form</title>
</head>
<body>
    <h1> Final Form </h1>
    <form action="10.php" method="POST">
    <label for="numero"> Ingrese el numero:</label>
    <input type="number" id="numero" name="numero">
    <input type="submit" name="ejecutar" value="Agregar numero">
    <br><br>
    <label> Mostrar resultados de numeros enviados</label>
    <input type="submit" name="ejecutar" value="Mostrar resultados">
    <br><br>
    <label> Limpiar datos </label>
    <button> <a href="./10a.php"> Limpiar datos</a> </button>
    </form>
</body>
</html>

<?php 

session_start(); // inicio de sesion, almacenamineto para el usuario
// isset verfica que el formulario se haya iniciado, que no sea nulo o indefinido

if(isset($_POST["ejecutar"])){
    if ($_POST["ejecutar"] == "Agregar numero"){
        $numero = $_POST["numero"];
        if($numero != 0){
            // $_session variable que se usa para almacenar datos en el web server(config,preferencias,detalles de login)
            array_push($_SESSION["numeros"], $numero);
        }
    } else if ($_POST["ejecutar"] == "Mostrar resultados"){
        $numeros = $_SESSION["numeros"]; // $_SESSION["NUMEROS"] = [10,20]
        $suma = array_sum($numeros); // 30
        $promedio = count($numeros) > 0 ? $suma / count($numeros) : 0; // if (?) y else (:)
        $mayor = max($numeros); // 20
        $menor = min($numeros); // 10
        $contador = count($numeros); // 2

        echo "<h2> Resultados </h2>";
        
        echo "<p> La sumatoria de los  
        valores es: {$suma} </p>";

        echo "<p> El valor del promedio es: {$promedio} </p>";

        echo "<p> Se ingresarion {$contador} valores </p>";

        echo "<p> El mayor valor es: {$mayor}</p>";

        echo "<p> El menor valor es : {$menor}</p>";
        }
    } else {
     $_SESSION["numeros"] = [];
    }

?>