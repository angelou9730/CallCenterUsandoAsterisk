<?php
    require '../../modelo/modelo_calificacion.php';

    $MU = new Modelo_Calificacion();
    $consulta = $MU->listar_registro_calificaciones();
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