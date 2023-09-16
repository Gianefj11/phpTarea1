<?php
class producto{
    public $nombreProducto;
    public $precioProducto;
    public function __construct($nombreProducto,$precioProducto)
    {
        $this->nombreProducto = $nombreProducto;
        $this->precioProducto = $precioProducto;
    }

}

?>