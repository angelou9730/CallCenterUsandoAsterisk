<?php
class  Modelo_Dashboard
{
    private $conexion;

    function __construct()
    {
        require_once 'modelo_conexion.php';
        $this->conexion = new conexion();
        $this->conexion->conectar();
    }

    function registro_llamada_rechoy(){
        $consulta ='CALL SP_DATO_LLAMADA_RESPONDIDA()';
        $resultados = $this->conexion->conexion->query($consulta);

        if($resultados){
            $datos = array();
            while($fila = mysqli_fetch_assoc($resultados)){
                $datos[]= $fila;
            }

            mysqli_free_result($resultados);
            return $datos;
        }else{
            return null;
        }
    }
    function registro_solicitud_rechoy(){
        $consulta ='CALL SP_SOLICITUD_REGISTRADAS_HOY()';
        $resultados = $this->conexion->conexion->query($consulta);

        if($resultados){
            $datos = array();
            while($fila = mysqli_fetch_assoc($resultados)){
                $datos[]= $fila;
            }

            mysqli_free_result($resultados);
            return $datos;
        }else{
            return null;
        }

    }
    function registro_llamada_perontoday(){
        $consulta ='CALL SP_PERSON_TODAY_CALLCENTER ';
        $resultados = $this->conexion->conexion->query($consulta);

        if($resultados){
            $datos = array();
            while($fila = mysqli_fetch_assoc($resultados)){
                $datos[]= $fila;
            }

            mysqli_free_result($resultados);
            return $datos;
        }else{
            return null;
        }

    }
    function register_call_noanswer(){
        $consulta ='CALL SP_DATO_LLAMADA_NO_RESPONDIDA()';
        $result=$this->conexion->conexion->query($consulta);

        if($result){
            $datos=array();
            while($fila = mysqli_fetch_assoc($result)){
                $datos[]=$fila;
            }
            mysqli_free_result($result);
            return $datos;
        }else{
            return null;
        }
    }
    function register_call_busy(){
        $consulta='CALL SP_DATO_LLAMADA_OCUPADA';
        $result=$this->conexion->conexion->query($consulta);

        if($result){
            $datos = array();
            while($fila = mysqli_fetch_assoc($result)){
                $datos[]=$fila;
            }
            mysqli_free_result($result);
            return $datos;
        }else{
            return null;
        }
    }
    function list_call_answered()
    {
        $sql = "call SP_LISTAR_LLAMADAS_ACTIVAS()";
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
    function list_call_busy()
    {
        $sql = "call SP_LISTAR_LLAMADAS_OCUPADAS()";
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
    function list_call_noanswer()
    {
        $sql = "call SP_LISTAR_LLAMADAS_OMITIDAS()";
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
    function list_client(){
        $sql = "SELECT * FROM llamadas_mas_frecuentes";
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

   



?>