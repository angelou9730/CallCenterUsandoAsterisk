<?php
    require '../../modelo/modelo_horario.php';

    $MH = new Modelo_Horario();
    $consulta = $MH->listar_combo_usuario();
  
    echo json_encode($consulta);
    


?>