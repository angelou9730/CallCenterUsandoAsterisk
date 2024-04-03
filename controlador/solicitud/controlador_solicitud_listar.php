<?php
    require '../../modelo/modelo_solicitud.php';

    $MU = new Modelo_Solicitud();
    $consulta = $MU->listar_registro_solicitud();
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