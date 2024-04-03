<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
   
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

require '../../modelo/modelo_usuario.php';

$MU = new Modelo_Usuario();
$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
$contrasena = htmlspecialchars($_POST['contrasena'], ENT_QUOTES, 'UTF-8');
$contra = password_hash($contrasena, PASSWORD_DEFAULT, ['cost' => 10]);

$consulta = $MU->Restablecer_Contra($email, $contra);

if ($consulta == '1') {
    $mail = new PHPMailer(true);

    try {
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        
        //Server settings
        $mail->SMTPDebug = 2;                      // Enable verbose debug output
        $mail->CharSet = "utf-8";// set charset to utf8
        $mail->isSMTP();                           // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';      // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                  // Enable SMTP authentication
        $mail->Username   = 'pruebacpsangelo@gmail.com'; // SMTP username (tu dirección de correo de Gmail)
        $mail->Password   = 'Jo75531568';       // SMTP password (tu contraseña de Gmail)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Enable implicit TLS encryption
        $mail->Port       = 587;                   // TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        // Recipients
        $mail->setFrom('pruebacpsangelo@gmail.com', 'angelo miranda');
        $mail->addAddress($email); // Add a recipient

        // Content
        $mail->isHTML(true);                                // Set email format to HTML
        $mail->Subject = 'Restablecer Password';
        $mail->Body    = 'Su contraseña fue restablecida<br> Nueva contraseña: <b>' . $contrasena . '</b>';
        
        // Send the email
        $mail->send();
        echo '1';
    } catch (Exception $e) {
        echo 'Error al enviar el correo electrónico: ' . $mail->ErrorInfo;
    }
} else {
    echo "2";
}
?>
