<?php
session_start();
if (isset($_SESSION['S_IDUSUARIO'])) {
  header('Location: ../vista/index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css " href="assets/css/style.css">

  <link rel="stylesheet" href="assets/css/sweetalert.css">
  <link rel="icon" href="assets/img/logo.png" type="image/x-icon" />
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>

<body>
  <!--  <img class="wave"src="../assets/img/wave.png" alt="">  -->
  <div class="contenedor">
    <div class="img">
      <img src="assets/img/bg.svg" alt="">
    </div>
    <div class="contenido-login">
    <form autocomplete="false" onsubmit="return false">

        <img src="assets/img/logo.png" alt="">
        <h2>SISCALL</h2>
        <div class="input-div nit">
          <div class="i">
            <i class="fas fa-user"></i>
          </div>
          <div class="div">

            <input type="text" id="txt_usu" name="usuario" autocomplete="off" placeholder="USUARIO">
          </div>
        </div>
        <div class="input-div pass">
          <div class="i">
            <i class="fas fa-lock"></i>
          </div>
          <div class="div">
            <input type="password" required="true" id="txt_con" name="clave" placeholder="CONTRASEÑA" autocomplete="current-password">
          </div>
        </div>

        <button class="btn" onclick="VerificarUsuario()"> Iniciar sesion
        </button>

      </form>
      

    </div>
  </div>
  <script src="assets/sweetalert2/sweetalert2.js"></script>
  <script src="assets/js/jquery.js"></script>
 

  <!-- Js personalizado -->
  <script src="../js/usuario.js"></script>

</body>
<script>
  txt_usu.focus();
</script>

</html>