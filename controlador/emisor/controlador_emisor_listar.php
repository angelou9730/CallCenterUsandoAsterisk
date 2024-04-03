<?php
    require '../../modelo/modelo_emisor.php';

    $MU = new Modelo_Emisor();
    $consulta = $MU->listar_emisor_registro();
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