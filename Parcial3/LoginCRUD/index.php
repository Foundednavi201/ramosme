<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="estilos/style.css"><!--Referencia a la hoja de estilo-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script><!--CDN de JQuery-->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script><!--Script para los símbolos de las redes sociales-->

  </head>
  <body>
    <!--<img src="estilos/img/Fondo.jpg" alt="Fondo"> -->
      <form action="validar.php" class="login-form" method="post">
        <h1>Iniciar Sesión</h1>

        <!-- Campo nombre de usuario -->
        <div class="txtb">
          <input type="text" id="form_uname" name="usuario">
          <span data-placeholder="Usuario"></span>
        </div>
        <!-- Campo contraseña -->
        <div class="txtb">
          <input type="password" id="form_pssw" name="contraseña">
          <span data-placeholder="Contraseña"></span>
        </div>

        <!-- Botón iniciar sesión -->
        <input type="submit" class="logbtn" value="Iniciar sesión">

        <!-- Sección registrarse -->
        <div class="bottom-text">
          <p>Aún no estás registrado? <a href="#">Regístrate</a></p>
          <br><br>

          <span>O inicia sesión con:</span>
        </div>

        <!-- Íconos de redes sociales -->
        <div class="social-icons">

          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-github"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          </div>

      </form>

      <!-- Esta función eleva el texto de "Usuario" y "Contraseña" cuando están activos 
           y el segundo baja el texto cuando el campo deja de estar activo -->
      <script type="text/javascript">
      $(".txtb input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".txtb input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });
      </script>
  </body>
</html>