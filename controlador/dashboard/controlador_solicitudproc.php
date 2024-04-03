<?php
    require '../../modelo/modelo_dashboard.php';

    $MD= new Modelo_Dashboard();
    $consulta = $MD->registro_solicitud_rechoy();
    
    echo json_encode($consulta);
?>