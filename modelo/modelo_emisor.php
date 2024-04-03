<?php

class Modelo_Emisor
{
    private $conexion;


    function __construct()
    {
        require_once 'modelo_conexion.php';
        $this->conexion = new conexion();
        $this->conexion->conectar();
    }
 
    function listar_emisor_registro()
    {
        $sql = "call SP_LISTAR_REGISTRO_EMISOR()";
        $arreglo = array();
        if ($consulta = $this->conexion->conexion->query($sql)) {
            while ($consulta_VU = mysqli_fetch_assoc($consulta)) {
                $arreglo["data"][] = $consulta_VU;
            }
            return $arreglo;
            $this->conexion->cerrar();
        }
    }
    function Registrar_Emisor($titulo,$nombreCliente,$apellidoCliente,$tipodocumento,$numerodocumento,$sexo,$direccion, $numeroCliente, $encargado){
        $sql = "call SP_REGISTRAR_EMISOR('$titulo','$nombreCliente','$apellidoCliente','$tipodocumento','$numerodocumento','$sexo','$direccion','$numeroCliente','$encargado')";
        if ($consulta = $this->conexion->conexion->query($sql)) {
            if ($row = mysqli_fetch_array($consulta)) {
                return $id = trim($row[0]);
            }
            $this->conexion->cerrar();
        }
    }
   
}
