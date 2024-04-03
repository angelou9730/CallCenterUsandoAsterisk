<?php
    require '../../modelo/modelo_dashboard.php';

    $MD= new Modelo_Dashboard();
    $consulta = $MD->register_call_noanswer();
    
    echo json_encode($consulta);
?>