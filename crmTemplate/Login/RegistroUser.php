<?php 

require_once("../Config/db.php");
require_once("../Config/conectar.php");

class RegistroUser {

    private $id;
    private $idCamper;
    private $email;
    private $username;
    private $password;




public function __construct($id = 0,$idCamper = 0, $email= "", $username = "", $password, $dbCnx = "") {
    $this->
    $this->
    $this->
    $this->
    $this->

}

//////////// XD ///////////////////////7


public function insertData(){
    try{
    $stm = $this-> dbCnx -> prepare ("INSERT INTO users ( idCamper, email, username, password) values(?,?,?,?)");
    $stm -> execute([$this->idCamper, $this->email, $this->username, md5($this->password)]);
    }
    catch (Exception $e)
    {
        return $e->getMessage();
    }
}

}
?>