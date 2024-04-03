<?php

class conexion{
    private $servidor;
    private $usuario;
    private $contrasena;
    private $basedatos;
    public $conexion;
    

    public function __construct()
    {
        $this->servidor="192.168.1.6";
        $this->usuario="angelo";
        $this->contrasena="1234";
        $this->basedatos="demo";
    }

    function conectar(){
        $this->conexion = new mysqli($this->servidor,$this->usuario,$this->contrasena,
        $this->basedatos);
        $this->conexion->set_charset("utf8");
    }

    function cerrar(){
        $this->conexion->close();
    }

}
?>