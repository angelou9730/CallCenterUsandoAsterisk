<?php
    require '../../modelo/modelo_colas.php';

    $MU= new Modelo_Colas();
    $consulta = $MU->listar_combo_encargado();
    
    echo json_encode($consulta);
?>