<?php 
class Product
{
    private $nombre = "";
    private $precio = "";
    private $categoria = "";
    private $añoSalida = "";
    private $garantia = "";
    private $marca = "";
    private $peso = "";

    public function __construt($nombre, $precio, $categoria, $añoSalida, $garantia, $marca, $peso) 
    {
        $this->nombre    = "Xd";
        $this->precio    = "XD";
        $this->categoria = "xd";
        $this->añoSalida = "dx";
        $this->garantia  = "xd";
        $this->marca     = "x";
        $this->peso      = "x";
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function getPrecio()
    {
        return $this->precio;
    }
    public function getCategoria()
    {
        return $this->categoria;
    }

    public function getAño()
    {
        return $this->añoSalida;
    }

    public function getGarantia()
    {
        return $this->garantia;
    }

    public function getMarca()
    {
        return $this->marca;
    }
    public function getPeso()
    {
        return $this->peso;
    }




    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setPrecio($precio)
    {
        $this->precio = $precio;

    }
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    public function setAño($añoSalida)
    {
        $this->añoSalida = $añoSalida;
    }

    public function setGarantia($garantia)
    {
        $this->garantia = $garantia;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }
    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

}

$product = new Product();
echo $product->setNombre("TV");
echo $product->setPrecio(100);
echo $product->setCategoria("electrodomesticos");
echo $product->setAño("2006");
echo $product->setGarantia(true);
echo $product->setMarca("LG");
echo $product->setPeso("10g");

echo $product->getNombre(). "<br>";
echo $product->getPrecio(). "<br>";
echo $product->getCategoria(). "<br>";
echo $product->getAño(). "<br>";
echo $product->getGarantia(). "<br>";
echo $product->getMarca(). "<br>";
echo $product->getPeso(). "<br>";

$product2 = new Product();
echo $product2->setNombre("PC");
echo $product2->setPrecio(1000);
echo $product2->setCategoria("electrodomesticos");
echo $product2->setAño("2003");
echo $product2->setGarantia(true);
echo $product2->setMarca("HP");
echo $product2->setPeso("1000g");

echo $product2->getNombre(). "<br>";
echo $product2->getPrecio(). "<br>";
echo $product2->getCategoria(). "<br>";
echo $product2->getAño(). "<br>";
echo $product2->getGarantia(). "<br>";
echo $product2->getMarca(). "<br>";
echo $product2->getPeso(). "<br>";

$product3 = new Product();
echo $product3->setNombre("Jugo");
echo $product3->setPrecio(1);
echo $product3->setCategoria("comida");
echo $product3->setAño("2023");
echo $product3->setGarantia(false);
echo $product3->setMarca("Juan Valdez");
echo $product3->setPeso("100g");

echo $product3->getNombre(). "<br>";
echo $product3->getPrecio(). "<br>";
echo $product3->getCategoria(). "<br>";
echo $product3->getAño(). "<br>";
echo $product3->getGarantia(). "<br>";
echo $product3->getMarca(). "<br>";
echo $product3->getPeso(). "<br>";

$product4 = new Product();
echo $product4->setNombre("Pastillas");
echo $product4->setPrecio(5);
echo $product4->setCategoria("medicina");
echo $product4->setAño("2022");
echo $product4->setGarantia(true);
echo $product4->setMarca("P&G");
echo $product4->setPeso("10g");

echo $product4->getNombre(). "<br>";
echo $product4->getPrecio(). "<br>";
echo $product4->getCategoria(). "<br>";
echo $product4->getAño(). "<br>";
echo $product4->getGarantia(). "<br>";
echo $product4->getMarca(). "<br>";
echo $product4->getPeso(). "<br>";




?>