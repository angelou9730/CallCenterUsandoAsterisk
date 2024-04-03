<?php
    require '../../modelo/modelo_solicitud.php';

    $MU = new Modelo_Solicitud();
    $idsolicitud = htmlspecialchars($_POST['idsolicitud'],ENT_QUOTES,'UTF-8');

    $estado_solicitud = htmlspecialchars($_POST['estado_solicitud'],ENT_QUOTES,'UTF-8');


    $consulta = $MU->Modificar_Estado_Solicitud($idsolicitud,$estado_solicitud);
    echo $consulta;

?>