<?php 

if (isset($_POST["registrarse"])){
    require_once("RegistroUser.php");

    $registrar = new RegistroUser();

    $registrar->setIdCamper(29);

    $registrar-> setEmail($_POST["email"]);
    $registrar-> setUsername($_POST["username"]);
    $registrar-> setPassword($_POST["password"]);


}

?>