<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Editar un producto</title>
    <link rel="stylesheet" href="estilos/styleAggProd.css"><!--Referencia a la hoja de estilo-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script><!--CDN de JQuery-->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script><!--Script para los símbolos de las redes sociales-->

  </head>
  <body>
      <form action="AggProducto.php" class="login-form" method="post">

      <div class="cajaTitulo">
        <h1>Agregar un producto</h1>
      </div>

      
        <!-- Campo nombre de usuario -->
        <div class="txtb">
          <input type="text" id="form_NomProd" name="NomProd">
          <span data-placeholder="Nombre del producto"></span>
        </div>
        <!-- Campo contraseña -->
        <div class="txtb">
          <input type="txtb" id="form_cant" name="cant">
          <span data-placeholder="Cantidad"></span>
        </div>

        <div class="txtb">
          <input type="txtb" id="form_Precio" name="precio">
          <span data-placeholder="Precio"></span>
        </div>

        <!-- Botón Agregar -->
        <input type="submit" class="logbtn" value="Agregar" name="btnAgg">
        <br>
        <a class="btn btn-success" href="bdABC.php">Revisar BD</a>
      </form>


      <?php
        $conn = mysqli_connect('localhost','root','I18100219','ramosme');

        if(isset($_POST['btnAgg']))
        {
            $Nombre_Producto = $_POST['NomProd'];
            $Cantidad_Producto = $_POST['cant'];
            $Precio_Producto = $_POST['precio'];

            $insert = "INSERT INTO Productos(Nombre,Cantidad,Precio) 
            VALUES('$Nombre_Producto','$Cantidad_Producto','$Precio_Producto')";

            $run_insert = mysqli_query($conn,$insert);
            if($run_insert == true)
            {
              ?>
              <div class="msjT">
                <h2>Se ha insertado el producto <?php $Nombre_Producto?> correctamente.</h2>
              </div>
              <?php
            }
            else
            {
              ?>
              <h2>No se ha podido insertar el producto, intente de nuevo.</h2>
              <?php
            }
        }
      ?>

      <!-- Esta función eleva los placeholders cuando están activos 
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