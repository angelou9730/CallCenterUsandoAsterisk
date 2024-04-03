<?php
    require '../../modelo/modelo_emisor.php';

    $MU = new Modelo_Emisor();
    $titulo = htmlspecialchars($_POST['titulo'],ENT_QUOTES,'UTF-8');
    $nombreCliente = htmlspecialchars($_POST['nombreCliente'],ENT_QUOTES,'UTF-8');
    $apellidoCliente = htmlspecialchars($_POST['apellidoCliente'],ENT_QUOTES,'UTF-8');
    $tipodocumento = htmlspecialchars($_POST['tipodocumento'],ENT_QUOTES,'UTF-8');
    $numerodocumento = htmlspecialchars($_POST['numerodocumento'],ENT_QUOTES,'UTF-8');
    $sexo = htmlspecialchars($_POST['sexo'],ENT_QUOTES,'UTF-8');
    $direccion = htmlspecialchars($_POST['direccion'],ENT_QUOTES,'UTF-8');
    $numeroCliente = htmlspecialchars($_POST['numeroCliente'],ENT_QUOTES,'UTF-8');
    $encargado = htmlspecialchars($_POST['encargado'],ENT_QUOTES,'UTF-8');

    $consulta = $MU->Registrar_Emisor($titulo,$nombreCliente,$apellidoCliente,$tipodocumento,$numerodocumento,$sexo,$direccion, $numeroCliente, $encargado);
    echo $consulta;

?>