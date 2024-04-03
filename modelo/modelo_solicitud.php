<?php

class Modelo_Solicitud
{
    private $conexion;


    function __construct()
    {
        require_once 'modelo_conexion.php';
        $this->conexion = new conexion();
        $this->conexion->conectar();
    }

    function listar_registro_solicitud()
    {
        $sql = "call SP_LISTAR_REGISTRO_TAREA()";
        $arreglo = array();
        if ($consulta = $this->conexion->conexion->query($sql)) {
            while ($consulta_VU = mysqli_fetch_assoc($consulta)) {
                $arreglo["data"][] = $consulta_VU;
            }
            return $arreglo;
            $this->conexion->cerrar();
        }
    }
    function Modificar_Estado_Solicitud($idsolicitud, $estado_solicitud)
    {
        $sql = "UPDATE tarea SET estadoTarea = '$estado_solicitud' WHERE idTarea = '$idsolicitud'";
        if ($consulta = $this->conexion->conexion->query($sql)) {
            return 1;
        } else {
            return 0;
        }
    }
    function Registrar_Solicitud($descripcion,$estado,$idEmisor,$empresa,$encargado,$estadoTarea,$idCola){
        $sql = "call SP_REGISTRAR_SOLICITUD('$descripcion','$estado','$idEmisor','$empresa','$encargado','$estadoTarea','$idCola')";
        if ($consulta = $this->conexion->conexion->query($sql)) {
            if ($row = mysqli_fetch_array($consulta)) {
                return $id = trim($row[0]);
            }
            $this->conexion->cerrar();
        }
    }
}
