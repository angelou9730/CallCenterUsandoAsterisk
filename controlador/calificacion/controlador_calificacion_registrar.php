<?php
    require '../../modelo/modelo_calificacion.php';

    $MU = new Modelo_Calificacion();
    $idCola = htmlspecialchars($_POST['idCola'],ENT_QUOTES,'UTF-8');
    $criterioA = htmlspecialchars($_POST['criterioA'],ENT_QUOTES,'UTF-8');
    $criterioB = htmlspecialchars($_POST['criterioB'],ENT_QUOTES,'UTF-8');
    $criterioC = htmlspecialchars($_POST['criterioC'],ENT_QUOTES,'UTF-8');
    $criterioD = htmlspecialchars($_POST['criterioD'],ENT_QUOTES,'UTF-8');
    $criterioE = htmlspecialchars($_POST['criterioE'],ENT_QUOTES,'UTF-8');
    $observaciones = htmlspecialchars($_POST['observaciones'],ENT_QUOTES,'UTF-8');

    $consulta = $MU->Registrar_calificacion($idCola,$criterioA,$criterioB,$criterioC,$criterioD,$criterioE,$observaciones);
    echo $consulta;

?>