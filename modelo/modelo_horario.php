<?php
class Modelo_Horario
{

    private $conexion;

    function __construct()
    {
        require_once 'modelo_conexion.php';
        $this->conexion = new conexion();
        $this->conexion->conectar();
    }

    function listar_registro_horario()
    {
        $sql="CALL SP_LISTAR_HORARIO_USUARIO ";
        $arreglo = array();
        if($consulta = $this->conexion->conexion->query($sql)){
            while($consulta_VH= mysqli_fetch_assoc($consulta)){
                $arreglo["data"][]=$consulta_VH;
            }
            return $arreglo;
            $this->conexion->cerrar();
        }
    }
    function listar_combo_usuario(){
        $sql ="CALL SP_LISTAR_COMBO_USUARIO";
        $arreglo = array();
        if($consulta=$this->conexion->conexion->query($sql)){
            while($consulta_VH=mysqli_fetch_assoc($consulta)){
                $arreglo["data"][]=$consulta_VH;
            }
            return $arreglo;
            $this->conexion->cerrar();
        }
    }
    function listar_combo_horario(){
        $sql ="CALL SP_LISTAR_COMBO_HORARIO";
        $arreglo = array();
        if($consulta=$this->conexion->conexion->query($sql)){
            while($consulta_VH=mysqli_fetch_assoc($consulta)){
                $arreglo["data"][]=$consulta_VH;
            }
            return $arreglo;
            $this->conexion->cerrar();
        }
    }
    function Registrar_Horario_Usuario($idusuario, $idhorario, $dia_semana) {
        $dia_semana_str = implode(',', $dia_semana);
        
        $sql = "CALL SP_INSERTAR_HORARIO_USUARIO('$idusuario', '$idhorario', '$dia_semana_str')";
        
        if($consulta = $this->conexion->conexion->query($sql)) {
            if(mysqli_num_rows($consulta) > 0) {
                $row = mysqli_fetch_assoc($consulta);
                if(isset($row[0])) {
                    return trim($row[0]);
                } else {
                    return "Error: No se encontró el primer elemento en la respuesta de la consulta.";
                }
            } else {
                return "Error: La consulta no devolvió ningún resultado.";
            }
            $this->conexion->cerrar();
        } else {
            return "Error: Falló la ejecución de la consulta.";
        }
    }
    
    
    
}
