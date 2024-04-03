<?php
    require '../../modelo/modelo_horario.php';

    $MH = new Modelo_Horario();
    $consulta = $MH->listar_combo_horario();
  
    echo json_encode($consulta);
    


?>