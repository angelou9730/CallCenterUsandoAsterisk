<?php
    require '../../modelo/modelo_horario.php';

    $MH = new Modelo_Horario();
    $consulta = $MH->listar_registro_horario();
    if($consulta){
        echo json_encode($consulta);
    }else{
        echo '{
		    "sEcho": 1,
		    "iTotalRecords": "0",
		    "iTotalDisplayRecords": "0",
		    "aaData": []
		}';
    }


?>