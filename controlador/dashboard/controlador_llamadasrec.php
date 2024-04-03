<?php
    require '../../modelo/modelo_dashboard.php';

    $MD= new Modelo_Dashboard();
    $consulta = $MD->registro_llamada_rechoy();
    
    echo json_encode($consulta);
?>