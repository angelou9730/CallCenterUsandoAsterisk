<?php

class Modelo_Calificacion 
{
    private $conexion;


    function __construct()
    {
        require_once 'modelo_conexion.php';
        $this->conexion = new conexion();
        $this->conexion->conectar();
    }
 
    function listar_registro_calificaciones()
    {
        $sql = "call SP_LISTAR_CALIFICACION()";
        $arreglo = array();
        if ($consulta = $this->conexion->conexion->query($sql)) {
            while ($consulta_VU = mysqli_fetch_assoc($consulta)) {
                $arreglo["data"][] = $consulta_VU;
            }
            return $arreglo;
            $this->conexion->cerrar();
        }
    }
    function Registrar_calificacion($idCola,$criterioA,$criterioB,$criterioC,$criterioD,$criterioE,$observaciones){
        $sql = "call SP_REGISTRAR_CALIFICACION('$idCola','$criterioA','$criterioB','$criterioC','$criterioD','$criterioE','$observaciones')";
        if ($consulta = $this->conexion->conexion->query($sql)) {
            if ($row = mysqli_fetch_array($consulta)) {
                return $id = trim($row[0]);
            }
            $this->conexion->cerrar();
        }
    }
   
   
}
