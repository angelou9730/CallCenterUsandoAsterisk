<?php
    require '../../modelo/modelo_dashboard.php';

    $MD = new Modelo_Dashboard();
    $consulta = $MD->list_client();
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