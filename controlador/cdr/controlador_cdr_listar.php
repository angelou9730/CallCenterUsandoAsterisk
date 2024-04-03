<?php
    require '../../modelo/modelo_cdr.php';

    $MU = new Modelo_Cdr();
    $consulta = $MU->listar_registro_llamadas();
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