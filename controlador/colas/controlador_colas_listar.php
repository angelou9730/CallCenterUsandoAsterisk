<?php
    require '../../modelo/modelo_colas.php';

    $MU = new Modelo_Colas();
    $consulta = $MU->listar_registro_colas();
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