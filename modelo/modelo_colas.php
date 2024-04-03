<?php

class Modelo_Colas
{
    private $conexion;


    function __construct()
    {
        require_once 'modelo_conexion.php';
        $this->conexion = new conexion();
        $this->conexion->conectar();
    }

    function listar_registro_colas()
    {
        $sql = "call SP_LISTAR_REGISTRO_COLAS()";
        $arreglo = array();      
        if ($consulta = $this->conexion->conexion->query($sql)) {
            while ($consulta_VU = mysqli_fetch_assoc($consulta)) {
                $arreglo["data"][] = $consulta_VU;
            }
            // Cierra la conexión
            $this->conexion->cerrar();
            
            return $arreglo;
        }
    }
    function listar_combo_encargado(){
        $sql = "call SP_LISTAR_TRABAJADOR()";
        $arreglo = array();
        if ($consulta = $this->conexion->conexion->query($sql)) {
            while ($consulta_VU = mysqli_fetch_array($consulta)) {
                $arreglo[] = $consulta_VU;
            }
            return $arreglo;
            $this->conexion->cerrar();
        }
    }
    function listar_registro_contato()
    {
        $sql = "call SP_LISTAR_REGISTRO_CONTACTO()";
        $arreglo = array();      
        if ($consulta = $this->conexion->conexion->query($sql)) {
            while ($consulta_VU = mysqli_fetch_assoc($consulta)) {
                $arreglo["data"][] = $consulta_VU;
            }
            // Cierra la conexión
            $this->conexion->cerrar();
            
            return $arreglo;
        }
    }
}
