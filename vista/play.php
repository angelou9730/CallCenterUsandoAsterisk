<?php
$folder = '/var/spool/asterisk/monitor'; // Ruta a la carpeta de mi maquina

if (isset($_GET['file'])) {
    $fileName = basename($_GET['file']);
    $filePath = $folder . '/' . $fileName;

    if (file_exists($filePath)) {
        // Configura las cabeceras para indicar que es un archivo de audio
        header('Content-Type: audio/wav');
        header('Content-Disposition: inline; filename=' . $fileName);
        header('Content-Transfer-Encoding: binary');
        header('Content-Length: ' . filesize($filePath));
        // Lee y envía el contenido del archivo
        readfile($filePath);
        exit;
    } else {
        http_response_code(404);
        die('Archivo no encontrado');
    }
} else {
    http_response_code(400);
    die('Parámetro de archivo faltante');
}
?>
