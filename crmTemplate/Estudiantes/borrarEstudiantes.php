<?php 

require_once("Estudiante.php");

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$record = new Estudiantes();

if (isset($_GET['id']) && isset($_GET['req']))
{
    if ($_GET["req"] == "delete")
    {
        $record-> setId($_GET["id"]);
        $record-> delete();
        
    }
}

?>