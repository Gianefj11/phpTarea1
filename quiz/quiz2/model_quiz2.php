<?php

class pais{
    public $nombrePais;
    public $zonaHoraria;

    public function __construct($nombre, $zona)
    {
        $this->nombrePais = $nombre;
        $this->zonaHoraria = $zona;
    }
}
?>