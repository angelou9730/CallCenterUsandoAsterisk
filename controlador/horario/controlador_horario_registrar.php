<?php
require '../../modelo/modelo_horario.php';

// Verificar si se enviaron los datos esperados
if(isset($_POST['id_usuario'], $_POST['id_horario'], $_POST['dia_semana'])) {
    // Obtener los datos del formulario
    $id_usuario = htmlspecialchars($_POST['id_usuario'], ENT_QUOTES, 'UTF-8');
    $id_horario = htmlspecialchars($_POST['id_horario'], ENT_QUOTES, 'UTF-8');
    $dia_semana = $_POST['dia_semana']; // No necesitas usar htmlspecialchars aquí

    // Crear una instancia del modelo de horario
    $MH = new Modelo_Horario();

    // Llamar al método para registrar el horario del usuario
    $resultado = $MH->Registrar_Horario_Usuario($id_usuario, $id_horario, $dia_semana);

    // Verificar el resultado del procedimiento almacenado
    if($resultado === "1") {
        echo "1"; // Registro exitoso, devolver 1
    } else {
        echo "0"; // Error al registrar, devolver 0
    }
} else {
    echo "Faltan datos en el formulario";
}
?>
