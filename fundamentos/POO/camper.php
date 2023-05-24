<?php 
class Camper
{
    //1. Atributos con modificadores de acceso. 
    //private, public, protected
    private $nombre = "Johan";
    private $email = "Johan@campusland.com";
    private $celular = 3209090220;
    //2. Constructor (metodo magico ).
    // En ocaciones se inicializa con valores parametrizados
    public function __construt($nombre, $email, $celular) // ideal para inicializar valores de propiedades 
    {
        $this->nombre = "Johan";
        $this->email = "Johan@campusland.com";
        $this->celular = 3209090220;
    }

    //3. Metodos (Getters and Setters)

    //Metodo Getter 
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getCelular()
    {
        return $this->celular;
    }
    // get --> obtener valores de atributos 
    // set --> modificar valores de atributos 

    // Metodos Setters

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setCelular($celular)
    {
        $this->celular = $celular;
    }
}

// Instancia de la clase (objeto) --> Variable de Instancia.

$camper = new Camper();
echo $camper->setNombre("Maicol");
echo $camper->setEmail("Maicol@gmail.com");
echo $camper->setCelular(332312850);
echo $camper->getNombre(). "<br>";
echo $camper->getEmail(). "<br>";
echo $camper->getCelular(). "<br>";


?>