<?php 

ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);


error_reporting(E_ALL);

class Jugador 
{
    private static $goles = 5;
    public static function info()
    {
        return self::$goles;
    }
}
// $jugador = new Jugador();
// echo $jugador->info();

echo Jugador::info();
?>