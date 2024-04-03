<?php
    require '../../modelo/modelo_solicitud.php';

    $MU = new Modelo_Solicitud();
    $descripcion = htmlspecialchars($_POST['descripcion'],ENT_QUOTES,'UTF-8');
    $estado = htmlspecialchars($_POST['estado'],ENT_QUOTES,'UTF-8');
    $idEmisor = htmlspecialchars($_POST['idEmisor'],ENT_QUOTES,'UTF-8');
    $empresa = htmlspecialchars($_POST['empresa'],ENT_QUOTES,'UTF-8');
    $encargado = htmlspecialchars($_POST['encargado'],ENT_QUOTES,'UTF-8');
    $estadoTarea = htmlspecialchars($_POST['estadoTarea'],ENT_QUOTES,'UTF-8');
    $idCola = htmlspecialchars($_POST['idCola'],ENT_QUOTES,'UTF-8');


    $consulta = $MU->Registrar_Solicitud($descripcion,$estado,$idEmisor,$empresa,$encargado,$estadoTarea,$idCola);
    echo $consulta;

?>